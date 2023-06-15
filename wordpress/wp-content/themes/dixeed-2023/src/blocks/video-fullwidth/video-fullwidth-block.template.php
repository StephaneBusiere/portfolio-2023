<?php
/**
 * Content banner video fullwidth block template.
 *
 * @package Blocks/video-fullwidth/Templates
 */

$video_loop_mp4    = get_field( 'video_loop_mp4' );
$video_loop_webm   = get_field( 'video_loop_webm' );
$video_modal_mp4   = get_field( 'video_modal_mp4' );
$video_modal_webm  = get_field( 'video_modal_webm' );
$video_poster      = get_field( 'video_poster' );
?>
<section <?php ign_block_attrs( $block, 'video-fullwidth-block full-width' ); ?> data-scroll-section>
	<div class="video-fullwidth-wrapper" data-scroll data-scroll-speed="-7">
		<?php if($video_loop_mp4) { ?>
			<video muted loop autoplay playsinline poster="<?php echo $video_poster;?>">
				<source src="<?php echo $video_loop_webm;?>" type="video/webm">
			    <source src="<?php echo $video_loop_mp4;?>" type="video/mp4">
			</video>
		<?php } ?>
	    <div class="video-mask"></div>
	    <span class="play" data-mp4-url="<?php echo $video_modal_mp4;?>" data-webm-url="<?php echo $video_modal_webm;?>" data-poster-url="<?php echo $video_poster;?>">
	        <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
			    <circle cx="23.5" cy="23" r="21.186" stroke="#fff"/>
			    <path d="M30.543 21.477a1 1 0 0 1 0 1.732l-10.8 6.235a1 1 0 0 1-1.5-.866v-12.47a1 1 0 0 1 1.5-.867l10.8 6.236z" stroke="#fff" stroke-linejoin="round"/>
			</svg>
			<div><?php printf( __('Découvrir', 'dixeed-2023' )); ?></div>
	    </span>
	</div>		
</section>
<!-- modal video located in footer -->