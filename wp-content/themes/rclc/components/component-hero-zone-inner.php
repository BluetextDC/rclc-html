<?php if( have_rows('hero_zone') ): 
  while( have_rows('hero_zone') ): the_row();?>
    <section class="hero-zone generic-landing">
      <?php if ( has_post_thumbnail() ) {?>
        <div class="bg-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>');"></div>
      <?php } ?>
      <div class="container">
        <div class="row">
          <?php if(get_sub_field('content')): ?>
            <div class="content">
              <h1><?php the_sub_field('content'); ?></h1>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endwhile; ?>  
<?php endif; ?>