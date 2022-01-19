<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <!-- Logo -->
        <?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        ?>
        <!-- Nagłówek -->
        <?php 
            if ( get_header_image() ) {
        ?>
            <img src="<?php header_image(); ?>" alt="" width="<?php echo absint(get_custom_header()->width) ?>" height="<?php echo absint(get_custom_header()->height) ?>">
        <?php
            }
        ?>

        <?php 
            wp_nav_menu([
                'menu' => 'main-menu',
                'theme_location' => 'main-menu',
                'fallback_cb' => false,
                'menu_class' => 'moje-menu',
                'menu_id' => 'moje-unikalne-menu',
                'container' => 'nav',
                'container_calss' => 'menu-wrapper',
                'container_id' => 'manu-glowne-wrapper',
                'container_aria_label' => 'opis aria',
                'before' => '<i>Sprawdź to:',
                'after' => '</i>',
                'link_before' => '<code>klik: ',
                'link_after' => '</code>',
                'echo' => true,
                'depth' => 0,
                'items_wrap' => "<ul id='%s' class='%s' data-collapse='wdwd'>%s</ul>"
            ]);
        ?>
    </header>