<!-- newslatter   -->
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
						<!-- <form>
							<div class="newslatter-form"><div class="field-outer"> <input type="email" class="form-control" name="email" placeholder="Subscribe with Email" autocomplete="off"></div><div class="btn-outer"> <input type="submit" class="btn submit-btn"></div></div>
						</form> -->
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>	
<?php endif; ?>
<!-- newslatter   -->