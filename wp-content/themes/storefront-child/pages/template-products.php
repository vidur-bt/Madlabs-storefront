<?php

// Template name: Products

get_header();

$dropdown = [
    'title' => 'shop now',
    'options' => [
        [
            'item' => 'best sellers'
        ],
        [
            'item' => 'latest drops'
        ],
        [
            'item' => 'mad merch'
        ]
    ]
];

?>

<section class="bg-white">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-page-banner@2x.png" alt="" class="w-full object-cover rounded-bl-3.5xl rounded-br-3.5xl">
</section>

<section class="bg-white pt-32">
    <div class="container">
        <?php get_template_part('template-parts/black-dropdown', null, ['dropdown' => $dropdown]); ?>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="space-y-10">
            <div class="relative">
                <h3 class="section-heading">Our Best Sellers</h3>
                <div class="absolute right-0 top-1/2 -translate-y-1/2">
                    <button id="best-seller-arrow-prev" aria-label="Previous">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-prev.svg" alt="">
                    </button>
                    <button id="best-seller-arrow-next" aria-label="Next">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-next.svg" alt="">
                    </button>
                </div>
            </div>
            <?php if(wp_is_mobile()){
                get_template_part('template-parts/product-rating-card-wrapper', null, array('scrollView' => true));
            } else{
                get_template_part('template-parts/product-rating-card-wrapper', null, array('carousel' => true));
            } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>