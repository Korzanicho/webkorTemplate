<?php 
/*
    Template Name: Pełna szerokość
    Template Post Type: page, post
*/

get_header(); ?>
    <main class='fullWidth'>
    page_full-width.php
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_content(); ?>
                </article>
            <?php
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }
    ?>
    </main>
<?php get_footer(); ?>