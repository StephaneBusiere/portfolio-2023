<?php

/**
 * @package dixeed-2023
 * @since   4.0
 *
 * Shows a single post or page
 * ign_header_block only outputs a header block if the_content does not have a header block.
 * a block is considered a header block if its name starts with header-
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content container-content grow-font">
			<?php the_content(); ?>
		</div>
	</article>


