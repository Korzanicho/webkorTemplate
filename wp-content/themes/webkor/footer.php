        <footer>
            <?php
                if(is_active_sidebar( 'footer' )) get_sidebar( 'footer' );
                else {
                    ?>
                        <aside class="widget widget_search" id="search">
                            <?php get_search_form(  ) ?>
                        </aside>
                    <?php
                }
            ?>
            Stopka strony
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>