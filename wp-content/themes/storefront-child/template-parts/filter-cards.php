<?php
    $page = $args['page'];
?>

<div class="flex flex-col gap-5.75">
    <?php if($page == 'category'): ?>
        <div class="border-2 border-gray-2 rounded-2.5xl overflow-hidden">
            <div class="border-b-2 border-gray-2">
                <div class="flex items-center justify-between bg-gray px-5.5 pt-7 pb-5.75">
                    <h5 class="text-lg-2 tracking-negative leading-[20px]">Filter</h5>
                    <h5 class="text-lg-2 tracking-negative leading-[20px] text-darker-gray">Advanced</h5>
                </div>
            </div>
            <div class="bg-white px-5.5 pt-7 pb-8.5 flex flex-col gap-8">
                <h5 class="text-lg-2 tracking-negative leading-[20px]">Type</h5>
                <div class="bg-gray-2 px-3.5 pt-3 pb-2.5 rounded-2 flex items-center gap-1.5 h-9">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-filter.svg ?>" alt="" class="">
                    <input id="filter-category-search" name="filter_category_search" type="search" placeholder="Search" class="text-sm-2 tracking-negative font-light focus:outline-0">
                </div>
                <ul class="flex flex-col gap-8">
                    <li class="">
                        <input type="radio" name="category" value="cartridges" id="cartridges" class="sr-only peer">
                        <label for="cartridges" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Cartridges</label>
                    </li>
                    <li class="">
                        <input type="radio" name="category" value="disposables" id="disposables" class="sr-only peer">
                        <label for="disposables" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Disposables</label>
                    </li>
                    <li class="">
                        <input type="radio" name="category" value="concentrates" id="concentrates" class="sr-only peer">
                        <label for="concentrates" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Concentrates</label>
                    </li>
                    <li class="">
                        <input type="radio" name="category" value="flower" id="flower" class="sr-only peer">
                        <label for="flower" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Flower</label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-2 border-gray-2 rounded-2.5xl overflow-hidden">
            <div class="border-b-2 border-gray-2">
                <div class="flex items-center justify-between bg-gray px-5.5 pt-7 pb-5.75">
                    <h5 class="text-lg-2 tracking-negative leading-[20px]">Filter</h5>
                    <h5 class="text-lg-2 tracking-negative leading-[20px] text-darker-gray">Advanced</h5>
                </div>
            </div>
            <div class="bg-white px-5.5 pt-7 pb-8.5 flex flex-col gap-8">
                <h5 class="text-lg-2 tracking-negative leading-[20px]">Type</h5>
                <div class="bg-gray-2 px-3.5 pt-3 pb-2.5 rounded-2 flex items-center gap-1.5 h-9">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-filter.svg ?>" alt="" class="">
                    <input id="filter-flavour-search" name="filter_flavour_search" type="search" placeholder="Search" class="text-sm-2 tracking-negative font-light focus:outline-0">
                </div>
                <ul class="flex flex-col gap-8">
                    <li class="">
                        <input type="radio" name="flavour" value="diamond" id="diamond" class="sr-only peer">
                        <label for="diamond" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Diamond Edition</label>
                    </li>
                    <li class="">
                        <input type="radio" name="flavour" value="gold" id="gold" class="sr-only peer">
                        <label for="gold" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Gold Edition</label>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if($page == 'merch'): ?>
        <div class="border-2 border-gray-2 rounded-2.5xl overflow-hidden">
            <div class="border-b-2 border-gray-2">
                <div class="flex items-center justify-between bg-gray px-5.5 pt-7 pb-5.75">
                    <h5 class="text-lg-2 tracking-negative leading-[20px]">Filter</h5>
                    <h5 class="text-lg-2 tracking-negative leading-[20px] text-darker-gray">Advanced</h5>
                </div>
            </div>
            <div class="bg-white px-5.5 pt-7 pb-8.5 flex flex-col gap-8">
                <h5 class="text-lg-2 tracking-negative leading-[20px]">Type</h5>
                <div class="bg-gray-2 px-3.5 pt-3 pb-2.5 rounded-2 flex items-center gap-1.5 h-9">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-filter.svg ?>" alt="" class="">
                    <input id="filter-flavour-search" name="filter_flavour_search" type="search" placeholder="Search" class="text-sm-2 tracking-negative font-light focus:outline-0">
                </div>
                <ul class="flex flex-col gap-8">
                    <li class="">
                        <input type="radio" name="merch" value="women" id="women" class="sr-only peer">
                        <label for="women" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Women</label>
                    </li>
                    <li class="">
                        <input type="radio" name="merch" value="men" id="men" class="sr-only peer">
                        <label for="men" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Men</label>
                    </li>
                    <li class="">
                        <input type="radio" name="merch" value="socks" id="socks" class="sr-only peer">
                        <label for="socks" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Socks</label>
                    </li>
                    <li class="">
                        <input type="radio" name="merch" value="battery" id="battery" class="sr-only peer">
                        <label for="battery" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Battery</label>
                    </li>
                    <li class="">
                        <input type="radio" name="merch" value="bats" id="bats" class="sr-only peer">
                        <label for="bats" class="cursor-pointer text-sm-2 tracking-negative peer-checked:text-darker-gray leading-normal h-[11px] block">Bats</label>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>