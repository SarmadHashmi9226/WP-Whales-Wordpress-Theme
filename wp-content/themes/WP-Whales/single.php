<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();

            // Load content-{post_type}.php from template-parts/
            get_template_part( 'template-parts/content', get_post_type() );

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
