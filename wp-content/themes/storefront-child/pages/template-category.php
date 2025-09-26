<?php

// Template Name: Template Category

get_header();

?>

<!-- banner section -->
<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Vape Cartridge', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>

<!-- about product section  -->
<section class="bg-white py-[83px] pb-[122px]">
    <div class="container-3">
        <div class="flex gap-14.25">
            <div class="flex flex-col items-start justify-between gap-3 max-w-[325px] pb-[100px]">
                <div class="">
                    <h3 class="section-heading text-left font-bold tracking-negative">What's Vape Cartridge</h3>
                    <div class="space-y-7.5">
                        <p class="text-base text-blue-gray tracking-negative leading-[21px]">MadLabs AIO Vapes feature our most refined, high-potency extract. We melt crystallized THCA — the purest form of THC—into oil and blend it with strain-specific terpenes for a clean, smooth vapor that hits hard and tastes sharp. The thicker oil requires a tighter wick, ensuring consistent flow and preventing clogs.</p>
                        <p class="text-base text-blue-gray tracking-negative leading-[21px]">MadLabs AIO Vapes feature our most refined, high-potency extract. We melt crystallized THCA — the purest form of THC—into oil and blend it with strain-specific terpenes for a clean, smooth vapor that hits hard and tastes sharp. The thicker oil requires a tighter wick, ensuring consistent flow and preventing clogs.</p>
                    </div>
                </div>
                <a href="" class="black-btn-big">Explore more</a>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vape-cartridge-product@4x.png" alt="" class="max-w-[773px] max-h-[778px]">
        </div>
    </div>
</section>

<!-- shop section -->
 <div class="pb-[86px]">
    <?php get_template_part('template-parts/shop-section-wrapper', null, array('page' => 'category')); ?>
 </div>


<?php get_footer(); ?>