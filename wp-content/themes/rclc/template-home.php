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
      <div class="bg-img"></div>
      <div class="container">
        <div class="row v-center wd-100">
          <div class="upper-content">
            <?php if(get_sub_field('first_heading')): ?>
              <h1><?php the_sub_field('first_heading'); ?></h1>
            <?php endif; ?>
            <div class="bottom">
             <?php if(get_sub_field('second_heading')): ?>
              <span class="h1"><?php the_sub_field('second_heading'); ?></span>
            <?php endif; ?>
            <?php if(get_sub_field('content')): ?>
              <div class="content">
               <?php the_sub_field('content'); ?>
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
  get_template_part ( 'components/component', 'vertical-resource-ladder' );
  get_template_part ( 'components/component', 'three-column-full-width-cta' ); 
  get_template_part ( 'components/component', 'cta-block' );
  get_template_part ( 'components/component', 'image-block' );
  get_template_part ( 'components/component', 'wysiwyg-block' );
  get_template_part ( 'components/component', '3-column_listing' );
  get_template_part ( 'components/component', 'full-width_text_cta' );
endwhile; endif; ?>
<!-- Component listing -->
<?php
get_footer();
