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

                    <?php
                        $musicFile = get_template_directory_uri() . '/assets/sounds/music.mp3';
                        echo do_shortcode("[audio mp3='$musicFile' loop='on' autoplay=1]");
                    ?>

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