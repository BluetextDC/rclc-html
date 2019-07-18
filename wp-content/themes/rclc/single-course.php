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
<?php get_template_part ( 'components/component', 'hero-zone-inner' ); ?>
<!-- Hero Zone -->

<?php if (have_rows('components')): 
  while (have_rows('components')): the_row();
    get_template_part ( 'components/component', 'wysiwyg-block' );  
    get_template_part ( 'components/component', 'image-block' );
    get_template_part ( 'components/component', '3-column_listing' );
    get_template_part ( 'components/component', 'full-width_text_cta' );
  endwhile; endif; ?>
  <?php get_template_part ( 'components/component', 'cta-block' ); ?>
  <?php
  get_footer();
