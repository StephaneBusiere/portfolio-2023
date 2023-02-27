<?php
/**
 * Template Name: design system
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dixeed-2023
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="desing-system container">
				<h1>Basier Circle Bold</h1>
				<h2>Basier Circle Bold</h2>
				<h3>Basier Circle Bold</h3>
				<h4>Basier Circle Bold</h4>
				<p class="p-22">Proxima nova regular p-22</p>
				<p class="p-18">Proxima nova regular p-18</p>
				<p class="p-16">Proxima nova regular p-16</p>
				<p>Proxima nova regular</p>
				<p>&nbsp;</p>
				<p><a class="cta"> <span class="shape"></span><span class="text">Découvrir</span> </a></p>
				<p>&nbsp;</p>
				<p><span class="tag">Tag</span></p>
				<p>&nbsp;</p>
				<p><a class="cta-arrow"><svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M13 0.333352L15.2562 2.55002L6.38954 11.4167L25.6666 11.4167L25.6666 14.5834L6.38954 14.5834L15.2562 23.45L13 25.6667L0.333293 13L13 0.333352Z"></path></svg></a></p>
				<p>&nbsp;</p>
			</div>
			<?php
			while ( have_posts() ) : the_post();
				ign_template('content');
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();