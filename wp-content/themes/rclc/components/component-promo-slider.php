<!-- Slider section -->
<?php if (get_row_layout() == 'promo_slider'): ?>
	<section class="slider-sec">
		<?php if (have_rows('slider')): ?> 
			<div class="slider">
				<?php while (have_rows('slider')): the_row();?>
					<?php if (get_row_layout() == 'slide'): ?>
						<div class="bg-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
					<?php endif; ?>
				<?php endwhile;?>
			</div>
		<?php endif; ?>
	</section>
<?php endif; ?>
<!-- Slider section -->