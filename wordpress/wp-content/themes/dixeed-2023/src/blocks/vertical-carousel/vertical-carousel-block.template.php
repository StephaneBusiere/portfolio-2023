<?php
/**
 * Content block cta.
 *
 * @package Blocks/cta/Templates
 */

$vertical_carousel_col_1 = get_field( 'vertical_carousel_col_1' );
$vertical_carousel_col_2 = get_field( 'vertical_carousel_col_2' );
$vertical_carousel_col_3 = get_field( 'vertical_carousel_col_3' );
?>
<div <?php ign_block_attrs( $block, 'vertical-carousel-block full-width' ); ?>>
	<div class="vertical-carousel-wrapper">
		<?php
			if( have_rows('vertical_carousel_col_1') ):
				?>
				<ul class="vertical-carousel">
					<?php
				    while( have_rows('vertical_carousel_col_1') ) : the_row();
				        $img = get_sub_field('vertical_carousel_image');
				        $link = get_sub_field('vertical_carousel_lien_image');
				        if($link === ''){
				        	?>
				        	<li>
					            <img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
				            </li>
				        	<?php
				        }
				        else {
					        ?>
				    	    <li>
				    	    	<a href="<?php echo $link;?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>" target="_blank">
					            	<img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
					            </a>
				            </li>
					        <?php
				        }
				    endwhile;
				    ?>
			    </ul>
				<?php
			else :
			    // Do something...
			endif;
		?>
		<?php
			if( have_rows('vertical_carousel_col_2') ):
				?>
				<ul class="vertical-carousel">
					<?php
				    while( have_rows('vertical_carousel_col_2') ) : the_row();
				        $img = get_sub_field('vertical_carousel_image');
				        $link = get_sub_field('vertical_carousel_lien_image');
				        if($link === ''){
				        	?>
				        	<li>
					            <img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
				            </li>
				        	<?php
				        }
				        else {
					        ?>
				    	    <li>
				    	    	<a href="<?php echo $link;?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>" target="_blank">
					            	<img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
					            </a>
				            </li>
					        <?php
				        }
				    endwhile;
				    ?>
			    </ul>
				<?php
			else :
			    // Do something...
			endif;
		?>
		<?php
			if( have_rows('vertical_carousel_col_3') ):
				?>
				<ul class="vertical-carousel">
					<?php
				    while( have_rows('vertical_carousel_col_2') ) : the_row();
				        $img = get_sub_field('vertical_carousel_image');
				        $link = get_sub_field('vertical_carousel_lien_image');
				        if($link === ''){
				        	?>
				        	<li>
					            <img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
				            </li>
				        	<?php
				        }
				        else {
					        ?>
				    	    <li>
				    	    	<a href="<?php echo $link;?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>" target="_blank">
					            	<img src="<?php echo $img;?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' );?>">
					            </a>
				            </li>
					        <?php
				        }
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