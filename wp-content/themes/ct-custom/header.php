<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;700&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/ddb3c6abae.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>

	<div class="topbar"><div class="container">
		<div class="left_menu">
			<ul>
				<li>Call Us Now!</li>
				<li><a href="tel:<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></li>
			</ul>
		</div>
		<div class="right_menu">
			<ul>
				<?php 
				$topbar_menu_options = array(
			        'echo' => false,
			        'container' => false,
			        'menu' => 'topbar menu'
			    );
			    $topbar_menu = wp_nav_menu($topbar_menu_options);
			    echo preg_replace(array(
			        '#^<ul[^>]*>#',
			        '#</ul>$#'
			    ), '', $topbar_menu);
				?>
			</ul>
		</div>
	</div></div>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<img src="<?php echo get_option('logo'); ?>" alt="" />
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ct-custom' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div class="breadcrumb">
		<div class="container">
			<ul>
				<li>Home</li>
				<li>Who we are</li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>

	<div id="content" class="site-content">
