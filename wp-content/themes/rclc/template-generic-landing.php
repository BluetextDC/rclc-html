<?php
/**
 * The template for displaying all pages
 * Template Name: Generic Landing
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

<?php if (have_rows('components')): 
	while (have_rows('components')): the_row();
		get_template_part ( 'components/component', 'wysiwyg-block' );  
		get_template_part ( 'components/component', 'image-block' );
		get_template_part ( 'components/component', 'scalable_listing' );
		get_template_part ( 'components/component', '3-column_listing' );
		get_template_part ( 'components/component', '50-50_cta' );
		get_template_part ( 'components/component', 'full-width_text_cta' ); 
		get_template_part ( 'components/component', 'three-column-full-width-cta' );   
	    get_template_part ( 'components/component', 'contact-form' );
	endwhile; endif; ?>
	<?php get_template_part ( 'components/component', 'cta-block' ); ?>
	<?php
	get_footer();
