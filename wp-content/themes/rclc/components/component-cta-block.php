<!-- Cta Section -->
<?php if (get_row_layout() == 'cta_block'): ?>
	<section class="cta-section text-center">
		<div class="container">
			<div class="row">
				<?php if(get_sub_field('title')): ?>
					<div class="cta-outer">
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
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- Cta Section -->