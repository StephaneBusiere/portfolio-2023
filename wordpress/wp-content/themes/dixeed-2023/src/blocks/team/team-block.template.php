<?php
/**
 * Content block team.
 *
 * @package Blocks/team/Templates
 */

$team = get_field( 'team' );
?>
<div <?php ign_block_attrs( $block, 'team-block full-width' ); ?>>
	<div class="team-wrapper">
		<?php
		if ( have_rows( 'team' ) ) :
			?>
				<ul class="team">
				<?php
				while ( have_rows( 'team' ) ) :
					the_row();
					$slide_title   = get_sub_field( 'slide_title' );
					$slide_content = get_sub_field( 'slide_content' );
					$slide_graphic = get_sub_field( 'slide_graphic' );
					?>
							<li class="team-guy">
								
							</li>
							<?php
					endwhile;
				?>
				</ul>
				<?php
			else :
				// Do something...
			endif;
			?>
	</div>
</div>
