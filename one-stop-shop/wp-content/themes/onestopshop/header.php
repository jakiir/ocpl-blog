<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onestopshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/style.css'; ?>">
	<script src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.min.js'; ?>"></script>
	<script src="<?php echo get_stylesheet_directory_uri() . '/js/bootstrap.min.js'; ?>"></script>
</head>

<body <?php body_class(); ?>>
<header id="cmo-header" class="header-style-6  enable-sticky">	
	<nav class="container">	
		<div id="logo-header">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span><img src="<?php echo get_stylesheet_directory_uri() . '/img/logo-one-stop-shop2.png'; ?>" width="100" alt="Logo"></span>
				<span><img src="<?php echo get_stylesheet_directory_uri() . '/img/logo-one-stop-shop2.png'; ?>" width="100" alt="Logo Light "></span>
			</a>
		</div>
		<div class="header-beautiful-text">One Stop Shop</div>
		<div class="nav-wrapper">			
			<div id="nav-link-search">
				<i class="fa fa-search"></i>
				<form role="search-" class="searchform-" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span id="nav-search-container">
						<input type="text" placeholder="Type here and hit enter..." name="s" autocomplete="off" spellcheck="false">
						<input type="submit" class="hidden">
					</span>
				</form>
			</div>			
		</div>
	</nav>
</header>
<?php /* ?><div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onestopshop' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ /* ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'onestopshop' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content"> <?php */ ?>
