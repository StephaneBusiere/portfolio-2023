<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sea_Salt_Press
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area alignfull">
	<div class="comments-holder container-content">
		<?php

		if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'dixeed-2023' ), get_the_title() );
				} else {
					printf(
					/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'dixeed-2023'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
				?>
			</h2>

			<ol class="comment-list">
				<?php
				wp_list_comments( array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
					'reply_text'  => ign_get_svg( array( 'icon' => 'mail-reply' ) ) . __( ' Reply', 'dixeed-2023' ),
					'callback'    => 'dixeed_2023_comments_callback'
				) );
				?>
			</ol>

			<?php the_comments_pagination( array(
				'prev_text' => '<span class="iconify" data-icon="carbon:chevron-left"></span><span class="screen-reader-text">' . __( 'Previous', 'dixeed-2023' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'dixeed-2023' ) . '</span><span class="iconify" data-icon="carbon:chevron-right"></span>',
			) );

		endif; // Check for have_comments().

		// If comments are closed and there are comments, leave note
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php _e( 'Comments are closed.', 'dixeed-2023' ); ?></p>
		<?php
		endif;

		comment_form();
		?>
	</div><!-- content column -->
</div><!-- #comments -->
