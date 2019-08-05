<?php

/**
 * 3 Column Listing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = '3-column-listing-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '3-column-listing';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.


?>
<section class="blog-cards gutenberg-block">
<div>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

      <!-- Select Pages -->
      <?php if(get_field('content_display_mode') == 'select_pages'){?>
        <?php $posts = get_field('select_page');
        if( $posts ): ?>
          <div class="row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-md-4">
                <div class="card">
                  <a href="<?php echo get_post_permalink($post->ID); ?>" class="outer_link"></a>
                  <div class="inner">
                    <?php $texonomy_terms = get_the_terms($post->ID, 'new_data');?>
                    <?php if($texonomy_terms){ ?>
                      <span class="category">
                        <?php foreach ($texonomy_terms as $key=>$value) { ?>
                          <?php echo $value->name; ?>
                        <?php }?>
                      </span>
                    <?php } else { ?>
                      <span class="category">Page</span>
                    <?php }?>
                    <h3><?php echo get_the_title($post->ID); ?></h3>
                    <div class="btn-outer">
                      <a href="<?php echo get_post_permalink($post->ID); ?>" class="btn link-btn">read more</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      <?php }?>
      <!-- Select Pages -->


    <!-- Select Course CPT -->
      <?php if(get_field('content_display_mode') == 'select_course_cpt'){?>
       <?php $posts = get_field('select_course_cpt');
       if( $posts ): ?>
        <div class="row">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-md-4">
              <div class="card course">
                  <a href="<?php echo get_post_permalink($post->ID); ?>" class="outer_link"></a>
                <div class="inner">
                  <span class="category">Courses</span>
                  <h3><?php echo get_the_title($post->ID); ?></h3>
                </div>
                  <div class="btn-outer">
                    <a href="<?php echo get_post_permalink($post->ID); ?>" class="btn link-btn">class description</a><br>
                    <?php if (get_field('course_calendar_cta')) { ?>
                    <a href="<?php the_field('course_calendar_cta'); ?>" class="link-btn cc-link-btn">course calendar</a>
                    <?php } ?>
                  </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <?php }?>
    <!-- Select Course CPT -->


        <!-- Select Posts -->
      <?php if(get_field('content_display_mode') == 'select_post'){?>
      <?php $posts = get_field('select_posts');
      if( $posts ): ?>
        <div class="row">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-md-4">
              <div class="card">
                <a href="<?php echo get_post_permalink($post->ID); ?>" class="outer_link"></a>
                <div class="inner">
                  <span class="category">Blogs</span>
                  <h3><?php echo get_the_title($post->ID); ?></h3>
                  <div class="btn-outer">
                    <a href="<?php echo get_post_permalink($post->ID); ?>" class="btn link-btn">all industries</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <?php }?>
    <!-- Select Posts -->

    <!-- Select taxonomy -->
    <?php if (get_field('limit_to_three_content_blocks') === true) {?>
    <?php if(get_field('content_display_mode') == 'select_taxonomy'){?>
        <?php 
          $postselect = get_field('select_taxonomy');
          if ($postselect) {
            if (is_array($postselect)) {
              $postselect = array($postselect);
            }
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'ASC',
                'category__in' => $postselect,
              );
                  $quote_query = new WP_Query($args);
                  if ($quote_query->have_posts()) {
                    while($quote_query->have_posts()): $quote_query->the_post(); ?>
                           <div class="col-md-4">
                            <div class="card">
                              <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                              <div class="inner">
                                <span class="category">Blogs</span>
                                <h3><?php the_title(); ?></h3>
                                <div class="btn-outer">
                                  <a href="<?php the_permalink(); ?>" class="btn link-btn">all industries</a>
                                </div>
                              </div>
                            </div>
                          </div>
                  <?php endwhile;
                   }
                  }
                  wp_reset_postdata();
              ?>
      <?php }?>

    <?php }else {?>
    <?php if(get_field('content_display_mode') == 'select_taxonomy'){?>
        <?php 
          $postselect = get_field('select_taxonomy');
          if ($postselect) {
            if (is_array($postselect)) {
              $postselect = array($postselect);
            }
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'ASC',
                'category__in' => $postselect,
              );
                  $quote_query = new WP_Query($args);
                  if ($quote_query->have_posts()) {
                    while($quote_query->have_posts()): $quote_query->the_post(); ?>
                           <div class="col-md-4">
                            <div class="card">
                              <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                              <div class="inner">
                                <span class="category">Blogs</span>
                                <h3><?php the_title(); ?></h3>
                                <div class="btn-outer">
                                  <a href="<?php the_permalink(); ?>" class="btn link-btn">all industries</a>
                                </div>
                              </div>
                            </div>
                          </div>
                  <?php endwhile;
                   }
                  }
                  wp_reset_postdata();
              ?>
      <?php }?>

    <?php }?>
    <!-- Select taxonomy -->



</div>


</div>
</section>