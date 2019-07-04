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
			<!-- 	<form action="">
					<div class="row">
						<div class="col-sm-6">
							<div class="side-spacer">
								<div class="field-outer">
									<label for="firstname">First Name <span class="required">*</span></label>
									<input type="text" id="firstname" name="firstname" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="side-spacer">
								<div class="field-outer">
									<label for="lastname">Last Name<span class="required">*</span></label>
									<input type="text" id="lastname" name="lastname" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="side-spacer">
								<div class="field-outer">
									<label for="email">Email <span class="required">*</span></label>
									<input type="email" id="email" name="email" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="side-spacer">
								<div class="field-outer">
									<label for="message">Message</label>
									<textarea name="message" id="message" class="form-control"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="side-spacer text-right">
								<div class="submit-outer">
									<input type="submit" value="submit" class="btn submit-btn">
								</div>
							</div>
						</div>
					</div>
				</form> -->
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- Cta Section -->