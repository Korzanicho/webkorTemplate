<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                if ( in_category('Jakaś kategoria') ) {
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
                </article>
            <?php
                }
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }

        $newQuery = new Wp_Query( [
            'post_type' => 'page'
        ] );

        if ( $newQuery->have_posts() ) {
            while ( $newQuery->have_posts() ) {
                $newQuery->the_post();
                if ( !in_category('Jakaś kategoria') ) {
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
                </article>
            <?php
                }
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }

        wp_reset_postdata();
    ?>
</body>
</html>