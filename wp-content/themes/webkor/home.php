<?php
    get_header( 'blog' );
        get_search_form();
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php if (has_post_thumbnail( )) {?>
                        <a href="<?php the_permalink() ?>" alt="<?php the_title_attribute() ?>">
                            <?php the_post_thumbnail( 'customthumbnail' ) ?>
                        </a>
                    <?php } ?>

                    <?php the_excerpt(); ?>
                    <?php
                    $numberOfPosts = 1;
                    printf(_n('One post', '%s posts', $numberOfPosts, 'webkor'), $numberOfPosts);
                    $readMore = esc_html__('Read more', 'webkor');
                    ?>
                    <?php the_shortlink( $readMore, 'Przejdź do strony wpisu', '<span>', '</span>' ); ?>
                </article>
            <?php
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }

        the_posts_pagination();

        ?>
        <a href="<?= get_permalink(15) ?>">Link</a>
</body>
</html>