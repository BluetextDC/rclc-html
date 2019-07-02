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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header strip -->
	<header class="header">
		<div class="container">
			<div class="row flex-container">
				<div class="col-xs-6">
					<a href="index.html" class="brand-logo">
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
			<form role="search" method="get" class="search-form" action="">
				<div class="search-field">
					<input type="search" class="search-input" placeholder="I’m searching for…." value="" name="s" autocomplete="off">
					<button class="search-action v-center"><i class="icon-search"></i></button>
				</div>
			</form>
		</div>
	</div>
	<!-- navigation css -->
	<div class="main-wrapper">