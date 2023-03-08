<?php
/**
 * Displays footer site info
 *
 * You are encouraged to add to your footer here.
 * You can make use of the acf theme settings page to add footer fields and output them here
 *
 * @package dixeed-2023
 * @since 1.0
 * @version 1.0
 */

?>


<div class="container footer">
	<?php if ( is_active_sidebar( 'footer-title' ) ) : ?>
		<div class="footer-title">
			<?php dynamic_sidebar( 'footer-title' ); ?>
		</div>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
		<div class="footer-left">
			<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
		<div class="footer-center">
			<?php dynamic_sidebar( 'footer-center' ); ?>
		</div>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
		<div class="footer-right">
			<?php dynamic_sidebar( 'footer-right' ); ?>
		</div>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-caption' ) ) : ?>
		<div class="footer-caption">
			<?php dynamic_sidebar( 'footer-caption' ); ?>
		</div>
	<?php endif; ?>
</div>
