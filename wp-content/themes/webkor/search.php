<?php
    get_header( 'blog' );
        get_search_form();
        echo "Wyniki wyszukiwania dla:".get_search_query();
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article style='border: 1px solid black'>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_excerpt(); ?>
                    <?php the_shortlink( 'Czytaj więcej', 'Przejdź do strony wpisu', '<span>', '</span>' ); ?>
                </article>
            <?php
            }
        } else {
            echo 'Brak postów do wyświetlenia';
        }

        ?>
</body>
</html>