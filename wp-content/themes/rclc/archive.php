<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

get_header();
?>



    <section class="hero-zone generic-landing">
       <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/details-bg.jpg');"></div>
      <div class="container">
        <div class="row">
            <div class="content">
              <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
            </div>
        </div>
      </div>
    </section>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

<!-- 			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header> -->


<section class="course-listing padding-global">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			</div>
		</div>
	</div>
</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
