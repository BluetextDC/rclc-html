<?php if( have_rows('hero_zone') ): 
  while( have_rows('hero_zone') ): the_row();?>
    <section class="hero-zone generic-landing">
      <?php if(get_sub_field('hero_image')): ?>
        <div class="bg-img" style="background-image: url('<?php  the_sub_field('hero_image'); ?>');"></div>
      <?php endif; ?>
      <div class="container">
        <div class="row">
          <?php if(get_sub_field('hero_text')): ?>
            <div class="content">
              <h1><?php the_sub_field('hero_text'); ?></h1>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endwhile; ?>  
  <?php endif; ?>