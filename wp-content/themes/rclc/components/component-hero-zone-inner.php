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
    <?php if(is_single()){?>
      <div class="course-single">
        <div class="container container-sm">
          <div class="row">
            <div class="col-sm-12">
              <?php if(get_field('course_location')): ?>
                <h2><?php the_field('course_location'); ?></h2>
              <?php endif; ?>
              <?php  
              // get raw date
              $date = get_field('date_course_begins', false, false);
              // make date object
              $date = new DateTime($date);?>
              <h3><?php echo $date->format('F'); ?> <?php the_field('date_course_begins'); ?>-<?php the_field('date_course_ends'); ?>, <?php echo $date->format('Y'); ?></h3>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  <?php endwhile; ?>  
  <?php endif; ?>