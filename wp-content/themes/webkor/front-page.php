<?php get_header(); ?>
    <main>
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

        $videoPath = get_template_directory_uri() . '/assets/videos/video.mp4';
        $posterPath = get_template_directory_uri() . '/assets/images/poster.png';

        echo do_shortcode("[video mp4='$videoPath' poster='$posterPath' loop='on' autoplay=1 width=320 height=240]");
    ?>
    </main>
<?php get_footer(); ?>