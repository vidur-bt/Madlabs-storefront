<?php

$scrollView = $args['scrollView'] ?? false;
// $carousel = $args['carousel'] ?? false;
$grid = $args['grid'] ?? false;
$desktopGridCol = $args['desktopGridCol'] ?? 4;
$gridGap = $args['gridGap'] ?? 3.75;
$cardWidth = $args['cardWidth'] ?? '[255px]';

?>

<?php if($scrollView){ ?>
    <div class="overflow-x-auto scroll-container lg:overflow-x-hidden">
        <div class="grid grid-flow-col auto-cols-max gap-3.75 pb-5">
            <?php get_template_part('template-parts/product-card-normal', null, array('cardWidth' => $cardWidth)); ?>
        </div>
    </div>
<?php //} else if($carousel) { ?>
    <!-- <section class="splide product-normal-card-splide" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list">
                <?php get_template_part('template-parts/product-card-normal', null, array('cardWidth' => $cardWidth)); ?>
            </ul>
        </div>
    </section> -->
<?php } else { ?>
    <div class="grid grid-cols-2 md:grid-cols-<?php echo $desktopGridCol; ?> gap-<?php echo $gridGap; ?> pb-5">
        <?php get_template_part('template-parts/product-card-normal', null, array('cardWidth' => $cardWidth)); ?>
    </div>
<?php } ?>