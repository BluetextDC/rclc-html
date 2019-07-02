<!-- Cta Section -->
<?php if (get_row_layout() == 'cta_block'): ?>
	<?php $link = get_sub_field('cta');
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<section class="cta-section text-center">
			<div class="container">
				<div class="row">
					<div class="cta-outer">
						<a href="<?php echo esc_url($link_url); ?>" class="h2" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>
<?php endif; ?>
<!-- Cta Section -->