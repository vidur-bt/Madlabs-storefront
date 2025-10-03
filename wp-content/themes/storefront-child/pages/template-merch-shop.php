<?php

// Template Name: Template Merch Shop

get_header();

?>

<!-- banner -->
<section class="bg-white h-[593px] lg:h-[828px]">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/merch-banner@4x.png" width="100%" height="828" alt="" class="w-full h-full object-cover rounded-bl-3.5xl rounded-br-3.5xl max-h-[593px] lg:max-h-[828px]">
</section>

<!-- shop section -->
<div class="pt-12 lg:pt-14.25 pb-[53px] lg:pb-[94px]">
    <?php get_template_part('template-parts/shop-section-wrapper', null, array('page' => 'merch')); ?>
</div>


<?php get_footer(); ?>