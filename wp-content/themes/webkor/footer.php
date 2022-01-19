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

            <?php 
                wp_nav_menu([
                    'menu' => 'footer-menu',
                    'theme_location' => 'footer-menu'
                ]);
            ?>
        </footer>
        <?php 
            wp_footer();
        ?>
    </body>
</html>