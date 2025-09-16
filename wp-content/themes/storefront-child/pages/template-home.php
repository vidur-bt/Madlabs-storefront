<?php
    // Template Name: Home
    get_header();
?>

<!-- Hero Section -->
<section class="splide bg-gray min-h-[616px] rounded-3.5xl shadow-banner overflow-hidden relative">
    <div class="splide__track">
        <ul class="splide__list">
			<li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px]">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px]">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px] w-">ELEVATE YOUR SENSES</h1>
            </li>
            <li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px]">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px]">ELEVATE YOUR SENSES</h1>
            </li>
			<li class="splide__slide bg-[url(../images/home-banner.png)] bg-cover bg-center flex items-center justify-center">
                <h1 class="text-5xl text-center italic font-black text-black leading-13 -tracking-wider-xl max-w-[336px] w-">ELEVATE YOUR SENSES</h1>
            </li>
		</ul>
    </div>
    
</section>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        direction: 'ttb',
        height   : '616px',
        arrows   : false,
        paginationDirection: 'ttb',
        drag: true,
        classes: {
            pagination: 'liquid-glass !absolute items-center h-fit !right-[107px] !top-1/2 -translate-y-1/2 !w-[38px]'
        }
    } );
    splide.mount();
  } );
</script>

<?php get_footer(); ?>