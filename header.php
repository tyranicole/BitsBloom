<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BitsBloom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">

 var bits = '<a class="bitsbulletin" href="/bitsbulletin">bitsbulletin</a>';
setTimeout(function() {
	$('ul.nav-menu').append(bits);

}, 500);
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bitsbloom' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title show-l">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/bitsbloom-logo.png" /></a>
			</h1>

			<h1 class="site-title show-m">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo-short.png" /></a>
			</h1>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'bitsbloom' ); ?></button> -->

			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><span></span></button>

			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			<?php wp_list_categories('title_li=<h2>Categories</h2>'); ?>
			<!-- <a class="bitsbulletin" href="/bitsbulletin">bitsbulletin</a> -->
			<ul class="social">
				<li><a href="https://www.facebook.com/bitsbloom" target="_blank"><i class="fa fa-facebook" target="_blank"></i></a></li>
				<li><a href="https://twitter.com/bitsbloom" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="mailto:contact@bitsbloom.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
				<li><a href="https://instagram.com/bitsbloom/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.pinterest.com/bitsbloom/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				<li id="searchTrigger"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></li>
			</ul>

		</nav>

	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<div><input type="text" size="18" placeholder="Search bitsbloom" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Search" class="btn" />
		</div>
	</form>
	</header>

	<div id="content" class="site-content">
