<!-- banner-cta section -->
<?php if (get_row_layout() == 'banner_cta'): ?>
  <section class="banner-cta relative">
    <div class="bg-img" style="background-image: url('<?php the_sub_field('background_image');?>');"></div>
    <div class="container">
      <?php if (have_rows('listing')): ?>
        <div class="row flex-container padding-lg">
         <?php while (have_rows('listing')): the_row();?>
          <?php if (get_row_layout() == 'item'): ?>
            <?php if(get_sub_field('content')): ?>
            <div class="col-md-4">
              <div class="content">
                <h3><?php the_sub_field('content');?></h3>
              </div>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile;?>
    </div>
  <?php endif; ?>
</div>
</section>
<?php endif; ?>
<!-- banner-cta section -->