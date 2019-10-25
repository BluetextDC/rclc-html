<!-- Cta Section -->
<?php if ( is_page_template( array( 'template-blog-listing.php', 'template-generic-landing.php', 'template-course-listing.php' ) ) ){ ?>
	<section class="cta-section text-center hidden <?php if(get_field('display_contact_form')): ?><?php the_field('display_contact_form'); ?><?php endif;?>">
		<div class="container">
			<div class="row">
				<div class="cta-outer">
					<a href="javascript:void(0)" class="h2"><span>Contact</span></a>
				</div>
				<div class="contact-form">
					<h2>contact</h2>
					<?php echo do_shortcode( '[contact-form-7 id="151" title="Contact Form"]' ); ?>
					<h3 class="thankyou-div">Thank you for your message. It has been sent.</h3>
				</div>
			</div>
		</div>
	</section>
<?php 
$link = get_field('contact_form_cta');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
<section class="cta-section text-center">
	<div class="container">
		<div class="row">
				<div class="footer-cta-outer">
			<a class="h2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
				</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php } else if(is_single()){?>
	<section class="cta-section text-center hidden <?php if(get_field('display_contact_form')): ?><?php the_field('display_contact_form'); ?><?php endif;?>">
		<div class="container">
			<div class="row">
				<div class="cta-outer">
					<a href="javascript:void(0)" class="h2"><span>Contact</span></a>
				</div>
				<div class="contact-form">
					<h2>contact</h2>
					<?php echo do_shortcode( '[contact-form-7 id="151" title="Contact Form"]' ); ?>
					<h3 class="thankyou-div">Thank you for your message. It has been sent.</h3>
				</div>
			</div>
		</div>
	</section>
<?php } else {?>
	<?php if (get_row_layout() == 'cta_block'): ?>
		<section class="cta-section text-center">
			<?php if (get_sub_field('pick_contenturl') == 'pcform'): ?>
			<div class="container">
				<div class="row">
					<?php if(get_sub_field('title')): ?>
						<div class="cta-outer show-form-btn">
							<a href="javascript:void(0)" class="h2"><span><?php the_sub_field('title'); ?></span></a>
						</div>
					<?php endif; ?>
					<div class="contact-form">
						<?php if(get_sub_field('title')): ?>
							<h2><?php the_sub_field('title'); ?></h2>
						<?php endif; ?>
						<?php if(get_sub_field('form_id')): ?>
							<?php the_sub_field('form_id'); ?>
						<?php endif; ?>
						<h3 class="thankyou-div">Thank you for your message. It has been sent.</h3>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php if (get_sub_field('pick_contenturl') == 'hyperlink'): ?>
			<div class="container">
				<div class="row">
					<?php if(get_sub_field('title')): ?>
						<div class="cta-outer">
		                  <?php $link = get_sub_field('cta_block_url');
		                  if( $link ): 
		                    $link_url = $link['url'];
		                    $link_target = $link['target'] ? $link['target'] : '_self';
		                    ?>
		                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="h2"><span><?php the_sub_field('title'); ?></span></a>
		                  <?php endif;?>
								</div>
							<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>
<?php }?>
<!-- Cta Section -->