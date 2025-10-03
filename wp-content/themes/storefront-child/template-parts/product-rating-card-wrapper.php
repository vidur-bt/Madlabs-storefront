<?php

$scrollView = $args['scrollView'] ?? false;
$carousel = $args['carousel'] ?? false;
$grid = $args['grid'] ?? false;
$desktopGridCol = $args['desktopGridCol'] ?? 4;
$gridGap = $args['gridGap'] ?? 3.75;

?>

<?php if($scrollView){ ?>
    <div class="overflow-x-auto scroll-container lg:overflow-x-hidden">
        <div class="grid grid-flow-col auto-cols-max gap-3.75 pb-5">
            <?php get_template_part('template-parts/product-card-rating', null); ?>
        </div>
    </div>
<?php } else if($carousel) { ?>
    <section class="splide product-rating-card-splide" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list">
                <?php get_template_part('template-parts/product-card-rating', null, array('carousel' => $carousel)); ?>
            </ul>
        </div>
    </section>
<?php } else { ?>
    <?php if($desktopGridCol === 3){ ?>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-3 gap-[21px] pb-5">
            <?php get_template_part('template-parts/product-card-rating', null, array('desktopGridCol' => $desktopGridCol)); ?>
        </div>
    <?php } else if($desktopGridCol === 4){ ?>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3.75 pb-5">
            <?php get_template_part('template-parts/product-card-rating', null, array('desktopGridCol' => $desktopGridCol)); ?>
        </div>
    <?php } ?>
<?php } ?>