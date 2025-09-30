<?php

// Template Name: Template Contact Us

get_header();

?>

<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Contact Us', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>

<section class="container-2 py-[50px]">
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <h1 class="section-heading !text-start text-[25px] am:text-[40px] tracking-[-1px]">Send us a message</h1>
    <p class="text-base text-[#BABABA] text-[12px] sm:text-[20px] tracking-normal sm:tracking-negative leading-[21px]">Please feel free to reach out for any general inquiries.</p>
     <?php echo do_shortcode('[contact-form-7 id="67d7087" title="Contact Us Form"]'); ?>
</section>


<?php get_footer(); ?>