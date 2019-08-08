<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rclc
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<section class="hero-zone generic-landing">
				<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/building-img.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="content">
							<!-- <h1><?php echo $wp_query->found_posts.' Search Results for';?></h1> -->
							<h1>Search results for <?php
							printf( esc_html__( ' %s', 'rclc' ), ''. get_search_query(). '' );
							?></h1>							
						</div>
					</div>
				</div>
			</section>
			<section class="search-page-box">
				<div class="container">
					<div class="row">
						<div class="search-outer">
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
			<section class="course-listing padding-global search-box-listing">
				<div class="container">
					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			// the_posts_navigation();
			?>
		<div class="pagination row col-sm-12">
			<div class="row text-right">
				<?php $args = array( 
					'total' => $wp_query->max_num_pages, 
					'current' => max( 1, get_query_var('paged') ),
					'prev_next' => true, 
					'prev_text' => __('<i class="icon-left-arrow1"></i>'), 
					'next_text' => __('<i class="icon-right-arrow1"></i>')
				); 
				echo paginate_links( $args ); 

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>


	</div>
</div>
</section>
</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
