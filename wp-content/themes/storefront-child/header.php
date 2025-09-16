<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class('bg-black'); ?>>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 bg-white -z-50 opacity-0 transition-opacity ease-in-out duration-600 lg:hidden">
    <div class="px-9 py-[71px]">
        <!-- Mobile Menu Header -->
        <div class="flex items-start gap-6 mb-11">
            <button id="close-menu" class="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/mobile-menu-close.svg" alt="">
            </button>
            <div id="mobile-menu-logo" class="text-black font-bold text-xl tracking-wider pl-24 ease-in transition-all duration-300">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-black.png" alt="">
            </div>
        </div>

        <!-- Mobile Search -->
        <div class="mb-12">
            <div class="flex items-start gap-2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-black-mobile.svg" alt="search icon">
                <input type="search" name="mobile-search" id="mobile-search" placeholder="Mad Search" class="w-full border-b border-b-black bg-transparent focus:outline-none placeholder:text-lg placeholder:text-black placeholder:font-normal placeholder:font-display">
            </div>
        </div>

        <!-- Mobile Menu Items -->
        <nav class="space-y-5">
            <a href="#" class="block text-5xl font-black font-display text-black italic">PRODUCTS</a>
            <a href="#" class="block text-5xl font-black font-display text-black italic">MERCH</a>
            <a href="#" class="block text-5xl font-black font-display text-black italic">BLOG</a>
            <a href="#" class="block text-5xl font-black font-display text-black italic">FIND US</a>
            <a href="#" class="block text-5xl font-black font-display text-black italic">CONTACT US</a>
        </nav>

        <!-- Mobile Social Icons -->
        <div class="mt-7 flex space-x-4">
            <a href="#" class="text-black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/instagram-black-mobile.svg" alt="">
            </a>
            <a href="#" class="text-black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/twitter-black-mobile.svg" alt="">
            </a>
            <a href="#" class="text-black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/youtube-black-mobile.svg" alt="">
            </a>
            <a href="#" class="text-black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook-black-mobile.svg" alt="">
            </a>
            <a href="#" class="text-black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/tiktok-black-mobile.svg" alt="">
            </a>
        </div>

		<hr class="w-[294px] bg-black absolute bottom-14 left-1/2 -translate-1/2">
    </div>
</div>

<!-- Header -->
<header class="bg-black shadow-sm relative z-40">
    <div class="container mx-auto px-9 pt-[75px] pb-2.5 lg:pb-0 lg:px-0 lg:pt-0">
        <div class="flex items-center justify-between lg:gap-x-14 lg:h-32">
            <!-- Logo -->
            <div class="hidden lg:flex items-center">
                <a href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" alt="" class="">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-14">
                <a href="#" class="text-white text-xs hover:opacity-80 font-black">HOMEPAGE</a>
                <a href="#" class="text-white text-xs hover:opacity-80 font-light">PRODUCTS</a>
                <a href="#" class="text-white text-xs hover:opacity-80 font-light">MERCH</a>
                <a href="#" class="text-white text-xs hover:opacity-80 font-light">BLOG</a>
                <a href="#" class="text-white text-xs hover:opacity-80 font-light">FIND US</a>
                <a href="#" class="text-white text-xs hover:opacity-80 font-light">CONTACTS</a>
            </nav>

            <!-- Desktop Search & Cart -->
            <div class="hidden lg:flex items-center space-x-4">
                <button class="bg-white text-black px-4 py-2 rounded-full text-sm font-medium flex items-center space-x-2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-black-desktop.svg" alt="">
                    <input type="search" name="search" class="placeholder:text-sm placeholder:font-sans placeholder:font-normal placeholder:text-black focus:outline-0" id="" placeholder="Search Product">
                </button>
                <button class="w-10 h-10 bg-white text-black rounded-full flex items-center justify-center cursor-pointer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cart.svg" alt="">
                </button>
            </div>

            <!-- Mobile Menu Icons -->
            <div class="flex lg:hidden items-start justify-between w-full">
				<button id="mobile-menu-btn" class="text-white">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/hamburger.svg" alt="">
                </button>
				<div class="flex gap-10 items-start justify-between w-3/5">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white-mobile.png" alt="" class="">
					</a>
					<div class="flex gap-3">
						<button>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/user.svg" alt="">
						</button>
						<button>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-white-mobile.svg" alt="">
						</button>
						<button>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cart-white-mobile.svg" alt="">
						</button>
					</div>
				</div>
                
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
	const mobileMenuLogo = document.getElementById('mobile-menu-logo')
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuBtn = document.getElementById('close-menu');

    mobileMenuBtn.addEventListener('click', function() {
		mobileMenu.classList.add('z-50');
        mobileMenu.classList.remove('opacity-0', '-z-50');
		setTimeout(() => {
			mobileMenuLogo.classList.remove('pl-24');
			
		}, 300);
    });
	
    closeMenuBtn.addEventListener('click', function() {
		mobileMenu.classList.add('opacity-0', '-z-50');
		mobileMenu.classList.remove('z-50');
		mobileMenuLogo.classList.add('pl-24');
    });
});
</script>
