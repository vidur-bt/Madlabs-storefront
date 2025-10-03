</div>
</main>

<footer class="bg-black rounded-tl-3.5xl rounded-tr-3.5xl overflow-hidden pt-10 pb-7.5 lg:pt-14.25 lg:pb-11">
    <div class="container">
        <!-- desktop footer -->
        <div class="hidden lg:grid grid-cols-2 gap-36">
            <div class="flex flex-col gap-12">
                <?php
                $footer_logo = get_field('footer_logo', 'option');
                $url  = $footer_logo['url'] ?? '';
                $alt  = $footer_logo['alt'] ?? '';
                ?>
                <a href="<?= esc_url(home_url()); ?>">
                    <?= $url ? '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '">' : ''; ?>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'menu_class'     => 'grid grid-cols-2 md:grid-cols-4 gap-y-5 gap-x-7 text-white text-sm',
                        'container'      => false,
                        'depth'          => 1,
                    ]);
                    ?>


            </div>
            <div class="flex flex-col">
                <div class="flex flex-col gap-1 mb-11">
                    <h3 class="text-3.5 text-white font-bold ">Newsletter</h3>
                    <div class="bg-white text-black pl-6 pr-2 py-1.5 rounded-full flex items-center space-x-2 max-w-[345px]">
                        <input type="text" name="newsletter" class="text-sm-2 placeholder:text-sm-2 placeholder:font-sans placeholder:font-normal placeholder:text-placeholder focus:outline-0" id="" placeholder="Enter Email">
                        <button class="bg-black text-sm-2 font-medium text-white rounded-full w-[157px] h-[46px] flex items-center justify-center">Explore more</button>
                    </div>
                </div>
                <?php
                $footer_disclaimer = get_field('footer_description', 'option');
                if ($footer_disclaimer): ?>
                    <p class="text-sm-2 text-white text-justify mb-10">
                        <?= esc_html($footer_disclaimer); ?>
                    </p>
                <?php endif; ?>

                <?php
                $privacy_links = get_field('privacy_field', 'option');
                ?>

                <?php if ($privacy_links): ?>
                    <div class="flex items-center gap-2">
                        <?php foreach ($privacy_links as $index => $link): ?>
                            <?php
                            $label = $link['privacy_text'] ?? '';
                            $url   = $link['privacy_link'] ?? '#';
                            ?>
                            <a href="<?= esc_url($url); ?>" class="text-sm-2 text-white">
                                <?= esc_html($label); ?>
                            </a>
                            <?php if ($index < count($privacy_links) - 1): ?>
                                <span class="text-sm-2 text-white">|</span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- mobile footer -->
        <div class="flex flex-col lg:hidden">
            <div class="flex items-center justify-between mb-5.5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png" alt="" class="w-[129px] h-[58px]">
                <div class="flex flex-col gap-1.5">
                    <h3 class="text-xs text-white font-bold">Newsletter</h3>
                    <div class="bg-white text-black pl-6 pr-2 py-1.5 rounded-full flex items-center space-x-2 max-w-[193px]">
                        <input type="text" name="newsletter" class="text-[10px] w-1/2 placeholder:text-[10px] placeholder:font-sans placeholder:font-normal placeholder:text-placeholder focus:outline-0" id="" placeholder="Enter Email">
                        <button class="bg-black text-[10px] font-medium text-white rounded-full w-[88px] h-[26px] flex items-center justify-center">Explore more</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-y-3.5 gap-x-6 *:text-white mb-3">
                <a href="" class="text-[11px] font-semibold">Merch</a>
                <a href="" class="text-[11px] font-semibold">FAQs</a>
                <a href="" class="text-[11px] font-semibold">Contact</a>
                <a href="" class="text-[11px] font-semibold">Products</a>
                <a href="" class="text-[11px] font-semibold">Overview</a>
                <a href="" class="text-[11px] font-semibold">Learn more</a>
            </div>
            <p class="text-[11px] text-white text-justify mb-[17px]">Product performance varies by use, temperature changes and other factors. No product or component can be absolutely secure. Madlabs vape products are intended only to be used by adults. Madlabs products are prohibited to sale to minors.</p>
            <div class="flex items-center gap-2">
                <a href="" class="text-sm-2 text-white">Terms & Service</a>
                <span class="text-sm-2 text-white">|</span>
                <a href="" class="text-sm-2 text-white">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>