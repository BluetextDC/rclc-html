<!-- Slider section -->
<?php if (get_row_layout() == 'image_block'): ?>
	<section class="slider-sec">
		<?php // check if the repeater field has rows of datt
		if( have_rows('slider') ):?>
			<?php $row_count = get_row_index(); ?>
			<?php echo $row_count ?>
			<?php if($row_count == 1) {?>
				<div class="none">
					<?php while ( have_rows('slider') ) : the_row();?>
						<div class="bg-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
					<?php endwhile;?>
				</div>
			<?php } else{?>
				<div class="slider">
					<?php while ( have_rows('slider') ) : the_row();?>
						<div class="bg-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
					<?php endwhile;?>
				</div>
			<?php }?>
		</div>
	<?php endif; ?>
</section>
<?php endif; ?>
<!-- Slider section -->