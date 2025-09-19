<?php
$dropdown = $args['dropdown'];
?>

<el-dropdown class="inline-block">
  <button class="inline-flex items-center min-w-[153px] min-h-9 lg:min-w-[255px] lg:h-[58px] justify-center gap-x-1.5 rounded-full bg-black px-3 py-2 text-xs lg:text-sm-3 font-bold text-white uppercase cursor-pointer">
    <?php echo esc_html($dropdown['title']); ?>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/chevron-down-white.svg" alt="" class="w-6 h-6 lg:w-8 lg:h-8">
  </button>

  <el-menu anchor="bottom end" popover class="w-64 origin-top-right rounded-2xl bg-black shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
    <div class="py-1">
      <?php foreach ($dropdown['options'] as $option): ?>
        <a href="#" class="block px-4 py-2 text-sm text-white focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden capitalize">
          <?php echo esc_html($option['item']); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </el-menu>
</el-dropdown>
