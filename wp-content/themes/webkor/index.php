<?php
    get_header( 'blog' );

        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                if ( in_category('Jakaś kategoria') ) {
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>

                    <?php get_template_part('template-parts/content', 'comments') ?>
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

        ?>
        <a href="<?= get_permalink(15) ?>">Link</a>
</body>
</html>