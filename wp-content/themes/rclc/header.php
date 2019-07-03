<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rclc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header strip -->
	<header class="header">
		<div class="container">
			<div class="row flex-container">
				<div class="col-xs-6">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="img-white" alt="RCLC">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-black.svg" class="img-black" alt="RCLC">
					</a>
				</div>
				<div class="col-xs-6 text-right">
					<div class="trigger-outer">
						<a class="trigger-btn v-center"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header strip -->
	<!-- navigation css -->
	<div class="navigation-outer">
		<a class="close-btn"><i class="icon-close"></i></a>
		<a class="back-btn"><i class="icon-left"></i>back</a>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-1',
			'container_class' => '',
			'container_id' => '',
			'menu_class' => 'main-menu',
		));
		?>
		<div class="search-outer">
			<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
				<div class="search-field">
					<input type="search" class="search-input" placeholder="I’m searching for…." value="" name="s" autocomplete="off">
					<button class="search-action v-center"><i class="icon-search"></i></button>
				</div>
			</form>
		</div>
	</div>
	<!-- navigation css -->
	<div class="main-wrapper">