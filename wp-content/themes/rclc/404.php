<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rclc
 */

get_header();
?>
<section class="hero-zone generic-landing error-page-banner">
	<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/generic-hero.jpg');"></div>
	<div class="container">
		<div class="row">
			<div class="content">
				<h1>404 not found</h1>
			</div>
		</div>
	</div>
</section>
<section class="error-page padding-md">
	<div class="container">
		<div class="row">
			<div class="message-box">
				<img class="error-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="RCLC-Logo">
				<h1 class="ft-dark-gold">404</h1>
				<h2>Oops! Page Not Found</h2>
				<p>The page you were looking for could not be found.</p>
				<div class="btn-outer">
					<a href="<?php echo home_url('/'); ?>" class="btn btn-default">Back To Home</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
