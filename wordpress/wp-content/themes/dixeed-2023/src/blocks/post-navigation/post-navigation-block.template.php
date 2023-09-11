<?php
/**
 * Content block post-navigation.
 *
 * @package Blocks/post-navigation/Templates
 */

?>
<div <?php ign_block_attrs( $block, 'cta-block full-width' ); ?>  style="background-color:<?php echo esc_attr( $background_color ); ?>" data-scroll-section>
<?php if ( ! is_page() ): ?>
	<section class="after-article container-content">
		<?php
		the_post_navigation( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'dixeed-2023' ) . '</span><div class="nav-title"><span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-left"></span></span> <span>%title</span></div>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'dixeed-2023' ) . '</span><div class="nav-title"><span>%title</span> <span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-right"></span></span></div>',
		) );
		?>

		<?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
	</section>
<?php
endif;
?>
</div>
