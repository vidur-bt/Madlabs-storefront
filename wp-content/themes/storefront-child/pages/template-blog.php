<?php

// Template Name: Template Blog

get_header();

?>

<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Mad Labs Blog', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>



<section class="container-2 pt-[48px] sm:pt-[82px]">
  <div class="mx-auto flex flex-col items-center justify-center px-4">
    
    <div class="w-[358px] sm:w-[571px] max-w-[571px] mb-[30.76px] sm:mb-[49px]">
      <div class="relative">
        <input
          type="text"
          placeholder="Search Mod Labs Blog"
          class="w-full rounded-[10px] text-[13px] sm:text-[16px] placeholder:text-black bg-[#E5E5E5] border-black py-[4.75px] sm:py-[11px] px-4 pr-10 focus:outline-none focus:ring-1 focus:ring-black"
        />
        <svg class="absolute right-3 top-[28%] sm:top-[30%] w-[14px] h-[14px] sm:w-5 sm:h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
        </svg>
      </div>
    </div>

    <div class="w-full flex flex-col items-center">
      
      <div class="bg-[#E5E5E5] mb-[37.2px] sm:mb-[62px] rounded-[26px] overflow-hidden 
                  w-[358px]  sm:w-[571px] sm:h-[528px]">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hemp.png" 
             alt="THC Edibles" 
             class="w-full h-auto object-cover" />
        <div class="pt-[17px] sm:pt-4 pb-[14px] sm:pb-6 px-8">
          <h2 class="text-base sm:text-lg text-[15px] sm:text-[20px] font-semibold font-sans">6 Best THC Edibles Reviewed for 2025</h2>
          <p class="text-xs sm:text-[15px] mt-3 line-clamp-2 sm:line-clamp-none">
            The hemp edible market has evolved dramatically over the past few years, and as we approach 2025, hemp gummies are at the forefront of cannabis innovation...
          </p>
          <div class="flex justify-between items-center mt-3 sm:mt-4 text-xs sm:text-sm ">
            <div class="flex items-center space-x-1">
              <svg class="h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-[9px] sm:text-[12px]">Jan 2025</span>
            </div>
            <a href="#" class="text-black font-medium text-[11px] sm:text-[15px] hover:underline">Read more</a>
          </div>
        </div>
      </div>

      <div class="bg-[#E5E5E5] mb-[37.2px] sm:mb-[62px] rounded-[26px] overflow-hidden 
                  w-[358px]  sm:w-[571px] sm:h-[528px]">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/generative.png" 
             alt="THC Edibles" 
             class="w-full h-auto object-cover" />
        <div class="pt-[17px] sm:pt-4pb-[14px] sm:pb-6 px-8">
          <h2 class="text-base sm:text-lg text-[15px] sm:text-[20px] font-semibold font-sans">10 Best Cannabis-Infused Drinks for Dry</h2>
          <p class="text-xs sm:text-[15px] mt-3 line-clamp-2 sm:line-clamp-none">
           The hemp edible market has evolved dramatically over the past few years, and as we approach 2025, hemp gummies are at the forefront of cannabis innovation...
          </p>
          <div class="flex justify-between items-center mt-3 sm:mt-4 text-xs sm:text-sm ">
            <div class="flex items-center space-x-1">
              <svg class=" h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-[9px] sm:text-[12px]">Jan 2025</span>
            </div>
            <a href="#" class="text-black font-medium text-[11px] sm:text-[15px] hover:underline">Read more</a>
          </div>
        </div>
      </div>

      <div class="bg-[#E5E5E5] mb-[37.2px] sm:mb-[62px] rounded-[26px] overflow-hidden 
                  w-[358px]  sm:w-[571px] sm:h-[528px]">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/enerative.png" 
             alt="THC Edibles" 
             class="w-full h-auto object-cover" />
        <div class="pt-[17px] sm:pt-4 pb-[14px] sm:pb-6 px-8">
          <h2 class="text-base sm:text-lg text-[15px] sm:text-[20px] font-semibold font-sans">Hemp Gummies for Self-Care This Valentine’s Day</h2>
          <p class="text-xs sm:text-[15px] mt-3 line-clamp-2 sm:line-clamp-none">
            Valentine’s Day often comes with pressure to celebrate grand romantic gestures. But this year, why not shift the focus inward? Self-care is one of the purest forms of love...
          </p>
          <div class="flex justify-between items-center mt-3 sm:mt-4 text-xs sm:text-sm ">
            <div class="flex items-center space-x-1">
              <svg class=" h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-[9px] sm:text-[12px]">Jan 2025</span>
            </div>
            <a href="#" class="text-black font-medium text-[11px] sm:text-[15px] hover:underline">Read more</a>
          </div>
        </div>
      </div>

      <div class="bg-[#E5E5E5] mb-[43.69px] sm:mb-[78px] rounded-[26px] overflow-hidden 
                  w-[358px]  sm:w-[571px] sm:h-[528px]">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/6thc.png" 
             alt="THC Edibles" 
             class="w-full h-auto object-cover" />
        <div class="pt-[17px] sm:pt-4 pb-[14px] sm:pb-6 px-8">
          <h2 class="text-base sm:text-lg text-[15px] sm:text-[20px] font-semibold font-sans">6 Best THC Edibles Reviewed for 2025</h2>
          <p class="text-xs sm:text-[15px] mt-3 line-clamp-2 sm:line-clamp-none">
            The hemp edible market has evolved dramatically over the past few years, and as we approach 2025, hemp gummies are at the forefront of cannabis innovation...
          </p>
          <div class="flex justify-between items-center mt-3 sm:mt-4 text-xs sm:text-sm ">
            <div class="flex items-center space-x-1">
              <svg class=" h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-[9px] sm:text-[12px]">Jan 2025</span>
            </div>
            <a href="#" class="text-black font-medium text-[11px] sm:text-[15px] hover:underline">Read more</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<?php get_footer(); ?>