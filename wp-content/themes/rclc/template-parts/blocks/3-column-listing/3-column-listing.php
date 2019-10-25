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

<?php 
      /*function get_primary_taxonomy_term( $post = 0, $taxonomy = 'category' ) { 
        
        $terms1        = get_the_terms( $post, $taxonomy );
        $primary_term = array();
        if ( $terms ) {
          $term_display = '';
          $term_slug    = '';
          $term_link    = '';
          if ( class_exists( 'WPSEO_Primary_Term' ) ) {
            $wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post );
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term               = get_term( $wpseo_primary_term );
            if ( is_wp_error( $term ) ) {
              $term_display = $terms[0]->name;
              $term_slug    = $terms[0]->slug;
              $term_link    = get_term_link( $terms[0]->term_id );
            } else {
              $term_display = $term->name;
              $term_slug    = $term->slug;
              $term_link    = get_term_link( $term->term_id );
            }
          } else {
            $term_display = $terms[0]->name;
            $term_slug    = $terms[0]->slug;
            $term_link    = get_term_link( $terms[0]->term_id );
          }
          $primary_term['url']   = $term_link;
          $primary_term['slug']  = $term_slug;
          $primary_term['title'] = $term_display;
        }
        return $primary_term;
     }*/
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
                    <?php $texonomy_terms = get_the_terms($post->ID, 'content_type');?>
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
            <?php setup_postdata($post);
                  $terms1        = get_the_terms( $post->ID, $taxonomy = 'category' );
                  $primary_term1 = array();
                  if ( $terms1 ) {
                    $term_display1 = '';
                    $term_slug1   = '';
                    $term_link1    = '';
                    if ( class_exists( 'WPSEO_Primary_Term' ) ) {
                      $wpseo_primary_term1 = new WPSEO_Primary_Term( $taxonomy, $post->ID );
                      $wpseo_primary_term1 = $wpseo_primary_term1->get_primary_term();
                      $term1               = get_term( $wpseo_primary_term1 );
                      if ( is_wp_error( $term1 ) ) {
                        $term_display1 = $terms1[0]->name;
                        $term_slug1    = $terms1[0]->slug;
                              $term_link1    = get_term_link( $terms1[0]->term_id );
                            } else {
                              $term_display1 = $term1->name;
                              $term_slug1    = $term1->slug;
                              $term_link1    = get_term_link( $term1->term_id );
                            }
                          } else {
                          $term_display1 = $terms1[0]->name;
                          $term_slug1    = $terms1[0]->slug;
                          $term_link1    = get_term_link( $terms1[0]->term_id );
                        }
                        $primary_term1['url']   = $term_link1;
                        $primary_term1['slug']  = $term_slug1;
                        $primary_term1['title'] = $term_display1;
                      }
              
             ?>
            <div class="col-md-4">
              <div class="card">
                <a href="<?php echo get_post_permalink($post->ID); ?>" class="outer_link"></a>
                <div class="inner">
                  <!-- <span class="category">Blogs</span> -->
                      <span class="category">
                      <?php 
                          echo $primary_term1['title'];
                        ?>
                        </span>
                  <h3><?php echo get_the_title($post->ID); ?></h3>
                  <div class="btn-outer">
                    <a href="<?php echo get_post_permalink($post->ID); ?>" class="btn link-btn">Read More</a>
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

                      <?php setup_postdata($post);
                            $taxonomy = 'category';
                            $terms2        = get_the_terms( get_the_ID(), $taxonomy = 'category' );
                            $primary_term2 = array();
                            if ( $terms2 ) {
                              $term_display2 = '';
                              $term_slug2   = '';
                              $term_link2    = '';
                              if ( class_exists( 'WPSEO_Primary_Term' ) ) {
                                $wpseo_primary_term2 = new WPSEO_Primary_Term( $taxonomy, get_the_ID() );
                                $wpseo_primary_term2 = $wpseo_primary_term2->get_primary_term();
                                $term2               = get_term( $wpseo_primary_term2 );
                                if ( is_wp_error( $term2 ) ) {
                                  $term_display2 = $terms2[0]->name;
                                  $term_slug2    = $terms2[0]->slug;
                                        $term_link2    = get_term_link( $terms2[0]->term_id );
                                      } else {
                                        $term_display2 = $term2->name;
                                        $term_slug2    = $term2->slug;
                                        $term_link2    = get_term_link( $term2->term_id );
                                      }
                                    } else {
                                    $term_display2 = $terms2[0]->name;
                                    $term_slug2    = $terms2[0]->slug;
                                    $term_link2    = get_term_link( $terms2[0]->term_id );
                                  }
                                  $primary_term2['url']   = $term_link2;
                                  $primary_term2['slug']  = $term_slug2;
                                  $primary_term2['title'] = $term_display2;
                                }
                        
                       ?>
                           <div class="col-md-4">
                            <div class="card">
                              <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                              <div class="inner">
                                <!-- <span class="category">Blogs</span> -->
                                <span class="category">
                                 <?php  
                                   echo $primary_term2['title'];
                                  ?>
                                  </span>
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

                      <?php setup_postdata($post);
                            //print_r(get_post_taxonomies( $post ));
                            $taxonomy = 'category';
                            $terms3        = get_the_terms( get_the_ID(), $taxonomy  );
                            $primary_term3 = array();
                            if ( $terms3 ) {
                              $term_display3 = '';
                              $term_slug3   = '';
                              $term_link3    = '';
                              if ( class_exists( 'WPSEO_Primary_Term' ) ) {
                                $wpseo_primary_term3 = new WPSEO_Primary_Term( $taxonomy, get_the_ID() );
                                $wpseo_primary_term3 = $wpseo_primary_term3->get_primary_term();
                                $term3               = get_term( $wpseo_primary_term3 );
                                if ( is_wp_error( $term3 ) ) {
                                  $term_display3 = $terms3[0]->name;
                                  $term_slug3    = $terms3[0]->slug;
                                        $term_link3    = get_term_link( $terms3[0]->term_id );
                                      } else {
                                        $term_display3 = $term3->name;
                                        $term_slug3    = $term3->slug;
                                        $term_link3    = get_term_link( $term3->term_id );
                                      }
                                    } else {
                                    $term_display3 = $terms3[0]->name;
                                    $term_slug3    = $terms3[0]->slug;
                                    $term_link3    = get_term_link( $terms3[0]->term_id );
                                  }
                                  $primary_term3['url']   = $term_link3;
                                  $primary_term3['slug']  = $term_slug3;
                                  $primary_term3['title'] = $term_display3;
                                }
                        
                       ?>
                           <div class="col-md-4">
                            <div class="card">
                              <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                              <div class="inner">
                                <!-- <span class="category">Blogs</span> -->
                                <span class="category">
                                  <?php  
                                    echo $primary_term3['title'];
                                  ?>
                                  </span>
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