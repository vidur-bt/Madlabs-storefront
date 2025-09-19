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

<!-- banner -->
<section class="bg-white h-[370px] lg:h-[620px]">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/product-page-banner@2x.png" width="100%" height="620" alt="" class="w-full h-full object-cover rounded-bl-3.5xl rounded-br-3.5xl max-h-[370px] lg:max-h-[620px]">
</section>

<!-- dropdown -->
<section class="bg-white pt-[50px] lg:pt-32">
    <div class="container-2">
        <?php get_template_part('template-parts/black-dropdown', null, ['dropdown' => $dropdown]); ?>
    </div>
</section>

<!-- best sellers -->
<section class="bg-white pt-8 lg:pt-4.5">
    <div class="container-2">
        <div class="space-y-5 lg:space-y-10">
            <div class="relative">
                <h3 class="section-heading">Our Best Sellers</h3>
                <div class="absolute right-0 top-1/2 -translate-y-1/2 hidden lg:flex items-center justify-center gap-4">
                    <button id="best-seller-arrow-prev" aria-label="Previous" class="bg-black w-14.5 h-14.5 rounded-full flex items-center justify-center cursor-pointer disabled:bg-gray disabled:[&_path]:stroke-disabled-gray disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M25.3334 16L6.66671 16M6.66671 16L16 6.66665M6.66671 16L16 25.3333" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button id="best-seller-arrow-next" aria-label="Next" class="bg-black w-14.5 h-14.5 rounded-full flex items-center justify-center cursor-pointer disabled:bg-gray disabled:[&_path]:stroke-disabled-gray disabled:cursor-not-allowed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M6.66663 16L25.3333 16M25.3333 16L16 6.66665M25.3333 16L16 25.3333" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
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

<section class="bg-white pt-[38px] pb-10 lg:pt-13 lg:pb-24">
    <div class="container-2">
        <div class="space-y-5 lg:space-y-10">
            <h3 class="section-heading">Latest Drops</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7">
                <div class="relative bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/disposables.png" alt="" class="">
                    <a href="" class="bg-black rounded-full text-xs lg:text-lg font-semibold text-white capitalize flex items-center justify-center min-w-[141px] h-[30px] lg:min-w-[219px] lg:h-[46px] w-fit absolute bottom-7 left-1/2 -translate-x-1/2 shadow-btn">
                        <span class="">Disposables</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-next.svg" alt="" class="absolute right-3 w-4.5 h-4.5 lg:w-7 lg:h-7">
                    </a>
                </div>
                <div class="relative bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cartridges.png" alt="" class="">
                    <a href="" class="bg-black rounded-full text-xs lg:text-lg font-semibold text-white capitalize flex items-center justify-center min-w-[141px] h-[30px] lg:min-w-[219px] lg:h-[46px] w-fit absolute bottom-7 left-1/2 -translate-x-1/2 shadow-btn">
                        <span class="">cartridges</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-next.svg" alt="" class="absolute right-3 w-4.5 h-4.5 lg:w-7 lg:h-7">
                    </a>
                </div>
                <div class="relative bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concentrates.png" alt="" class="">
                    <a href="" class="bg-black rounded-full text-xs lg:text-lg font-semibold text-white capitalize flex items-center justify-center min-w-[141px] h-[30px] lg:min-w-[219px] lg:h-[46px] w-fit absolute bottom-7 left-1/2 -translate-x-1/2 shadow-btn">
                        <span class="">concentrates</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-next.svg" alt="" class="absolute right-3 w-4.5 h-4.5 lg:w-7 lg:h-7">
                    </a>
                </div>
                <div class="relative bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flowers.png" alt="" class="">
                    <a href="" class="bg-black rounded-full text-xs lg:text-lg font-semibold text-white capitalize flex items-center justify-center min-w-[141px] h-[30px] lg:min-w-[219px] lg:h-[46px] w-fit absolute bottom-7 left-1/2 -translate-x-1/2 shadow-btn">
                        <span class="">flowers</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/slider-arrow-next.svg" alt="" class="absolute right-3 w-4.5 h-4.5 lg:w-7 lg:h-7">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>