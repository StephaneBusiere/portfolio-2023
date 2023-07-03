<?php
/**
 * Content block team.
 *
 * @package Blocks/team/Templates
 */

$team_title = get_field('team_title');
$team_paragraph = get_field('team_paragraph');
$team_people = get_field('team_people');
?>
<div <?php ign_block_attrs($block, 'team-block full-width'); ?> data-scroll-section>
	<svg class="ellipse-1" viewBox="0 0 1440 1476" fill="none" xmlns="http://www.w3.org/2000/svg">
		<circle cx="720" cy="738" r="737.5" stroke="url(#paint0_linear_228_366)" />
		<defs>
			<linearGradient id="paint0_linear_228_366" x1="720" y1="0" x2="720" y2="1476"
				gradientUnits="userSpaceOnUse">
				<stop offset="0.0729167" stop-color="#F1F2EB" stop-opacity="0" />
				<stop offset="0.479167" stop-color="#F2EFEB" />
				<stop offset="0.895833" stop-color="#F2EFEB" stop-opacity="0" />
			</linearGradient>
		</defs>
	</svg>
	<div class="team-wrapper">
		<svg class="ellipse-2" viewBox="0 0 1032 1032" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle cx="516" cy="516" r="515.5" stroke="#F2EFEB" />
		</svg>

		<ul class="team">
			<?php
			while (have_rows('team_people')):
				the_row();
				$team_img = get_sub_field('team_img');
				?>
				<li>
					<span style="background-image: url('<?php echo $team_img; ?>')"></span>
				</li>
				<?php
			endwhile;
			?>
		</ul>
		<div class="team-headline">
			<h2>
				<?php echo $team_title; ?>
			</h2>
			<p class="p-18">
				<?php echo $team_paragraph; ?>
			</p>
		</div>
	</div>
</div>