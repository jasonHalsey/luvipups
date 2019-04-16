<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore_2_14_19
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:400,800" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore_2_14_19' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="mobile_logo"><img src="<?php echo bloginfo('template_directory'); ?>/images/luvi_logo.svg" /></div>
		<nav id="site-navigation" class="main-navigation allnav">
			
			<?php
 
				if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
				    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
				    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
				    </div>
				     
			<?php endif; ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
