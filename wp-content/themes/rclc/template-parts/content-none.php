<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

?>

<section class="hero-zone generic-landing error-page-banner">
	<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/generic-hero.jpg');"></div>
	<div class="container">
		<div class="row">
			<div class="content">
				<h1>Nothing Found</h1>
			</div>
		</div>
	</div>
</section>


<section class="no-results not-found">
	<div class="container">
		<div class="row">
	<!-- <header class="page-header">
		<h1 class="page-title"><?php //esc_html_e( 'Nothing Found', 'rclc' ); ?></h1>
	</header> -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'rclc' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php //esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'rclc' ); ?></p>
			<?php
			//get_search_form();

		else :
			?>

			<p><?php //esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'rclc' ); ?></p>
			<?php
			//get_search_form();

		endif;
		?>
		</div>
		<!-- .page-content -->
	</div>
</div>

</section><!-- .no-results -->

<section class="search-page-box text-center padding-global not-found-search">
	<div class="container">
		<div class="row">
			<div class="search-outer">
			<h5><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'rclc' ); ?></h5>
				<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
					<div class="search-field">
						<input type="search" class="search-input" placeholder="I’m searching for…." value="" name="s" autocomplete="off">
						<button class="search-action v-center"><i class="icon-search"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
