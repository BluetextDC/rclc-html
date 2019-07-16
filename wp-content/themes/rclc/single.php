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
          <p><?php echo $author = get_the_author(); ?></p>
        </li>
      </ul>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php  wp_reset_query(); ?>
  <ul class="social-links">
    <?php echo do_shortcode('[addtoany buttons="linkedin,instagram,twitter,facebook"]'); ?>
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
          <h2>Luxury shoppers expect a personalized, elevated retail experience</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. aute irure dolor in reprehenderit in voluptate velit.</p>
          <p>A busy executive decided she was going to invest some of her precious leisure time (and a sizable financial investment) in a lovely new French designer purse. As she was looking forward to enjoying the thrill of the shopping experience, she decided to head to her favorite designer’s retail boutique. Upon arriving inside the boutique, she was completely ignored by all the sales associates. While she had an idea of what kind of handbag she wanted to buy, she still required some assistance in viewing multiple styles, so initiated a conversation with one associate. Though the boutique was not crowded, the associate’s body language demonstrated annoyance that the executive was attempting to engage with her.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. aute irure dolor in reprehenderit in voluptate velit.</p>
          <h3>Sub Heading</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <ul>
            <li>
              Based on the product price point, the executive had the expectation that the retail shopping experience would include high-touch, elegant service.
            </li>
            <li>The retail boutique (and subsequently the brand) lost credibility and loyalty when the shopping experience expectation collided with disengaged and lackluster sales associates.</li>
            <li>Even though the executive wanted to buy a purse and had the means to do so, the poor customer experience pushed her to not purchase during her boutique visit.</li>
            <li>As the desire for the luxury product did not subside, but the memory of the dismal experience remained, the executive simply purchased through a different channel and from a competitor.</li>
          </ul>
          <ol>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
            <li>Consectetur adipisicing elit, sed do eiusmod.</li>
            <li>Lorem ipsum dolor sit amet nisi ut aliquip.</li>
          </ol>
          <p>Learn how The Ritz-Carlton has created a culture of exceptional customer experience and how to apply it to your organization at one of our upcoming enrichment courses.</p>
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
<section class="single-img">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/single-img.jpg');">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Single image  -->
<!-- Blog Cards -->
<section class="blog-cards">
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
</section>
<!-- Blog Cards -->
<!-- Cta Section -->
<?php 
get_template_part ( 'components/component', 'cta-block' ); 
?>
<!-- Cta Section -->
</div>

<?php
get_footer();
