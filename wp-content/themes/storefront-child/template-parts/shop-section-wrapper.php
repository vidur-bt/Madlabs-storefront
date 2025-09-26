<?php 

$page = $args['page'];

?>

<section class="">
    <div class="container-2">
        <div class="space-y-14">
            <?php get_template_part('template-parts/breadcrumbs'); ?>
            <div class="flex gap-[21px]">
                <div class="basis-[267px]"><?php get_template_part('template-parts/filter-sidebar', null, array('page' => $page)); ?></div>
                <?php 
                    if($page == 'category') { 
                        get_template_part('template-parts/product-rating-card-wrapper', null, array('desktopGridCol' => 3, 'gridGap' => '[21px]'));
                    } elseif($page == 'merch') {
                        get_template_part('template-parts/product-normal-card-wrapper', null, array('desktopGridCol' => 3, 'gridGap' => '[21px]'));
                    }
                ?>
            </div>
        </div>
    </div>
</section>