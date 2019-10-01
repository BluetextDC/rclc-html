<?php
/**
 * The template for displaying all pages
 * Template Name: Home
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
<?php if( have_rows('hero_zone') ): 
  while( have_rows('hero_zone') ): the_row();?>
    <section class="hero-zone home">
      <?php if(get_sub_field('background_image')): ?>
        <div class="bg-img" style="background-image: url('<?php  the_sub_field('background_image'); ?>');"></div>
      <?php endif; ?>
      <div class="container">
        <div class="row v-center wd-100">
          <div class="upper-content">
            <?php if(get_sub_field('first_heading')): ?>
              <div class="top_heading">
                <h1 class="top-heading"><?php the_sub_field('first_heading'); ?></h1>
              </div>
            <?php endif; ?>
            <div class="bottom">
<!--              <?php if(get_sub_field('second_heading')): ?>
              <span class="h1"><?php the_sub_field('second_heading'); ?></span>
            <?php endif; ?> -->
            <div class="banner-text-slider">
              <span class="h1">Culture</span>
              <span class="h1">Service</span>
              <span class="h1">Experience</span>
            </div>
            <?php if(get_sub_field('content')): ?>
              <div class="content">
              <div class="banner-para">
               <?php the_sub_field('content'); ?>
             </div>
             </div>
           <?php endif; ?>
         </div>
       </div>
     </div>
     <?php if (have_rows('cta_block')): ?>
       <div class="row bottom-stripe">
        <?php while (have_rows('cta_block')): the_row();?>
          <?php if (get_row_layout() == 'cta'): ?>
            <div class="col-sm-4">
              <?php $link = get_sub_field('cta');
              if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif;?>
            </div>
          <?php endif; endwhile; ?>
        </div>
      <?php endif;?>
    </div>
  </section>
<?php endwhile; ?>  
<?php endif; ?>
<!-- Hero Zone -->
<!-- Component listing -->
<?php if (have_rows('components')): 
 while (have_rows('components')): the_row();
  get_template_part ( 'components/component', 'scalable_listing' );
  get_template_part ( 'components/component', 'three-column-full-width-cta' ); 
  get_template_part ( 'components/component', 'cta-block' );
  get_template_part ( 'components/component', 'image-block' );
  get_template_part ( 'components/component', 'wysiwyg-block' );
  get_template_part ( 'components/component', '3-column_listing' );
  get_template_part ( 'components/component', '50-50_cta' );
  get_template_part ( 'components/component', 'full-width_text_cta' );
endwhile; endif; ?>
<!-- Component listing -->

<?php if(get_field('display_contact_form')): ?>
  <section class="newslatter-sec padding-global text-center bg-white hidden <?php the_field('display_contact_form'); ?>">
    <div class="container contact-form" style="display: block;">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="heading">Contact</h2>
          <?php echo do_shortcode( '[contact-form-7 id="151" title="Contact form 1"]' ); ?>
          <h3 class="thankyou-div">Thank you for your message. It has been sent.</h3>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>

<!-- <?php if(get_field('display_subscribe_form')): ?>
  <section class="newslatter-sec padding-global light_gray-bg text-center bg-white hidden <?php the_field('display_subscribe_form'); ?>">
    <div class="container container-sm">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="heading">Subscribe to Our Email Newsletter</h2>
          <?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form 1"]' ); ?>
          <h4 class="thankyou-div-text">Thank you for your submission</h4>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?> -->








<?php
get_footer();
