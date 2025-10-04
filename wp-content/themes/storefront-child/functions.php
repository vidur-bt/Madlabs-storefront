<?php

function madlabs_enqueue_styles()
{
    wp_enqueue_style('madlabs-style', get_stylesheet_directory_uri() . '/assets/styles/output.css', array(), filemtime(get_stylesheet_directory() . '/assets/styles/output.css'));
    wp_enqueue_style('splide-min-css', get_stylesheet_directory_uri() . '/assets/styles/splide.min.css', array());
}
add_action('wp_enqueue_scripts', 'madlabs_enqueue_styles');

function madlabs_enqueue_scripts()
{
    wp_enqueue_script('splide-min-js', get_stylesheet_directory_uri() . '/assets/js/splide.min.js', ['jquery'], true);

    if (is_page('home')) {
        wp_enqueue_script(
            'home-js', // Unique handle name
            get_stylesheet_directory_uri() . '/assets/js/home.js', // Script URL
            array('jquery'), // Dependencies (can be empty array if none)
            '1.0.0', // Script version (optional)
            true // Load in footer (true) or header (false)
        );
    }
    wp_enqueue_script(
        'script-js', // Unique handle name
        get_stylesheet_directory_uri() . '/assets/js/script.js', // Script URL
        array('jquery'), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
    wp_enqueue_script(
        'product-js', // Unique handle name
        get_stylesheet_directory_uri() . '/assets/js/product.js', // Script URL
        array('jquery'), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
    wp_enqueue_script(
        'tw-element-js', // Unique handle name
        'https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1', // Script URL
        array(), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
}
add_action('wp_enqueue_scripts', 'madlabs_enqueue_scripts');



function madlabs_register_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Main Navigation'),
        )
    );
}
add_action('init', 'madlabs_register_menus');


function register_footer_menu()
{
    register_nav_menu('footer_menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');





function custom_dequeue_storefront_styles()
{
    wp_dequeue_style('storefront-style');
    wp_deregister_style('storefront-style');

    wp_dequeue_style('storefront-fonts');
    wp_deregister_style('storefront-fonts');

    wp_dequeue_style('storefront-icons');
    wp_deregister_style('storefront-icons');
}
add_action('wp_enqueue_scripts', 'custom_dequeue_storefront_styles', 20);

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
}, 100);

remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');


?>


<?php
// Add ACF Options Page for global settings
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


// Allow SVG upload
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');







function create_external_products_table()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'external_products';  // table name with WP prefix
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        product_id BIGINT(20) NOT NULL,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        image_url VARCHAR(255) DEFAULT '',
        permalink VARCHAR(255) DEFAULT '',
        category VARCHAR(255) DEFAULT '',
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY product_id (product_id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

create_external_products_table();


function update_external_products_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'external_products';

    $consumer_key = 'ck_acf4c0202bb750fcc70471d77d875e060624843a';
    $consumer_secret = 'cs_224efe0c07c5ca8908d913555fff1815a93eef60';
    $api_url = 'https://shopmadlabs.com/wp-json/wc/v3/products?per_page=100';

    $response = wp_remote_get($api_url, [
        'headers' => [
            'Authorization' => 'Basic ' . base64_encode($consumer_key . ':' . $consumer_secret)
        ],
        'timeout' => 30,
    ]);

    if (is_wp_error($response)) {
        return;
    }

    $products = json_decode(wp_remote_retrieve_body($response));
    if (empty($products) || !is_array($products)) {
        return;
    }

    foreach ($products as $product) {
        $image_url = !empty($product->images[0]->src) ? $product->images[0]->src : '';
        $price = is_numeric($product->price) ? $product->price : 0;

        // Get categories as comma-separated string
        $category_names = [];
        if (!empty($product->categories)) {
            foreach ($product->categories as $cat) {
                $category_names[] = $cat->name;
            }
        }
        $category_string = implode(', ', $category_names);

        // Insert or update product in the database
        $wpdb->replace(
            $table_name,
            [
                'product_id' => $product->id,
                'name'       => $product->name,
                'price'      => $price,
                'image_url'  => $image_url,
                'permalink'  => $product->permalink,
                'category'   => $category_string,
                'updated_at' => current_time('mysql'),
            ],
            ['%d', '%s', '%f', '%s', '%s', '%s', '%s']
        );
    }
}


function schedule_external_products_cron()
{
    if (!wp_next_scheduled('update_external_products_cron_hook')) {
        wp_schedule_event(time(), 'daily', 'update_external_products_cron_hook');
    }
}
add_action('wp', 'schedule_external_products_cron');
add_action('update_external_products_cron_hook', 'update_external_products_table');

function clear_external_products_cron()
{
    $timestamp = wp_next_scheduled('update_external_products_cron_hook');
    if ($timestamp) {
        wp_unschedule_event($timestamp, 'update_external_products_cron_hook');
    }
}
add_action('switch_theme', 'clear_external_products_cron');



function display_external_products_from_db($atts)
{
    global $wpdb;

    $atts = shortcode_atts([
        'limit'    => 10,
        'category' => '',
        'ids'      => '',  // Added support for IDs
    ], $atts);

    $table_name = $wpdb->prefix . 'external_products';

    $query = "SELECT * FROM $table_name";
    $where_clauses = [];
    $params = [];

    // Filter by category if set
    if (!empty($atts['category'])) {
        $where_clauses[] = "category LIKE %s";
        $params[] = '%' . $wpdb->esc_like($atts['category']) . '%';
    }

    // Filter by ids if set
    if (!empty($atts['ids'])) {
        $ids_array = array_map('intval', explode(',', $atts['ids']));
        $placeholders = implode(',', array_fill(0, count($ids_array), '%d'));
        $where_clauses[] = "product_id IN ($placeholders)";
        $params = array_merge($params, $ids_array);
    }

    // Add WHERE clause if any filters
    if (!empty($where_clauses)) {
        $query .= ' WHERE ' . implode(' AND ', $where_clauses);
    }

    // Ordering
    if (!empty($atts['ids'])) {
        // Use FIELD() to preserve the order of product IDs
        $order_by = "FIELD(product_id, " . implode(',', $ids_array) . ")";
    } else {
        $order_by = "updated_at DESC";
    }

    $query .= " ORDER BY $order_by LIMIT %d";
    $params[] = intval($atts['limit']);

    $products = $wpdb->get_results($wpdb->prepare($query, ...$params));

    if (empty($products)) {
        return '<p>No products found.</p>';
    }

    ob_start();
    echo '<div class="grid grid-cols-2 md:grid-cols-4 gap-6">';
    foreach ($products as $product) {
        $price_display = '$' . number_format((float)$product->price, 2);
?>
        <div class="bg-gray rounded-[10px] px-4 py-4 shadow-sm hover:shadow-md transition">
            <a href="<?= esc_url($product->permalink); ?>" target="_blank">
                <img src="<?= esc_url($product->image_url); ?>" alt="<?= esc_attr($product->name); ?>" class="w-full h-auto mb-4" />
                <h3 class="font-normal text-xs mb-2"><?= esc_html($product->name); ?></h3>
                <?php if (!empty($product->category)) : ?>
                    <p class="text-gray-500 text-xs mb-1"><?= esc_html($product->category); ?></p>
                <?php endif; ?>
                <div class="flex items-center justify-between bg-gray-100 p-3 rounded-xl w-full max-w-xs shadow">
                    <div class="flex flex-col">
                        <h3 class="font-normal text-xs mb-2 mt-2">Price</h3>
                        <p class="text-gray-700 font-medium"><?= esc_html($price_display); ?></p>
                    </div>
                    <div class="w-10 h-10 bg-black rounded-[10px] flex items-center justify-center">
                        <img src="http://localhost/Madlabs-storefront/wp-content/uploads/2025/10/Shopping-cart.png" alt="Add to Cart" class="w-5 h-5" />
                    </div>
                </div>
            </a>
        </div>
    <?php
    }
    echo '</div>';
    return ob_get_clean();
}
add_shortcode('external_products', 'display_external_products_from_db');



function display_six_external_products_two_columns($atts)
{
    global $wpdb;

    $atts = shortcode_atts([
        'category' => '',
        'ids'      => '',
        'per_page' => 6, // default 6 products per page
    ], $atts);

    $per_page = intval($atts['per_page']);
    $current_page = max(1, intval(get_query_var('paged') ?: get_query_var('page') ?: 1));
    $offset = ($current_page - 1) * $per_page;

    $table_name = $wpdb->prefix . 'external_products';
    $where_clauses = [];
    $params = [];

    // Initialize query base
    $query = "SELECT * FROM $table_name";

    // Filter by category
    if (!empty($atts['category'])) {
        $where_clauses[] = "category LIKE %s";
        $params[] = '%' . $wpdb->esc_like($atts['category']) . '%';
    }

    // Filter by IDs
    $ids_array = [];
    if (!empty($atts['ids'])) {
        $ids_array = array_map('intval', explode(',', $atts['ids']));
        $placeholders = implode(',', array_fill(0, count($ids_array), '%d'));
        $where_clauses[] = "product_id IN ($placeholders)";
        $params = array_merge($params, $ids_array);
    }

    // Apply WHERE clause if any
    if (!empty($where_clauses)) {
        $query .= ' WHERE ' . implode(' AND ', $where_clauses);
    }

    // Order
    if (!empty($ids_array)) {
        $order_by = "FIELD(product_id, " . implode(',', $ids_array) . ")";
    } else {
        $order_by = "updated_at DESC";
    }

    $query .= " ORDER BY $order_by LIMIT %d OFFSET %d";
    $params[] = $per_page;
    $params[] = $offset;

    // Get products
    $products = $wpdb->get_results($wpdb->prepare($query, ...$params));

    // Count total products for pagination
    $count_query = "SELECT COUNT(*) FROM $table_name";
    if (!empty($where_clauses)) {
        $count_query .= ' WHERE ' . implode(' AND ', $where_clauses);
    }
    $total_products = $wpdb->get_var($wpdb->prepare($count_query, ...array_slice($params, 0, count($params) - 2)));

    if (empty($products)) {
        return '<p>No products found.</p>';
    }

    ob_start();


    echo '<div class="block">';
    echo '<div class="grid grid-cols-2 md:grid-cols-3 gap-6">';
    foreach ($products as $product) {
        $price_display = '$' . number_format((float)$product->price, 2);
    ?>
        <div class="bg-gray rounded-[10px] px-4 py-4 shadow-sm hover:shadow-md transition">
            <a href="<?= esc_url($product->permalink); ?>" target="_blank">
                <img src="<?= esc_url($product->image_url); ?>" alt="<?= esc_attr($product->name); ?>" class="w-full h-auto mb-4" />
                <h3 class="font-normal text-xs mb-2"><?= esc_html($product->name); ?></h3>
                <?php if (!empty($product->category)) : ?>
                    <p class="text-gray-500 text-xs mb-1"><?= esc_html($product->category); ?></p>
                <?php endif; ?>
                <div class="flex items-center justify-between bg-gray-100 p-3 rounded-xl w-full max-w-xs shadow">
                    <div class="flex flex-col">
                        <h3 class="font-normal text-xs mb-2 mt-2">Price</h3>
                        <p class="text-gray-700 font-medium"><?= esc_html($price_display); ?></p>
                    </div>
                    <div class="w-10 h-10 bg-black rounded-[10px] flex items-center justify-center">
                        <img src="http://localhost/Madlabs-storefront/wp-content/uploads/2025/10/Shopping-cart.png" alt="Add to Cart" class="w-5 h-5" />
                    </div>
                </div>
            </a>
        </div>
<?php
    }
    echo '</div>';


    $total_pages = ceil($total_products / $per_page);
    if ($total_pages > 1) {
        $base = get_pagenum_link(1);
        $format = strpos($base, '?') ? '&paged=%#%' : '?paged=%#%';

        echo '<div class="block mt-8 text-center">';
        echo paginate_links([
            'base'      => $base . $format,
            'format'    => '',
            'current'   => $current_page,
            'total'     => $total_pages,
            'prev_text' => '« Prev',
            'next_text' => 'Next »',
        ]);
        echo '</div>';

        echo '</div>';
    }

    return ob_get_clean();
}
add_shortcode('external_products_six', 'display_six_external_products_two_columns');
