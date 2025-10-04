<?php 

$page = $args['page'];

?>

<section class="">
    <div class="container-2">
        <div class="space-y-8.5 lg:space-y-14">
            <?php get_template_part('template-parts/breadcrumbs'); ?>
            <div class="flex flex-col lg:flex-row gap-3.5 lg:gap-[21px]">
                <div class="lg:basis-[267px]"><?php get_template_part('template-parts/filter-sidebar', null, array('page' => $page)); ?></div>
                 <?php
            // Render your shortcode output here
            echo do_shortcode('[external_products_six]
');
            ?>

            </div>
        </div>
    </div>
</section>