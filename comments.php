<?php
    /**
     * @package WordPress
     * @subpackage NavyBlue
     * @version 1.0
     * 
     */
    if(post_password_required())
        return;
?>
    <div id="comments" class="col-lg-10 col-md-4 col-sm-12 mt-5 p-4 rounded bg-white">
    <?php if(have_comments()) : ?>
        <?php
            printf(_nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'NavyBlue' ),
            number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );

        ?>
        <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) );
        ?>
        <?php
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'NavyBlue' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'NavyBlue' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'NavyBlue' ) ); ?></div>
        </nav>
        <?php endif; ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'NavyBlue' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>