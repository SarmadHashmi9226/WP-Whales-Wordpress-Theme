<?php
/**
 * The template for displaying comments
 *
 * This template displays the current comments and the comment form.
 *
 * @package YourThemeName
 */

// If the post is password protected, and the visitor has not entered the password, return early.
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    printf( esc_html__( 'One Comment', 'yourthemename' ) );
                } else {
                    printf(
                        /* translators: %s: Number of comments */
                        esc_html( _nx( '%s Comment', '%s Comments', $comments_number, 'comments title', 'yourthemename' ) ),
                        number_format_i18n( $comments_number )
                    );
                }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 50,
                ) );
            ?>
        </ol>

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
            <nav class="comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'yourthemename' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'yourthemename' ) ); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; ?>

    <?php endif; // Check for have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a note.
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'yourthemename' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div><!-- #comments -->
