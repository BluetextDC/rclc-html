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
              $date_course_begins = get_field('date_course_begins', false, false);
              // make date object
              $date_begins = new DateTime($date_course_begins);
              // get raw date
              $date_course_ends = get_field('date_course_ends', false, false);
              // make date object
              $date_ends = new DateTime($date_course_ends);?>

              <!-- Years will be same but months are not -->
              <?php if( $date_begins->format('M') != $date_ends->format('M') && $date_begins->format('Y') == $date_ends->format('Y') ) { ?>
                <h3><?php echo $date_begins->format('M'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_begins->format('d'); ?>-<?php echo $date_ends->format('d'); ?>, <?php echo $date_begins->format('Y'); ?></h3>
              <?php } ?>
              <!-- Years will be same but months are not -->

              <!-- Month will be same but years are not -->
              <?php if( $date_begins->format('Y') != $date_ends->format('Y') ) { ?>
                <h3 class="full-date"><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('d'); ?>, <?php echo $date_begins->format('Y'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_ends->format('d'); ?>, <?php echo $date_ends->format('Y'); ?></h3>
              <?php } ?>
              <!-- Month will be same but years are not -->

              <!-- Months and years will be same -->
              <?php if( $date_begins->format('M') == $date_ends->format('M') && $date_begins->format('Y') == $date_ends->format('Y') ) { ?>
                <h3 class="full-date"><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('d'); ?>-<?php echo $date_ends->format('d'); ?>, <?php echo $date_begins->format('Y'); ?></h3>
                <!-- Months and years will be same -->
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  <?php endwhile; ?>  
  <?php endif; ?>