<?php 

$title = $args['title'];
$bgImg = $args['bgImg'] ? $args['bgImg'] : get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png';

?>

<section class="h-[251px] lg:h-[305px] relative flex justify-center items-center">
    <img src="<?php echo $bgImg; ?>" alt="" class="w-full h-full object-cover rounded-bl-3.5xl rounded-br-3.5xl absolute inset-0 ">
    <h1 class="hero-title mt-20 lg:mt-0"><?php echo $title; ?></h1>
</section>