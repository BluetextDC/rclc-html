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
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="media course-item">
          <div class="media-left">
            <div class="course-info vh-center">
              <span>MARCH 2019</span>
              <b>27-28</b>
              <span class="full-date">MARCH 27-18, 2019</span>
            </div>
          </div>
          <div class="media-body">
            <h4>Service Excellence Culture</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Is eirne awek qkwnasd iasndkj aiksnda.</p>
            <span>The Ritz-Carlton, Tyson Corner in McLean, VA</span>
            <div class="btn-outer">
              <a href="javascript:void(0)" class="btn submit-btn vh-center">REGISTER</a>
            </div>
          </div>
        </div>
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
