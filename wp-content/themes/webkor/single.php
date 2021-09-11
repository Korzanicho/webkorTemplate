<?php get_header(); ?>
    <main>
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article style='border: 1px solid black'>
                    <?php set_post_format( $post->ID, 'video' ); get_template_part( 'template-parts/content', get_post_format() ); ?>
                </article>
            <?php
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }
    ?>
    </main>
<?php get_footer(); ?>