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
		<ul class="main-menu">
			<li class="menu-item-has-children"><a href="javascript:void(0)">What We Offer</a>
				<ul class="sub-menu">
					<li><a href="javascript:void(0)">What We Offer</a></li>
					<li class="menu-item-has-children"><a href="javascript:void(0)">Advisory</a>
						<ul class="sub-menu">
							<li><a href="javascript:void(0)">Customer Experience</a></li>
							<li><a href="javascript:void(0)">Patient Experience</a></li>
							<li><a href="javascript:void(0)">Culture Transformation</a></li>
							<li><a href="javascript:void(0)">Employee Engagement</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="javascript:void(0)">Courses</a>
						<ul class="sub-menu">
							<li><a href="javascript:void(0)">Learning Roadmap</a></li>
							<li><a href="javascript:void(0)">Upcoming Courses</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children"><a href="javascript:void(0)">Presentations & Workshops</a>
						<ul class="sub-menu">
							<li><a href="javascript:void(0)">The Ritz-Carlton Experiences</a></li>
							<li><a href="javascript:void(0)">Presentations & Workshops</a></li>
							<li><a href="javascript:void(0)">Conference Keynotes</a></li>
							<li><a href="javascript:void(0)">L&D Program Design</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu-item-has-children" ><a href="javascript:void(0)">Who We Serve</a>
				<ul class="sub-menu">
					<li><a href="javascript:void(0)">Who We Serve</a></li>
					<li><a href="javascript:void(0)">Automotive & Transportation</a></li>
					<li><a href="javascript:void(0)">Finance & Wealth Management</a></li>
					<li><a href="javascript:void(0)">Hospitals & Healthcare</a></li>
					<li><a href="javascript:void(0)">Real Estate & Facilities Management</a></li>
					<li><a href="javascript:void(0)">Consumer Goods & Retail </a></li>
					<li><a href="javascript:void(0)">Education & Associations</a></li>
					<li><a href="javascript:void(0)">Sports & Entertainment</a></li>
					<li><a href="javascript:void(0)">Consulting & Legal</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children"><a href="javascript:void(0)">Our Expertise</a>
				<ul class="sub-menu">
					<li><a href="javascript:void(0)">Our Expertise</a></li>
					<li><a href="javascript:void(0)">Case Studies</a></li>
					<li><a href="javascript:void(0)">Thought Leadership</a></li>
					<li><a href="javascript:void(0)">In the News</a></li>
					<li><a href="javascript:void(0)">RCLC Blog</a></li>
					<li><a href="javascript:void(0)">RCLC Blog</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children"><a href="javascript:void(0)">About Us</a>
				<ul class="sub-menu">
					<li><a href="javascript:void(0)">About Us</a></li>
					<li><a href="javascript:void(0)">Foundations of our Brand </a></li>
					<li><a href="javascript:void(0)">Our Story </a></li>
					<li><a href="javascript:void(0)">Awards</a></li>
					<li><a href="javascript:void(0)">Testimonials</a></li>
				</ul>
			</li>
		</ul>
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