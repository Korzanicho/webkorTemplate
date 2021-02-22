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
        <?php 
            if ( get_header_image() ) {
        ?>
            <img src="<?php header_image(); ?>" alt="" width="<?php echo absint(get_custom_header()->width) ?>" height="<?php echo absint(get_custom_header()->height) ?>">
        <?php
            }
        ?>
    </header>