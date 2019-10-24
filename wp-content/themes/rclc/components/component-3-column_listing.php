promo cards -->
<?php if (get_row_layout() == '3-column_listing'): ?>
  <section class="blog-cards">
    <div class="container">

      <!-- Select Pages -->
      <?php if(get_sub_field('content_display_mode') == 'select_pages'){?>
        <?php $posts = get_sub_field('select_page');
        if( $posts ): ?>
          <div class="row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-md-4">
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="outer_link"></a>
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
                    <h3><?php the_title(); ?></h3>
                    <div class="btn-outer">
                      <a href="<?php the_permalink(); ?>" class="btn link-btn">read more</a>
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
      <?php if(get_sub_field('content_display_mode') == 'select_course_cpt'){?>
       <?php $posts = get_sub_field('select_course_cpt');
       if( $posts ): ?>
        <div class="row">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-md-4">
              <div class="card course">
                  <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                <div class="inner">
                  <span class="category">Courses</span>
                  <h3><?php the_title(); ?></h3>
                  <div class="btn-outer">
                    <a href="<?php the_permalink(); ?>" class="btn link-btn">class description</a><br>
                    <?php if (get_sub_field('course_calendar_cta')) { ?>
                    <a href="<?php the_sub_field('course_calendar_cta'); ?>" class="link-btn cc-link-btn">course calendar</a>
                    <?php } ?>
                  </div>
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
      <?php if(get_sub_field('content_display_mode') == 'select_post'){?>
      <?php $posts = get_sub_field('select_posts');
      if( $posts ): ?>
        <div class="row">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
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
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <?php }?>
    <!-- Select Posts -->




    <!-- Select taxonomy -->
    <?php if (get_sub_field('limit_to_three_content_blocks') === true) {?>
    <?php if(get_sub_field('content_display_mode') == 'select_taxonomy'){?>
        <?php 
          $postselect = get_sub_field('select_taxonomy');
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
                                <!-- <span class="category">Blogs</span> -->
                                <span class="category">
                                <?php 
                                     $cat = [];
                                     foreach((get_the_category()) as $category){
                                       $cat[] = $category->name;
                                      }
                                      echo implode (', ',$cat); 
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
    <?php if(get_sub_field('content_display_mode') == 'select_taxonomy'){?>
        <?php 
          $postselect = get_sub_field('select_taxonomy');
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
                                <!-- <span class="category">Blogs</span> -->
                                <?php 
                                  foreach((get_the_category()) as $category){
                                      echo $category->name."<br>";
                                      echo category_description($category);
                                      }
                                  ?>
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
</section>


<?php endif; ?>
<!-- promo cards