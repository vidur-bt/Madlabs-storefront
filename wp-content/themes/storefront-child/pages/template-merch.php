<?php
// Template Name: Merch
get_header();


?>


<!-- mad merch -->
<section class="bg-white pt-13 pb-14 lg:pb-[106px]">
    <div class="container">
        <div class="space-y-7.5">
            <h3 class="section-heading">Mad Merch</h3>

            <?php
            // Render your shortcode output here
            echo do_shortcode('[external_products ids="1393531,1210,1239,1227"]
');
            ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>