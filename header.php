<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Maquina
 * @file
 */
?><!DOCTYPE html><!-- Tanks for reading my code you are awesome this theme his on https://github.com/vmnlopes/Maquina.git -->
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'maquina' ); ?></h1>
					<div class="screen-reader-text skip-link">
						<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'maquina' ); ?>">
							<?php _e( 'Skip to content', 'maquina' ); ?>
						</a>
					</div>
		<?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'container_id' => 'navigation-main navigation-primary', 'container_class' => 'navigation-main navigation-primary top-menu', 'fallback_cb' => '' ) ); ?>
		</nav><!-- #site-navigation top -->
		<?php do_action( 'before' ); ?>
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<?php if ( get_theme_mod( 'maquina_logo' ) ) : ?>
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'maquina_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    				</div>
    <?php else : ?>
     				<h1 class="site-title alignleft"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
       				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    <?php endif; ?>
				</div><!-- site-branding -->
	<?php get_sidebar('header'); ?>
			</header><!-- #masthead -->
	
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'maquina' ); ?></h1>
					<div class="screen-reader-text skip-link">
						<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'maquina' ); ?>">
							<?php _e( 'Skip to content', 'maquina' ); ?>
						</a>
					</div>
	<?php wp_nav_menu( array( 'theme_location' => 'after_header_menu', 'container_class' => 'after-header-menu', 'fallback_cb' => '' ) ); ?>
			</nav><!-- #site-navigation after header-->

<div id="main" class="site-main">
