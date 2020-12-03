<?php 
/* Template Name: Sidebar po prawej */

get_header(); ?>
    <main>
    page_sidebar-right.php
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
        echo get_page_template_slug();
        
    ?>
    <div>Sidebar</div>
    </main>
<?php get_footer(); ?>