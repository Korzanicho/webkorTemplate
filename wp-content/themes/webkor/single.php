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

                $args = [
                    'post_parent'   => get_the_ID(),
                    'post_type'     => 'attachment'
                ];

                $attachments = get_posts($args);

                if ($attachments) {
                    foreach ($attachments as $attachment) {
                        $metaData = wp_get_attachment_metadata($attachment->ID);
                        var_dump($metaData);
                    }
                }

                wp_link_pages();
                previous_post_link();
                next_post_link();
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }
    ?>
    </main>
<?php get_footer(); ?>