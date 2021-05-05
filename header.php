<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I2M_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap 4.4.1 -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;1,800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- Header -->
	<header id="masthead" class="site-header">
		<div class="site-branding container" href="<?php echo esc_url(home_url('/'));?>">
			<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
			<?php
				endif;
				$i2m_theme_description = get_bloginfo( 'description', 'display' );
				if ( $i2m_theme_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $i2m_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<!--
		<script>
			$(document).ready(function () {
				/* ??? */
			});
		</script>
		-->
		<!-- Navbar -->
		<nav id="site-navigation" class="navbar navbar-expand-lg">
			<div class="container">	
				<div class="navbar-collapse" id="navbarNavAltMarkup">
				<?php
					wp_nav_menu(array(
							'theme_location' => 'menu-1', // Defined when registering the menu
							'menu_id'		 => 'dropdown-menu',
							'container'		 => false,
							'depth' 		 => 10,

						));
					?>
				
					<ul class="navbar-nav ml-auto nav-flex-icons">
					
					</ul>
				</div>
			</div>
		</nav><!-- Fin navbar-->
	</header><!-- Fin header -->

<div id="content" class="site-content">
	<section class="wp-bp-main-content">