<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="media course-item">
			<div class="media-left">
				<div class="course-info vh-center">
					<span><?php echo get_the_date('M Y'); ?></span>
					<b><?php echo get_the_date('d'); ?></b>
					<span class="full-date"><?php echo get_the_date('M d, Y'); ?></span>
				</div>
			</div>
			<div class="media-body">
				<?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
				<p><?php echo get_the_excerpt(); ?></p>
				<div class="btn-outer">
					<a href="<?php the_permalink($post_object->ID); ?>" class="btn submit-btn vh-center">Learn more</a>
				</div>
			</div>
		</div>
	<?php endif; ?>
</article>