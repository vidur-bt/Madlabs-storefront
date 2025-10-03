<?php

// Template Name: Template Category

get_header();

?>

<!-- banner section -->
<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Vape Cartridge', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>

<!-- about product section  -->
<section class="bg-white pt-11 pb-2.5 lg:py-[83px] lg:pb-[122px]">
    <div class="container-3">
        <div class="flex flex-col lg:flex-row gap-14.25">
            <div class="flex flex-col items-start justify-between gap-3 lg:max-w-[325px] lg:pb-[100px]">
                <div class="max-lg:space-y-5.75">
                    <h3 class="section-heading max-lg:text-[25px] text-left font-bold tracking-negative">What's Vape Cartridge</h3>
                    <div class="space-y-5.75 lg:space-y-7.5">
                        <p class="text-xs-2 lg:text-base text-blue-gray tracking-negative leading-4.5 lg:leading-[21px]">MadLabs AIO Vapes feature our most refined, high-potency extract. We melt crystallized THCA — the purest form of THC—into oil and blend it with strain-specific terpenes for a clean, smooth vapor that hits hard and tastes sharp. The thicker oil requires a tighter wick, ensuring consistent flow and preventing clogs.</p>
                        <p class="text-xs-2 lg:text-base text-blue-gray tracking-negative leading-4.5 lg:leading-[21px]">MadLabs AIO Vapes feature our most refined, high-potency extract. We melt crystallized THCA — the purest form of THC—into oil and blend it with strain-specific terpenes for a clean, smooth vapor that hits hard and tastes sharp. The thicker oil requires a tighter wick, ensuring consistent flow and preventing clogs.</p>
                    </div>
                </div>
                <a href="" class="max-lg:hidden black-btn-big">Explore more</a>
            </div>
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vape-cartridge-product@4x.png" alt="" class="max-w-[773px] max-h-[778px]"> -->
            <picture>
                <!-- Desktop image (min-width: 769px) -->
                <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vape-cartridge-product@4x.png" />
                <!-- Mobile image (max-width: 768px) -->
                <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vape-cartridge-product-mobile@4x.png" />
                <!-- Fallback image for older browsers -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vape-cartridge-product@4x.png" class="lg:max-w-[773px] lg:max-h-[778px]" alt="banner image" />
            </picture>
        </div>
    </div>
</section>

<!-- shop section -->
 <div class="pb-[46px] lg:pb-[86px]">
    <?php get_template_part('template-parts/shop-section-wrapper', null, array('page' => 'category')); ?>
 </div>


<?php get_footer(); ?>