<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dixeed-2023
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div id="primary" class="error-404 not-found content-area layout-center-content">
		<main id="main" class="site-main" role="main">

			<div class="container-content text-center">
				<div class="h1 title-404">404</div>
					<p><?php _e( 'It looks like nothing was found at this location.', 'dixeed-2023' ); ?></p>
					<a class="button" href="<?php echo home_url(); ?>"><?php _e( 'Go To Home', 'dixeed-2023' ); ?></a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();
