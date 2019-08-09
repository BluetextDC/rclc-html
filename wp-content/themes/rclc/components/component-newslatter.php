<!-- newslatter   -->
<?php if ( is_page_template( array( 'template-blog-listing.php', 'template-generic-landing.php', 'template-course-listing.php' ) ) ) {?>
	<section class="newslatter-sec padding-global light_gray-bg text-center hidden <?php if(get_field('display_subscribe_form')): ?><?php the_field('display_subscribe_form'); ?><?php endif;?>">
		<div class="container container-sm">
			<div class="row">
				<div class="col-sm-12 newsletter-sections">
					<h2 class="heading">Subscribe to Our Email Newsletter</h2>
					<?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form 1"]' ); ?>
					<h4 class="thankyou-div-text">Thank you for your submission</h4>
				</div>
			</div>
		</div>
	</section>
<?php } else if(is_single()){?>
	<section class="newslatter-sec padding-global light_gray-bg text-center hidden <?php if(get_field('display_subscribe_form')): ?><?php the_field('display_subscribe_form'); ?><?php endif;?>">
		<div class="container container-sm">
			<div class="row">
				<div class="col-sm-12 newsletter-sections">
					<h2 class="heading">Subscribe to Our Email Newsletter</h2>
					<?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form 1"]' ); ?>
					<h4 class="thankyou-div-text">Thank you for your submission</h4>
				</div>
			</div>
		</div>
	</section>
<?php } else {?>
	<?php if( have_rows('newslatter', 'options') ): 
		while( have_rows('newslatter', 'options') ): the_row();?>
			<section class="newslatter-sec padding-global light_gray-bg text-center">
				<div class="container container-sm">
					<div class="row">
						<div class="col-sm-12">
							<?php if(get_sub_field('headline')): ?>
								<h2 class="heading"><?php the_sub_field('headline'); ?></h2>
							<?php endif; ?>
							<?php if(get_sub_field('form_id')): ?>
								<h2 class="heading"><?php the_sub_field('form_id'); ?></h2>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>	
	<?php endif; ?>
<?php }?>
<!-- newslatter   -->