<?php

$title = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$image = $args['image'] ?? '';
$description = $args['description'] ?? '';

?>

<div class="bg-gray rounded-2.5xl py-4.5 w-1/2 lg:w-1/3 flex-shrink-0 flex flex-col items-center max-w-[342px]">
    <div class="px-5 flex flex-col items-center gap-1">
        <h5 class="text-lg font-normal text-center"><?php echo esc_html($title); ?></h5>
        <span class="text-xs text-center text-darker-gray"><?php echo esc_html($subtitle); ?></span>
    </div>
    <img src="<?php echo esc_url($image); ?>" alt="" class="max-h-[265px]">
    <p class="px-5 text-sm-2 text-darker-gray text-center"><?php echo esc_html($description); ?></p>
</div>