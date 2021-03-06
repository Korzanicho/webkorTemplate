<div class="<?= post_class( 'moja-klasa' ) ?>">
    <?php the_title('<h3>', '</h3>'); ?>

    <?php 
        if (has_post_thumbnail()) {
            $futuredImage = get_the_post_thumbnail(null, 'full');
            $imageUrl = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];
            echo "<a href='$imageUrl'>";
            echo $futuredImage;
            echo "</a>";
        } 
    ?>

    <?php the_content(); ?>
    <?php the_author_posts_link( ) ?>

    <a href="<?= get_day_link( get_the_date( 'Y' ), get_the_date( 'm' ), get_the_date( 'd' ) ) ?>"> <?= get_the_date( 'd' ) ?> </a> <br>
    Kategorie:<br>
    <?php 

    $categories = get_the_category();

    foreach ($categories as $category) {
        echo " <a href='".get_category_link( $category->term_id )."'>".$category->name."</a>";
    }

    ?>

    <br>
    Tagi:
    <br>

    <?php 

    $tags = get_the_tags( ) ? get_the_tags( ) : [];

    foreach ($tags as $tag) {
        echo " <a href='".get_tag_link( $tag->term_id )."'>".$tag->name."</a>";
    }

    ?>
</div>

