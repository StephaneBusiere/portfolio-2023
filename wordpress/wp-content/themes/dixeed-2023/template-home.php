<?php
/**
 * Template Name: Accueil
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
			<?php
			while ( have_posts() ) : the_post();
				ign_template('content');
			endwhile; 
			?>
		</main>
	</div>

<?php get_footer(); ?>

