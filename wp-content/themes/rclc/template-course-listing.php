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

<?php get_template_part ( 'components/component', 'wysiwyg-block' ); ?>
<section class="course-listing padding-global">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="heading text-left">
          Upcoming Courses
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php
        $args = array( 'post_type' => 'course', 'posts_per_page' => -1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <div class="media course-item">
          <a href="<?php the_permalink(); ?>" class="outer_link"></a>
          <div class="media-left">
            <div class="course-info vh-center">
              <?php  
              // get raw date
              $dateBegins = get_field('date_course_begins', false, false);
              // make date object
              $date = new DateTime($date);?>
              <span><?php echo $date->format('F Y'); ?></span>
              <b><?php the_field('date_course_begins'); ?>-<?php the_field('date_course_ends'); ?></b>
              <span class="full-date"><?php echo $date->format('F'); ?> <?php the_field('date_course_begins'); ?>-<?php the_field('date_course_ends'); ?>, <?php echo $date->format('Y'); ?></span>
            </div>
          </div>
          <div class="media-body">
            <h4><?php the_title(); ?></h4>
            <?php if(get_field('course_preview_text')): ?>
              <p><?php the_field('course_preview_text'); ?></p>
            <?php endif; ?>
            <?php if(get_field('course_location')): ?>
              <span><?php the_field('course_location'); ?></span>
            <?php endif; ?>
            <div class="btn-outer">
              <a href="<?php the_permalink(); ?>" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
</section>  
<?php if (have_rows('components')): 
  while (have_rows('components')): the_row();
   get_template_part ( 'components/component', 'cta-block' ); 
 endwhile; endif; ?>

 <?php
 get_footer();
