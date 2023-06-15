<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="site-content">
 *
 * Some stuff are added to the head via wp_head() from functions.php including title tag, fonts, style.css, scripts and more
 *
 * @package ignition
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg dom-loading front-end">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<?php
$app_menu = ign_get_config( 'mobile_menu_type', 'regular_menu' ); //accepts svg icon or 'app' which renders the special = to x

?>

<body <?php body_class( $app_menu ); ?>>

<a class="skip-link screen-reader-text" href="#site-content-skip">
	<?php _e( 'Skip to content', 'dixeed-2023' ); ?>
</a>


<div class="site-container" id="site-container"data-scroll-container>
	<?php
	$menu_icon = ign_get_config( 'menu_icon', 'icon-regular' );
	if ( $menu_icon == 'icon-regular' ) {
		$menu_icon = "<span class='$menu_icon'></span>";
	}
	?>


<?php if ( is_front_page() ) : ?>
	<div id="panel-left"></div>
	<div id="panel-right"></div>
	
	<div class="burger-menu-container home">
	<?php
	add_filter( 'wp_nav_menu_items', 'add_new_menu_item', 10, 2 );
	function add_new_menu_item( $nav, $args ) {
		$newmenuitem = "<div class='home-full-logo'>" . ign_logo() . '</div>';
		$nav         = $newmenuitem . $nav;
		return $nav;
	}
	?>
		<div class="site-navigation__nav-holder desktop">
				<nav class="site-navigation__nav" role="navigation"
					 aria-label="<?php _e( 'Top Menu', 'dixeed-2023' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'menu_id'        => 'top-menu-animated',
							'container'      => '',
							'fallback_cb'    => 'link_to_menu_editor',
						)
					);
					?>
				</nav>
			</div>
		<div class="cd-overlay-nav">
			<span ></span>
		</div>

		<div class="cd-overlay-content">
			<span></span>
		</div> 
		<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	</div>
	<?php
else :
	add_filter( 'wp_nav_menu_items', 'add_new_menu_item', 10, 2 );
	function add_new_menu_item( $nav, $args ) {
		$newmenuitem = ign_logo();
		$nav         = $newmenuitem . $nav;
		return $nav;
	}

	?>
	<div class="burger-menu-container">
		<div class="site-navigation__nav-holder desktop" >
				<nav class="site-navigation__nav" role="navigation"
					 aria-label="<?php _e( 'Top Menu', 'dixeed-2023' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'menu_id'        => 'top-menu-animated',
							'container'      => '',
							'fallback_cb'    => 'link_to_menu_editor',
						)
					);
					?>
				</nav>
			</div>
		<div class="cd-overlay-nav">
			<span ></span>
		</div>

		<div class="cd-overlay-content">
			<span></span>
		</div> 
		<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	</div>
	<div id="panel-right"></div>
<?php endif ?>

	<!-- <button aria-haspopup="true" tabindex="1" id="panel-left-toggle" aria-label="Toggle Left Panel" class="panel-left-toggle" data-toggle="menu-open" data-target="body">
		<span class="navigation-menu-icon"><?php echo $menu_icon; ?></span>
		<span class="screen-reader-text">Open left Panel</span>
	</button> -->

	



	<div id="page" class="site">

		<?php locate_template( 'src/parts/global/site-top.php', true, true ); ?>
		<a id="site-content-skip" class="screen-reader-skip">-</a>
		<div id="site-content" class="site-content">
