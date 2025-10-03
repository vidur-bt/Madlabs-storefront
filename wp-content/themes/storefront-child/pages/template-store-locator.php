<?php

// Template Name: store locator

get_header();

?>

<?php get_template_part('template-parts/blue-sky-banner', null, ['title' => 'Store Locator', 'bgImg' => get_stylesheet_directory_uri() . '/assets/images/category-page-banner-bg.png']); ?>


<section class="container-2 py-[50px]">
    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div>
        <!-- Search Heading -->
        <div class="w-full max-w-[1140px] text-[20px] font-medium mb-2">
            Search Location
        </div>

        <!-- Search Input -->
        <div class="w-full max-w-[1140px] mb-4">
            <div class="relative inline-block w-full sm:w-auto">
                <input type="text" placeholder="Enter a Location"
                    class="sm:w-[267px] sm:h-[36px] w-[100%] h-[29px] 
               pl-3 pr-10 bg-[#E5E5E5] border-0 rounded-full 
               text-[10px] md:text-sm focus:outline-none">
                <button class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Search.png" alt="Search" class="w-[14px] h-[15px] md:w-[14px] md:h-[14px]">
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-8 w-full">
        <!-- Main layout -->
        <div class="flex items-start space-x-0 md:space-x-6 w-[-webkit-fill-available] justify-center sm:justify-start">

            <!-- Sidebar -->
            <aside class="rounded-l-[12px] border border-gray-200 bg-white
                w-auto lg:w-[267px] lg:h-[607px] h-auto overflow-hidden flex flex-col mr-0">


                <!-- Black header -->
                <div class="bg-black text-white font-extralight text-[12px] sm:text-[14px] p-[20.5px_18px]">
                    Number of Branches: 99
                </div>


                <!-- Branch list -->
                <div class=" overflow-hidden bg-[#F0F0F0] flex-1 space-y-3 flex flex-col items-center justify-around">


                    <!-- Branch card -->
                    <div class="px-3 py-2 sm:p-[25px_20px] border-b-2 border-[#E5E5E5] mb-0">
                        <h3 class="font-semibold mb-2 sm:text-[16px] text-[9px]">Reefside Health Center</h3>


                        <div class="px-0 sm:px-[10px]">
                            <div class="flex items-start mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pin.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mt-[3px] mr-2" alt="Location" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">1104 Ocean St, Santa Cruz, CA 95060, United States</p>
                            </div>


                            <div class="flex items-center mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/time.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Clock" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">9:00AM - 10:00PM</p>
                            </div>


                            <div class="flex items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Calendar" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">Monday - Friday</p>
                            </div>
                        </div>
                    </div>

                    <!-- Branch card -->
                    <div class="px-3 py-2 sm:p-[25px_20px] border-0 md:border-b-2 border-[#E5E5E5] mb-0">
                        <h3 class="font-semibold mb-2 sm:text-[16px] text-[9px]">Reefside Health Center</h3>


                        <div class="px-0 sm:px-[10px]">
                            <div class="flex items-start mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pin.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mt-[3px] mr-2" alt="Location" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">1104 Ocean St, Santa Cruz, CA 95060, United States</p>
                            </div>


                            <div class="flex items-center mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/time.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Clock" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">9:00AM - 10:00PM</p>
                            </div>


                            <div class="flex items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Calendar" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">Monday - Friday</p>
                            </div>
                        </div>
                    </div>

                    <!-- Branch card -->
                    <div class="px-3 py-2 sm:p-[25px_20px] hidden md:block mb-0">
                        <h3 class="font-semibold mb-2 sm:text-[16px] text-[9px]">Reefside Health Center</h3>


                        <div class="px-0 sm:px-[10px]">
                            <div class="flex items-start mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pin.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mt-[3px] mr-2" alt="Location" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">1104 Ocean St, Santa Cruz, CA 95060, United States</p>
                            </div>


                            <div class="flex items-center mb-2">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/time.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Clock" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">9:00AM - 10:00PM</p>
                            </div>


                            <div class="flex items-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/calendar.png" class="w-[11px] h-[11px] sm:w-4 sm:h-4 mr-2" alt="Calendar" />
                                <p class="sm:text-[13px] text-[9px] text-[#919191]">Monday - Friday</p>
                            </div>
                        </div>
                    </div>

                </div>
            </aside>


            <!-- Map (iframe) -->
            <div class="sm:w-[861px] lg:h-[607px] w-auto h-[-webkit-fill-available] rounded-r-[12px] overflow-hidden">
                <iframe src="https://maps.google.com/maps?q=Santa%20Cruz&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="w-full h-full block border-0" aria-label="map-iframe"></iframe>
            </div>
        </div>


    </div>
    </div>
</section>




<?php get_footer(); ?>
