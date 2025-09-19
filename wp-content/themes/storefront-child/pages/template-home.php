<?php
    // Template Name: Home
    get_header();

    $cards = [
    [
        'title' => 'All-in-one',
        'subtitle' => 'Gold Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/all-in-one.gif',
        'description' => 'Flavors',
    ],
    [
        'title' => 'Vape Cartridges',
        'subtitle' => 'Diamond Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/vape-cartridges-gold.gif',
        'description' => 'Flavors',
    ],
    [
        'title' => 'Vape Cartridges',
        'subtitle' => 'Gold Edition',
        'image' => get_stylesheet_directory_uri() . '/assets/images/vape-cartridges-diamond.gif',
        'description' => 'Flavors',
    ],
];


?>

<!-- Hero Section -->
<section class="splide banner-splide bg-gray min-h-[616px] shadow-banner overflow-hidden relative">
    <div class="splide__track">
        <ul class="splide__list">
			<li class="splide__slide flex items-center justify-center relative">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <!-- <img class="absolute w-full " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" alt=""> -->
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[212px] lg:max-w-[336px] z-10">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide flex items-center justify-center">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[212px] lg:max-w-[336px] z-10">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide flex items-center justify-center">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[212px] lg:max-w-[336px] z-10">ELEVATE YOUR SENSES</h1>
            </li>
            <li class="splide__slide flex items-center justify-center">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[212px] lg:max-w-[336px] z-10">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide flex items-center justify-center">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[212px] lg:max-w-[336px] z-10">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide flex items-center justify-center">
                <picture>
                    <!-- Desktop image (min-width: 769px) -->
                    <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" />
                    <!-- Mobile image (max-width: 768px) -->
                    <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner.png" />
                    <!-- Fallback image for older browsers -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-banner-2.png" class="absolute inset-0 w-full h-full object-cover transition-transform ease-in duration-300 hover:scale-[1.1]" alt="banner image" />
                </picture>
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px] w-">ELEVATE YOUR SENSES</h1>
            </li>
		</ul>
    </div>
    
</section>

<!-- About Section -->
<section class="bg-white pt-32">
    <div class="max-w-[1066px] mx-auto px-9 lg:px-0">
        <h4 class="text-sm-2 lg:text-2xl italic font-sans text-darker-gray mb-5.5">
            About Us - <span class="text-black font-semibold not-italic">Madlabs</span>
        </h4>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-9 lg:gap-4.5">
            <div class="bg-gray col-span-2 rounded-2.5xl px-14.25 pt-9 lg:py-16 lg:pl-17 grid grid-cols-1 lg:grid-cols-2 gap-9 lg:gap-14.5 items-center relative">
                <div class="space-y-3">
                    <h2 class="text-5xl font-bold uppercase text-center lg:text-left">ELEVATE</h2>
                    <p class="text-base text-darker-gray hidden lg:block">
                        We invite our customers to welcome 
                        a touch of madness into their lives, 
                        fueling passion and creativity in 
                        everything they do.
                    </p>
                </div>
                <div class="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hand-madlabs.png" alt="" class="lg:absolute lg:bottom-0">
                </div>
            </div>
            <div class="bg-gray rounded-2.5xl bg-[url(../images/map.png)] bg-cover bg-center py-9 lg:pt-9 lg:pb-8 px-11 flex flex-col justify-between gap-7.5">
                <h3 class="text-3.5 leading-normal font-sans font-medium text-black">
                    Find Nearby Products
                </h3>
                <a href="" class="bg-black py-4 px-4.5 rounded-full flex justify-between items-center">
                    <span class="text-sm-2 text-white font-medium">Store Locator</span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/next-arrow.svg" alt="arrow">
                </a>
            </div>
        </div>
        <div class="overflow-x-auto scroll-container mt-14.5">
            <div class="flex gap-5 pb-5">
                <?php 
                    foreach ($cards as $card) {
                        get_template_part('template-parts/flavours-cards', null, $card);
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- top shelf cannabis -->
<section class="bg-white pt-13">
    <div class="container">
        <div class="space-y-7.5">
            <h3 class="section-heading">Top shelf cannabis</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4.5 gap-y-5">
                <div class="bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vegetable-oil-background.png" alt="" class="w-full">
                </div>
                <div class="bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spoon.png" alt="" class="w-full">
                </div>
                <div class="bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/3rd-top-shelf.png" alt="" class="w-full">
                </div>
                <div class="bg-gray rounded-2.5xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/4th-top-shelf.png" alt="" class="w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mad merch -->
<section class="bg-white pt-13 pb-14 lg:pb-[106px]">
    <div class="container">
        <div class="space-y-7.5">
            <h3 class="section-heading">Mad Merch</h3>
            <div class="overflow-x-auto scroll-container lg:overflow-x-hidden">
                <div class="grid grid-flow-col auto-cols-max gap-3.75 pb-5">
                    <?php get_template_part('template-parts/product-card-normal'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>