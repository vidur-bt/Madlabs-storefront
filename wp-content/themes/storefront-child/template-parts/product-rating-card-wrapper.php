<?php

$scrollView = $args['scrollView'] ?? false;
$carousel = $args['carousel'] ?? false;
$grid = $args['grid'] ?? false;

?>

<?php if($scrollView){ ?>
    <div class="overflow-x-auto scroll-container lg:overflow-x-hidden">
        <div class="grid grid-flow-col auto-cols-max gap-3.75 pb-5">
            <?php get_template_part('template-parts/product-card-rating'); ?>
        </div>
    </div>
<?php } else if($carousel) { ?>
    <section class="splide product-rating-card-splide" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list">
                <?php get_template_part('template-parts/product-card-rating'); ?>
            </ul>
        </div>
    </section>
<?php } else { ?>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3.75 pb-5">
        <?php get_template_part('template-parts/product-card-rating'); ?>
    </div>
<?php } ?>