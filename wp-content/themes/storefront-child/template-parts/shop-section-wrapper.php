<section class="">
    <div class="container-2">
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <div class="flex gap-[21px]">
            <div class="basis-[267px]"><?php get_template_part('template-parts/filter-sidebar'); ?></div>
            <?php get_template_part('template-parts/product-rating-card-wrapper', null, array('desktopGridCol' => 3, 'gridGap' => '[21px]')); ?>
        </div>
    </div>
</section>