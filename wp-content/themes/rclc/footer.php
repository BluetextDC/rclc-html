<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rclc
 */

?>
</div>
<?php get_template_part ( 'components/component', 'newslatter' ); ?>
<!-- Main Footer -->
<footer class="footer padding-global light_gray-bg">
	<div class="container">
		<div class="row d-flex">
			<!-- footer social media -->
			<div class="col-md-4 align-self-end">
				<div class="footer-left">
					<h2>Connect with Us</h2>
					<?php if( have_rows('social_links', 'options') ): 
						while( have_rows('social_links', 'options') ): the_row();?>
							<ul class="social-list">
								<?php if(get_sub_field('linkdin_url', 'options')): ?>
									<li><a href="<?php the_sub_field('linkdin_url', 'options'); ?>" target="_blank"><i class="icon-linkedin-button-logo"></i></a></li>
								<?php endif; ?>
								<?php if(get_sub_field('instagram_url', 'options')): ?>
									<li><a href="<?php the_sub_field('instagram_url', 'options'); ?>" target="_blank"><i class="icon-instagram-logo"></i></a></li>
								<?php endif; ?>
								<?php if(get_sub_field('twitter_url', 'options')): ?>
									<li><a href="<?php the_sub_field('twitter_url', 'options'); ?>" target="_blank"><i class="icon-twitter-logo-silhouette"></i></a></li>
								<?php endif; ?>
								<?php if(get_sub_field('facebook_url', 'options')): ?>
									<li><a href="<?php the_sub_field('facebook_url', 'options'); ?>" target="_blank"><i class="icon-facebook-app-symbol"></i></a></li>
								<?php endif; ?>
							</ul>
						<?php endwhile; ?>	
					<?php endif; ?>
					<ul class="footer-info">
						<!-- <?php //if(get_field('email', 'options')): ?>
							<li><a href="mailto:<?php //the_field('email', 'options'); ?>">Email Us</a></li>
						<?php //endif; ?> -->
						<?php if(get_field('phone_no', 'options')): ?>
							<li><a href="tel:<?php the_field('phone_no', 'options'); ?>"><?php the_field('phone_no', 'options'); ?></a></li>
						<?php endif; ?>
						<!-- <?php //if(get_field('time_description', 'options')): ?>
							<li>
								<p><?php //the_field('time_description', 'options'); ?></p>
							</li>
						<?php //endif; ?> -->
					</ul>
				</div>
			</div>
			<!-- footer social media -->
			<!-- footer menu for navigate page -->
			<div class="col-md-4 align-self-end">
				<div class="footer-center">
					<div class="row">
						<div class="col-md-12">
							<?php if (is_active_sidebar('footer-1')): ?>
								<div class="footer-menu first">
									<?php dynamic_sidebar('footer-1');?>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
			<!-- footer menu for navigate page -->
			<!-- footer website information -->
			<div class="col-md-4 align-self-end">
				<div class="footer-right">
					<div class="footer-logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="RCLC">
						</a>
					</div>
					<?php if( have_rows('other_urls', 'options') ):?>
						<ul>
							<?php while ( have_rows('other_urls', 'options') ) : the_row(); ?>
								<?php $link = get_sub_field('cta');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<li>
										<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
									</li>
								<?php endif;?>
							<?php endwhile;?>
						</ul>
						<?php else : endif; ?>
						<?php if(get_field('copyright_description', 'options')): ?>
							<div class="copyright">
								<p><?php the_field('copyright_description', 'options'); ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- footer website information -->
			</div>
		</div>
	</footer>
	<!-- Main Footer -->
	<script>
		
			document.addEventListener( 'wpcf7mailsent', function( event ) {
		    if(event.detail.contactFormId == '151') {
			$('.contact-form .wpcf7-form.sent').hide();
			$('.thankyou-div').fadeIn();
		    }
			}, false );

			document.addEventListener( 'wpcf7mailsent', function( event ) {
		    if(event.detail.contactFormId == '69') {
			$('.newsletter-sections .wpcf7-form.sent').hide();
			$('.thankyou-div-text').fadeIn();
		    }
			}, false );



	</script>

	<?php wp_footer(); ?>

</body>
</html>
