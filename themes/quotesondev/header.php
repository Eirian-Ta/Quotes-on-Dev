<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="build/css/style.min.css">
		<link rel="stylesheet" id="font-awesome-cdn-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.0" type="text/css" media="all">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


		<div id="page" class="hfeed site container">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<div class="logo">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home""><img src=<?php echo get_template_directory_uri()."/assets/qod-logo.svg"?> alt=""></a>

					</div>
				</div><!-- .site-branding -->

			
			</header><!-- #masthead -->

			<div id="content" class="site-content">
