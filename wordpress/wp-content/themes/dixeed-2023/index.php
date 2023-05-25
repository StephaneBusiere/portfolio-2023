<?php
/**
 * The main template file
 *
 *
 * It is used to display a page when nothing more specific matches a query.
 *
 * The index page. Default for any archive not created. Duplicate this for new archive pages for post types and rename to archive-{post-type}.php.
 * For the 'post' post type you can duplicate this and rename it home.php
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dixeed-2023
 * @since   1.0
 * @version 1.0
 *
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
