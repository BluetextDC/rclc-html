<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			// the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				// rclc_posted_on();
				// rclc_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- <?php rclc_post_thumbnail(); ?> -->


        <div class="media course-item">
          <a href="<?php the_permalink(); ?>" class="outer_link"></a>
          <div class="media-left">
            <div class="course-info vh-center">
              <span><?php echo get_the_date('F, Y'); ?></span>
              <b><?php echo get_the_date('dS'); ?></b>
            </div>
          </div>
          <div class="media-body">
            <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt();?></p>
            <div class="btn-outer">
              <a href="<?php the_permalink(); ?>" class="btn submit-btn vh-center">Read More</a>
            </div>
          </div>
        </div>



<!-- 	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rclc' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rclc' ),
			'after'  => '</div>',
		) );
		?>
	</div> -->

	<!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php rclc_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
