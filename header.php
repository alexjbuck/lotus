<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lotus
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php
	/**
	 * Print the <title> tag based on what is being viewed
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page
	$site_description = get_bloginfo( 'description' , 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page $s', 'shape' ), max( $paged, $page) );
?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'lotus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"  aria-controls="menu" aria-expanded="false"><i id="menu-toggle" class="fa fa-chevron-right"></i></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
