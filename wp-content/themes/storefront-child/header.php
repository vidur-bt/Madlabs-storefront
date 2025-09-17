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
<header id="main-menu-header" class="bg-transparent lg:bg-black lg:shadow-sm z-40 fixed w-full lg:sticky top-0">
    <div class="container px-9 pt-[75px] pb-2.5 lg:pb-0 lg:px-0 lg:pt-0">
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
            <div class="flex lg:hidden items-start justify-between w-full" id="mobile-menu-bar-icons-row">
				<button id="mobile-menu-btn" class="text-white">
					<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<g clip-path="url(#clip0_163_1445)">
							<path d="M0.840035 3.25484C0.840035 4.58309 1.92678 5.66984 3.25504 5.66984L11.7075 5.66984C13.0358 5.66984 14.1225 4.58309 14.1225 3.25484C14.1225 1.92659 13.0358 0.839844 11.7075 0.839844L3.25504 0.839844C1.92678 0.839845 0.840035 1.92659 0.840035 3.25484ZM6.87754 15.3298L3.25504 15.3298C1.92679 15.3298 0.840035 16.4166 0.840035 17.7448C0.840035 19.0731 1.92679 20.1598 3.25504 20.1598L6.87754 20.1598C8.20579 20.1598 9.29253 19.0731 9.29253 17.7448C9.29253 16.4166 8.20579 15.3298 6.87754 15.3298ZM0.840035 10.4998C0.840035 11.8281 1.92679 12.9148 3.25504 12.9148L17.745 12.9148C19.0733 12.9148 20.16 11.8281 20.16 10.4998C20.16 9.17159 19.0733 8.08484 17.745 8.08484L3.25504 8.08484C1.92678 8.08484 0.840035 9.17159 0.840035 10.4998Z" fill="black"/>
						</g>
						<defs>
							<clipPath id="clip0_163_1445">
								<rect width="21" height="21" fill="white" transform="translate(21) rotate(90)"/>
							</clipPath>
						</defs>
					</svg>
                </button>
				<div class="flex gap-10 items-start justify-between w-3/5">
					<!-- LOGO -->
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="84" height="38" viewBox="0 0 84 38" fill="none">
							<g clip-path="url(#clip0_145_698)">
							<path d="M42.0261 0.464355L28.1624 24.7001H35.0942L42.0149 13.082L48.7396 24.7001H55.6658L42.0261 0.464355Z" fill="black"/>
							<path d="M19.1152 22.395C19.7313 23.8373 21.1782 24.797 22.8117 24.6924C24.899 24.5613 26.4858 22.7333 26.3552 20.6069C26.2581 19.0126 25.2163 17.6995 23.8199 17.2017L19.1152 22.3931V22.395Z" fill="black"/>
							<path d="M8.18072 22.3951C7.56464 23.8374 6.11777 24.797 4.48422 24.6925C2.397 24.5614 0.811982 22.7333 0.940799 20.6089C1.03788 19.0146 2.07962 17.7015 3.47608 17.2036L8.18072 22.3951Z" fill="black"/>
							<path d="M13.6471 14.3265L0.93335 0.422363V9.25662L13.6471 23.3052L26.3608 9.56446V0.422363L13.6471 14.3265Z" fill="black"/>
							<path d="M73.8179 0.561471H57.6317V24.7003H73.8179C79.9564 24.7003 83.0666 21.5345 83.0666 15.2922V9.9677C83.0666 3.72538 79.9564 0.55957 73.8179 0.55957V0.561471ZM76.7266 15.2941C76.7266 17.3445 75.8323 18.2547 73.8179 18.2547H63.9718V7.00901H73.8179C75.8323 7.00901 76.7266 7.92493 76.7266 9.9696V15.2941Z" fill="black"/>
							<path d="M32.2826 37.578H34.0842L36.3936 33.1904L38.6376 37.578H40.4373L36.3936 29.749L32.2826 37.578Z" fill="black"/>
							<path d="M48.1814 33.5399C48.5716 33.1371 48.8031 32.5936 48.8031 31.9855C48.8031 31.2197 48.4073 30.4919 47.7669 30.0891C47.1751 29.7166 46.4694 29.7508 45.8011 29.7508H41.3074V37.5798H46.251C46.363 37.5798 46.4694 37.5741 46.5833 37.5684C46.7252 37.5627 46.8671 37.5437 46.9978 37.5209C47.5485 37.4373 47.9872 37.2492 48.3121 36.9547C48.3587 36.9129 48.4073 36.8635 48.4483 36.8102C48.4782 36.7798 48.5081 36.7437 48.5305 36.7076C48.566 36.6658 48.5958 36.624 48.6257 36.5746C48.6668 36.5195 48.7022 36.4549 48.7377 36.3884C48.8983 36.0444 48.986 35.6283 48.9991 35.1399C48.9524 34.4957 48.6444 33.9219 48.1814 33.5437V33.5399ZM42.9521 31.4249H46.251C46.3051 31.4249 46.3518 31.4249 46.3985 31.4306C46.4339 31.4306 46.475 31.4363 46.5105 31.442C46.7588 31.4896 46.9492 31.7138 46.9492 31.9836C46.9492 32.2782 46.7252 32.5195 46.4395 32.5385C46.4283 32.5442 46.4097 32.5442 46.3985 32.5442H42.9521V31.423V31.4249ZM46.9417 35.6302C46.8727 35.7043 46.7905 35.767 46.7009 35.8107C46.5796 35.8696 46.4451 35.8886 46.3107 35.8924C46.1614 35.8981 46.012 35.8981 45.8627 35.8943C45.7376 35.8924 45.6125 35.8943 45.4874 35.8943H42.954V34.2183H46.2528C46.2827 34.2183 46.3182 34.2183 46.3481 34.224C46.3835 34.224 46.4134 34.224 46.4489 34.2354C46.4843 34.2411 46.5142 34.2468 46.5497 34.2544C46.5908 34.2658 46.6393 34.2791 46.6748 34.2962C46.8223 34.3627 46.9529 34.471 47.0426 34.6155C47.0538 34.6402 47.0724 34.6706 47.0836 34.6991C47.1378 34.8074 47.1658 34.929 47.1658 35.0544C47.1658 35.2653 47.0855 35.4706 46.9455 35.6245L46.9417 35.6302Z" fill="black"/>
							<path d="M55.2384 32.5462C54.9602 32.5196 54.6764 32.5462 54.3983 32.5462H52.5799C52.4903 32.5462 52.4137 32.5462 52.326 32.5405C52.2438 32.5348 52.1729 32.5215 52.1001 32.5101C52.0889 32.5101 52.0814 32.5044 52.0702 32.5044C51.8742 32.4208 51.7379 32.2212 51.7379 31.9913C51.7379 31.7329 51.9153 31.5087 52.1524 31.4554C52.1934 31.444 52.2345 31.4364 52.283 31.4364C52.3727 31.4307 52.4735 31.425 52.5799 31.425H56.2148V29.749H52.5799C52.4791 29.749 52.3895 29.7547 52.283 29.7604C52.2121 29.7604 52.1412 29.7661 52.0702 29.7718H52.046C50.9501 29.8915 50.0988 30.8379 50.0988 31.9894C50.0988 33.0631 50.8381 33.9543 51.8331 34.1652L51.9395 34.1842C52.0217 34.1956 52.1113 34.2032 52.2065 34.2089C52.2308 34.2146 52.2606 34.2146 52.283 34.2146C52.3596 34.2146 52.4436 34.2203 52.5258 34.2203H53.6758C54.0921 34.2203 54.5084 34.2203 54.9247 34.2165C55.1562 34.2165 55.3952 34.2621 55.5838 34.4103C55.7742 34.5605 55.8825 34.8132 55.8825 35.0583C55.8825 35.3377 55.7425 35.6037 55.511 35.7576C55.3821 35.8431 55.244 35.883 55.0928 35.8868C54.893 35.8925 54.6932 35.8963 54.4954 35.8982C53.8457 35.9039 53.1978 35.8963 52.5482 35.8963H50.4105V37.578H55.0536C55.1432 37.578 55.2309 37.5723 55.3205 37.5666C56.5639 37.4279 57.5291 36.3619 57.5291 35.0602C57.5291 34.4977 57.3405 33.9429 56.997 33.502C56.5714 32.9547 55.9179 32.6127 55.2384 32.5481V32.5462Z" fill="black"/>
							<path d="M28.1157 29.749H26.4691V37.5723H26.4729H28.1157H31.4127V35.8982H28.1157V29.749Z" fill="black"/>
							</g>
							<defs>
							<clipPath id="clip0_145_698">
							<rect width="84" height="38" fill="white"/>
							</clipPath>
							</defs>
						</svg>
					</a>
					<div class="flex gap-3" id="mobile-menu-bar-icons-row">
						<!-- USER -->
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 0.5C11.8789 0.499994 13.2442 0.771579 14.5182 1.29925C15.7921 1.82692 16.9496 2.60034 17.9246 3.57535C18.8996 4.55037 19.6731 5.70788 20.2007 6.9818C20.7284 8.25572 21 9.62109 21 11C21 16.799 16.299 21.5 10.5 21.5C4.70103 21.5 0 16.799 0 11C0 5.20103 4.70103 0.5 10.5 0.5ZM11.55 12.05H9.44999C6.85051 12.05 4.61878 13.6244 3.65621 15.8717C5.17924 18.0074 7.67699 19.4 10.5 19.4C13.323 19.4 15.8207 18.0074 17.3438 15.8716C16.3812 13.6244 14.1495 12.05 11.55 12.05ZM10.5 3.65C8.76029 3.65 7.34998 5.06031 7.34998 6.8C7.34998 8.53968 8.76029 9.94999 10.5 9.94999C12.2397 9.94999 13.65 8.53968 13.65 6.8C13.65 5.06031 12.2397 3.65 10.5 3.65Z" fill="black"/>
							</svg>
						</button>
						<!-- SEARCH ICON -->
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.375 2.1665C9.90667 2.16663 8.45963 2.5179 7.15464 3.19101C5.84965 3.86411 4.72455 4.83954 3.8732 6.0359C3.02186 7.23227 2.46896 8.61488 2.26063 10.0684C2.0523 11.5219 2.19459 13.0041 2.67562 14.3915C3.15666 15.7788 3.96248 17.031 5.02587 18.0435C6.08926 19.0561 7.37938 19.7997 8.78859 20.2122C10.1978 20.6248 11.6852 20.6944 13.1268 20.4152C14.5684 20.1359 15.9223 19.516 17.0755 18.6072L21.0319 22.5635C21.2362 22.7608 21.5098 22.87 21.7939 22.8676C22.0779 22.8651 22.3496 22.7512 22.5505 22.5503C22.7514 22.3494 22.8653 22.0777 22.8678 21.7937C22.8702 21.5096 22.761 21.236 22.5637 21.0317L18.6074 17.0753C19.6777 15.7175 20.3441 14.0858 20.5304 12.3669C20.7167 10.648 20.4152 8.91136 19.6606 7.35577C18.906 5.80018 17.7287 4.48847 16.2634 3.57075C14.7981 2.65304 13.104 2.16639 11.375 2.1665ZM4.33336 11.3748C4.33336 9.50727 5.07525 7.7162 6.39582 6.39563C7.71639 5.07506 9.50746 4.33317 11.375 4.33317C13.2426 4.33317 15.0337 5.07506 16.3542 6.39563C17.6748 7.7162 18.4167 9.50727 18.4167 11.3748C18.4167 13.2424 17.6748 15.0335 16.3542 16.354C15.0337 17.6746 13.2426 18.4165 11.375 18.4165C9.50746 18.4165 7.71639 17.6746 6.39582 16.354C5.07525 15.0335 4.33336 13.2424 4.33336 11.3748Z" fill="black"/>
							</svg>
						</button>
						<!-- CART -->
						<button>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
								<path d="M17.7083 19.2502C16.552 19.2502 15.625 20.1772 15.625 21.3335C15.625 21.886 15.8445 22.4159 16.2352 22.8066C16.6259 23.1973 17.1558 23.4168 17.7083 23.4168C18.2608 23.4168 18.7907 23.1973 19.1814 22.8066C19.5721 22.4159 19.7916 21.886 19.7916 21.3335C19.7916 20.781 19.5721 20.2511 19.1814 19.8604C18.7907 19.4697 18.2608 19.2502 17.7083 19.2502ZM1.04163 2.5835V4.66683H3.12496L6.87496 12.5731L5.45829 15.1252C5.30204 15.4168 5.20829 15.7606 5.20829 16.1252C5.20829 16.6777 5.42779 17.2076 5.81849 17.5983C6.20919 17.989 6.73909 18.2085 7.29163 18.2085H19.7916V16.1252H7.72913C7.66006 16.1252 7.59382 16.0977 7.54498 16.0489C7.49615 16.0001 7.46871 15.9338 7.46871 15.8647C7.46871 15.8127 7.47913 15.771 7.49996 15.7397L8.43746 14.0418H16.1979C16.9791 14.0418 17.6666 13.6043 18.0208 12.9689L21.75 6.22933C21.8229 6.06266 21.875 5.88558 21.875 5.7085C21.875 5.43223 21.7652 5.16728 21.5699 4.97193C21.3745 4.77658 21.1096 4.66683 20.8333 4.66683H5.42704L4.44788 2.5835M7.29163 19.2502C6.13538 19.2502 5.20829 20.1772 5.20829 21.3335C5.20829 21.886 5.42779 22.4159 5.81849 22.8066C6.20919 23.1973 6.73909 23.4168 7.29163 23.4168C7.84416 23.4168 8.37406 23.1973 8.76477 22.8066C9.15547 22.4159 9.37496 21.886 9.37496 21.3335C9.37496 20.781 9.15547 20.2511 8.76477 19.8604C8.37406 19.4697 7.84416 19.2502 7.29163 19.2502Z" fill="black"/>
							</svg>
						</button>
					</div>
				</div>
                
            </div>
        </div>
    </div>
</header>

<main class="lg:rounded-tl-3.5xl lg:rounded-tr-3.5xl overflow-hidden">