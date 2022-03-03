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
                    'post_parent'       => get_the_ID(),
                    'post_type'         => 'attachment',
                    'post_mime_type'    => 'image'
                ];

                $attachments = get_posts($args);

                
                if ($attachments) {
                    echo '<h3>Załączone obrazki</h3>';

                    echo do_shortcode( '[gallery orderby="ID" order="DESC" size="medium" columns="2" link="file" itemtag="div" icontag="span" captiontag="p"]' );
                    // foreach ($attachments as $attachment) {
                    //     $metaData = wp_get_attachment_metadata($attachment->ID);
                    //     echo wp_get_attachment_image( $attachment->ID );

                    //     echo '<br>';

                    //     // $image = wp_get_attachment_image_src( $attachment->ID, 'full' );
                    //     // echo "<img src='$image[0]' width='$image[1]' height='$image[2]'>";
                    // }
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