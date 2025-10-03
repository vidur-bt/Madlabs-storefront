<?php
// Template Name: Home
get_header();

$cards = [
    [
        'title' => 'All-in-one',
        'subtitle' => 'Gold Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/all-in-one.gif',
        'description' => 'Flavors',
    ],
    [
        'title' => 'Vape Cartridges',
        'subtitle' => 'Diamond Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/vape-cartridges-gold.gif',
        'description' => 'Flavors',
    ],
    [
        'title' => 'Vape Cartridges',
        'subtitle' => 'Gold Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/vape-cartridges-diamond.gif',
        'description' => 'Flavors',
    ],
];


?>

<!-- Hero Section -->
<?php if (have_rows('hero_slides')): ?>
    <section class="splide banner-splide bg-gray min-h-[616px] shadow-banner overflow-hidden relative">
        <div class="splide__track">
            <ul class="splide__list">
                <?php while (have_rows('hero_slides')): the_row();
                    $desktop_image = get_sub_field('desktop_image');
                    $mobile_image  = get_sub_field('mobile_image');
                    $heading_text  = get_sub_field('heading_text');
                ?>
                    <li class="splide__slide flex items-center justify-center relative">
                        <picture>
                            <source media="(min-width: 769px)" srcset="<?= esc_url($desktop_image['url']); ?>" />
                            <source media="(max-width: 768px)" srcset="<?= esc_url($mobile_image['url']); ?>" />
                            <img src="<?= esc_url($desktop_image['url']); ?>" alt="<?= esc_attr($desktop_image['alt']); ?>" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" />
                        </picture>
                        <h1 class="hero-title italic text-black max-w-[212px] lg:max-w-[336px]"><?= esc_html($heading_text); ?></h1>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>


<!-- About Section -->
<section class="bg-white pt-32">
    <div class="max-w-[1066px] mx-auto px-9 lg:px-0">
        <?php
        $about_heading = get_field('about_heading');

        $last_space_pos = strrpos($about_heading, ' ');

        if ($last_space_pos !== false) {
            $first_part = substr($about_heading, 0, $last_space_pos);
            $second_part = substr($about_heading, $last_space_pos + 1);
        } else {
            $first_part = $about_heading;
            $second_part = '';
        }
        ?>

        <h4 class="text-sm-2 lg:text-2xl font-sans mb-5.5">
            <span class="italic text-darker-gray"><?= esc_html($first_part); ?> </span>
            <span class="text-black font-semibold not-italic"><?= esc_html($second_part); ?></span>
        </h4>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-9 lg:gap-4.5">

            <?php
            $elevate_content  = get_field('card_content');
            $elevate_image    = get_field('card_image');
            ?>

            <div class="bg-gray col-span-2 rounded-2.5xl px-14.25 pt-9 lg:py-16 lg:pl-17 grid grid-cols-1 lg:grid-cols-2 gap-9 lg:gap-14.5 items-center relative">
                <?php
                $card_content = get_field('card_content');

                if ($card_content) {
                    // Split by first newline
                    $lines = preg_split("/\r\n|\n|\r/", $card_content, 2);

                    $heading = trim($lines[0]);
                    $content = isset($lines[1]) ? trim($lines[1]) : '';
                ?>

                    <div class="space-y-3">
                        <?php if ($heading): ?>
                            <h2 class="text-5xl font-bold uppercase text-center lg:text-left">
                                <?= esc_html($heading); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if ($content): ?>
                            <p class="text-base text-darker-gray hidden lg:block">
                                <?= nl2br(esc_html($content)); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                <?php
                }
                ?>


                <div class="flex justify-center">
                    <?php if ($elevate_image): ?>
                        <img
                            src="<?= esc_url($elevate_image['url']); ?>"
                            alt="<?= esc_attr($elevate_image['alt'] ?? ''); ?>"
                            class="lg:absolute lg:bottom-0 lg:right-[52px] max-w-[242px]">
                    <?php endif; ?>
                </div>
            </div>

            <div class="bg-gray rounded-2.5xl bg-[url(../images/map.png)] bg-cover bg-center py-9 lg:pt-9 lg:pb-8 px-11 flex flex-col justify-between gap-7.5">
                <h3 class="text-3.5 leading-normal font-sans font-medium text-black">
                    Find Nearby Products
                </h3>
                <a href="" class="bg-black py-4 px-4.5 rounded-full flex justify-between items-center">
                    <span class="text-sm-2 text-white font-medium">Store Locator</span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/next-arrow.svg" alt="arrow">
                </a>
            </div>
        </div>
        <div class="overflow-x-auto scroll-container mt-14.5">
            <div class="flex gap-5 pb-5">
                <?php
                foreach ($cards as $card) {
                    get_template_part('template-parts/flavours-cards', null, $card);
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- top shelf cannabis -->
<?php
$top_shelf_title = get_field('top_shelf_title');
$top_shelf_items = get_field('top_shelf_items');
?>

<section class="bg-white pt-13">
    <div class="container">
        <div class="space-y-7.5">

            <?php if ($top_shelf_title): ?>
                <h3 class="section-heading">
                    <?= esc_html($top_shelf_title); ?>
                </h3>
            <?php endif; ?>

            <?php if ($top_shelf_items): ?>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4.5 gap-y-5">
                    <?php foreach ($top_shelf_items as $item):
                        $image = $item['top_shelf_image'];
                        $link = $item['top_shelf_link'] ?? '#';
                    ?>
                        <?php if ($image): ?>
                            <?php $safe_link = !empty($link) ? esc_url($link) : 'javascript:void(0)'; ?>
                            <a href="<?= $safe_link; ?>" class="bg-gray rounded-2.5xl">
                                <img
                                    src="<?= esc_url($image['url']); ?>"
                                    alt="<?= esc_attr($image['alt'] ?? ''); ?>"
                                    class="w-full">
                            </a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>



<!-- mad merch -->
<section class="bg-white pt-13 pb-14 lg:pb-[106px]">
    <div class="container">
        <div class="space-y-7.5">
            <h3 class="section-heading">Mad Merch</h3>

            <?php
            // Render your shortcode output here
            echo do_shortcode('[external_products ids="1393531,1210,1239,1227"]
');
            ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>