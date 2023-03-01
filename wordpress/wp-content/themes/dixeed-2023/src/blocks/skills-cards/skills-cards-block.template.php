<?php
/**
 * Content skills-cards block template.
 *
 * @package Blocks/skills-cards/Templates
 */

?>
<?php
$background_color = get_field( 'background_color_skills-cards' );
?>
<section <?php ign_block_attrs( $block, 'skills-cards-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

	<div class="skills-cards-container">
		<?php
		if ( have_rows( 'skills_cards' ) ) :
			$count = 0;
			?>
		<div class="skills-cards-block container">
			<?php
			while ( have_rows( 'skills_cards' ) ) :
				the_row();
				$skills_cards_name = get_sub_field( 'skill_name' );
				$skills_cards_icon = get_sub_field( 'skill_icon' );
				$count++;
				?>
				<div class="skills-cards-content">
						<div class="skills-cards-number-container">
							<span class="skills-cards-number">0<?php echo esc_html( $count ); ?></span>
						</div>
					<div class="skills-cards-icon-container">
						<div class="skills-cards-icon">
							<img class="skills-cards-image" src="<?php echo esc_url( $skills_cards_icon ); ?>" alt="" style="object-fit:<?php echo esc_attr( $object_fit[0] ); ?>;padding-right:<?php echo esc_attr( $padding_right ); ?>px">
						</div>
					</div>
					<div class="skills-cards-text-container">
						<div class="skills-cards-text"><?php echo wp_kses_post( $skills_cards_name ); ?></div>
					</div>
				</div>
				<?php endwhile; ?>

		</div>
		<?php endif; ?>
	</div>
</section>
