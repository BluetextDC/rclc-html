<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rclc
 */

get_header();
?>
<!-- Hero Zone -->
<section class="hero-zone generic-landing blog-details">
 <?php if(has_post_thumbnail()){ ?>
   <div class="bg-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
 <?php } else {?>
  <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/details-bg.jpg');"></div>
<?php }?>
<div class="container">
  <div class="row">
   <div class="content details-page">
    <h1><?php the_title(); ?></h1>
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <ul class="blog-info">
         <li>
          <p><?php echo get_the_date('F dS, Y'); ?></p>
        </li>
        <li>
          <!-- <p><?php echo $author = get_the_author(); ?></p> -->
          <p><?php the_field('author_name'); ?></p>
        </li>
      </ul>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php  wp_reset_query(); ?>
  <ul class="social-links">
    <!-- <?php echo do_shortcode('[addtoany buttons="linkedin,instagram,twitter,facebook"]'); ?> -->
    <!-- <li class="item"><a href="javascript:void(0)"><i class="icon-linkedin-button-logo"></i></a></li>
    <li class="item"><a href="javascript:void(0)"><i class="icon-instagram-logo"></i></a></li>
    <li class="item"><a href="javascript:void(0)"><i class="icon-twitter-logo-silhouette"></i></a></li>
    <li class="item"><a href="javascript:void(0)"><i class="icon-facebook-app-symbol"></i></a></li> -->
  </ul>
</div>
</div>
</div>
</section>
<!-- Hero Zone -->
<!-- wysiwyg-block -->
<section class="wysiwyg-block padding-md">
  <div class="container container-md">
    <div class="row">
      <div class="col-sm-12">
        <div class="content blog-detail content-limit-block">
          <?php the_content(); ?>
            <ul class="taglist">
            <?php $tags = get_tags();if (!empty($tags)) {?>
              <?php if (get_the_tag_list()) {?>
                <li>
                  <?php echo get_the_tag_list('<li>', '</li>, <li>', '</li>'); ?>
                </li>
              <?php }?>
            <?php }?>
           <!--  <li><a href="javascript:void(0)">Customer service</a></li>,
            <li><a href="javascript:void(0)">Teachable moments</a></li>,
            <li><a href="javascript:void(0)">Tag</a></li>,
            <li><a href="javascript:void(0)">Tag</a></li>,
            <li><a href="javascript:void(0)">New Tag</a></li> -->
          </ul>

          <div class="show-content-block visible-xs">
            <button class="btn submit-btn">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- wysiwyg-block -->
<!-- Single image  -->
<!-- <section class="single-img">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/single-img.jpg');">
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Single image  -->
<!-- Blog Cards -->
<!-- <section class="blog-cards">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <a href="javascript:void(0)" class="outer_link"></a>
          <div class="inner">
            <span class="category">blog</span>
            <h3>Customer Experience: A Child’s Ballet</h3>
            <a class="btn link-btn">read more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a href="javascript:void(0)" class="outer_link"></a>
          <div class="inner">
            <span class="category">Vertical / Industry</span>
            <h3>Gold Standard solutions across many industries</h3>
            <a class="btn link-btn">all industries</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a href="javascript:void(0)" class="outer_link"></a>
          <div class="inner">
            <span class="category">Courses</span>
            <h3>Enrichment courses immersed in The Ritz-Carlton ambience</h3>
            <a class="btn link-btn">course calendar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Blog Cards -->
<!-- Cta Section -->

<?php 
get_template_part ( 'components/component', 'cta-block' ); 
?>
<!-- Cta Section -->
</div>

<?php
get_footer();
