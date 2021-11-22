<?php 
/* Template Name: Sidebar po prawej */

get_header(); ?>
    <main style="display: flex">
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
    <div>
        <?php if(is_active_sidebar( 'right-sidebar' )) get_sidebar( 'right-sidebar' ) ?>
    </div>
    </main>
<?php get_footer(); ?>