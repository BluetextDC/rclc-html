<?php
/**
 * The template for displaying all pages
 * Template Name: Course Listing
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

get_header();
?>

<!-- Hero Zone -->
<?php get_template_part ( 'components/component', 'hero-zone-inner' ); ?>
<!-- Hero Zone -->


<!-- Body -->
<?php if(get_field('listing_description')):?>
  <section class="wysiwyg-block padding-md">
    <div class="container container-sm">
      <div class="row">
        <div class="col-sm-12">
          <div class="content">
           <?php the_field('listing_description'); ?>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php endif; ?>
<section class="course-listing padding-global">
  <div class="container">
    <?php if(get_field('listing_heading')): ?>
      <div class="row">
        <div class="col-sm-12">
          <h2 class="heading text-left">
            <?php the_field('listing_heading'); ?>
          </h2>
        </div>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-12">
        <?php
        $today = current_time('Ymd');
        $args = array( 
          'post_type' => 'course',
          'posts_per_page' => -1,    
          'order' => 'ASC',
          'orderby' => 'meta_value',
          'meta_key'  => 'date_course_begins',
          'meta_query' => array(
            array(
                  'key'   => 'date_course_ends',
                  'compare' => '>=',
                  'value'   => $today,
              ),
          ),
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if(strtotime(get_field('date_course_ends')) >= strtotime(date('Y-m-d')) ){ ?>
         <div class="media course-item">
          <!-- <a href="<?php echo $link_url ?>" class="outer_link"></a> -->
          <div class="media-left">
            <div class="course-info vh-center">
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
                <span><?php echo $date_begins->format('M'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_ends->format('Y'); ?></span>
                <!-- for mobile -->
                <span class="full-date"><?php echo $date_begins->format('M'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_begins->format('j'); ?>-<?php echo $date_ends->format('j'); ?>, <?php echo $date_begins->format('Y'); ?></span>
              <?php } ?>
              <!-- Years will be same but months are not -->

              <!-- Month will be same but years are not -->
              <?php if( $date_begins->format('Y') != $date_ends->format('Y') ) { ?>
                <span><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('Y'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_ends->format('Y'); ?></span>
                <!-- for mobile -->
                <span class="full-date"><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('j'); ?>, <?php echo $date_begins->format('Y'); ?> - <?php echo $date_ends->format('M'); ?> <?php echo $date_ends->format('j'); ?>, <?php echo $date_ends->format('Y'); ?></span>
              <?php } ?>
              <!-- Month will be same but years are not -->

              <!-- Months and years will be same -->
              <?php if( $date_begins->format('M') == $date_ends->format('M') && $date_begins->format('Y') == $date_ends->format('Y') ) { ?>
                <span><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('Y'); ?></span>
                <!-- for mobile -->
                <span class="full-date"><?php echo $date_begins->format('M'); ?> <?php echo $date_begins->format('j'); ?>-<?php echo $date_ends->format('j'); ?>, <?php echo $date_begins->format('Y'); ?></span>
                <!-- Months and years will be same -->

              <?php } ?>
	         <?php if ($date_begins->format('j') == $date_ends->format('j') && $date_begins->format('M') == $date_ends->format('M') && $date_begins->format('Y') == $date_ends->format('Y') ) { ?>
		 <b><?php echo $date_ends->format('j'); ?></b>
		 <?php } else { ?>	      
		 <b><?php echo $date_begins->format('j'); ?>-<?php echo $date_ends->format('j'); ?> </b>
		 <?php } ?>	      
            </div>
          </div>
          <div class="media-body">
        <?php 
          $headinglink = get_field('course_title_cta');
          if( $headinglink !== NULL){ 
              ?> 
              <h4><a href="<?php echo $headinglink['url']; ?>"><?php the_title(); ?></a></h4>
              <?php }  else {
              ?>
                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php } ?>
            <?php if(get_field('course_location')): ?>
              <span><?php the_field('course_location'); ?></span>
            <?php endif; ?>
            <div class="btn-outer">
        <?php 
          $listinglink = get_field('listing_cta');
          if( $listinglink == NULL || $listinglink == ''){ ?>
              <a class="btn submit-btn vh-center" href="<?php echo get_permalink(); ?>">Register</a>
              <?php }  else {
                $link_url = $listinglink['url'];
                $link_title = $listinglink['title'];
                $link_target = $listinglink['target'] ? $listinglink['target'] : '_self';
              ?>
                 <a class="btn submit-btn vh-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- <?php } ?> -->

      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
</section>
<!-- Body -->

<!-- footer  -->
<?php get_template_part ( 'components/component', 'cta-block' ); ?>
<!-- footer  -->
<?php
get_footer();
