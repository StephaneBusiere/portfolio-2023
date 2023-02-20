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

get_header();


?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="entry-header layout-center-content">
                <div class="container text-center">
                    <h1 class="entry-title">
						<?php if ( is_front_page() ) {
							echo get_bloginfo( 'name' );
						}

						if( is_post_type_archive()){
						    echo post_type_archive_title();
                        } ?>
                    </h1>
                </div>
            </header>

            <div class="container">
                <section class="archive-cards card-grid">
					<?php
					if ( have_posts() ):
						while ( have_posts() ) : the_post();
							ign_template( 'card' );
						endwhile;
					endif;

					?>
                </section><!-- .entry-content -->

                <div class="container card-pagination text-center">
					<?php
					the_posts_pagination( array(
						'prev_text'          => '<span class="iconify" data-icon="carbon:chevron-left"></span><span class="screen-reader-text">' . __( 'Previous page', 'dixeed-2023' ) . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'dixeed-2023' ) . '</span><span class="iconify" data-icon="carbon:chevron-right"></span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dixeed-2023' ) . ' </span>',
					) );
					?>
                </div>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
