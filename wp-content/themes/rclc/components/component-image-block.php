<!-- Slider section -->
<?php if (get_row_layout() == 'image_block'): ?>
	<section class="slider-sec first-slide">
		<?php // check if the repeater field has rows of datt
		if( have_rows('slider') ):?>
			<div class="slider">
				<?php while ( have_rows('slider') ) : the_row();?>
					<?php $row_count = get_row_index(); ?>
					<div class="bg-img row-<?php echo $row_count ?>" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
				<?php endwhile;?>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php endif; ?>
<!-- Slider section -->