<?php

    $page = $args['page'];
?>

<aside>
    <div class="hidden lg:block">
        <?php get_template_part('template-parts/filter-cards', null, array('page' => $page)); ?>
    </div>
</aside>