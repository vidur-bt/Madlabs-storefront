<?php

// Template Name: Template Blog

get_header();

?>

<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Mad Labs Blog', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>

<section class="container-2 py-[50px]">
    <h1 class="section-heading !text-start text-[25px] am:text-[40px] tracking-[-1px]">Blog page</h1>
</section>


<?php get_footer(); ?>