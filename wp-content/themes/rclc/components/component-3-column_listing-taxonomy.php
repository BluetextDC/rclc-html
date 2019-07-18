<?php }else if(get_sub_field('content_display_mode') == 'display_by_taxonomy'){?>
  <?php $terms = get_sub_field('taxonomy_select');
  if( $terms ): ?>
   <div class="row">
    <?php foreach( $terms as $term ): ?>
      <?php
      $args = array( 
        'post_type' => 'page',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'tax_query' => array(
          array(
            'taxonomy' => 'content_type',
            'field' => 'slug',
            'terms' =>  $term->name,
          ),
        ),
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <div class="col-sm-4">
        <div class="card">
          <a href="<?php echo get_term_link( $term ); ?>" target="" class="outer_link"></a>
          <div class="inner">
            <span class="category"><?php echo $term->name; ?></span>
            <h3><?php the_title(); ?></h3>
            <a href="<?php the_permalink(); ?>" class="btn link-btn">Read more</a>
          </div>
        </div>
      </div>
    <?php endwhile;
    ?>
  <?php endforeach; ?>
</div>
<?php endif; ?>
<?php }?>


<!-- perfect code -->
<!-- promo cards -->
<?php if (get_row_layout() == '3-column_listing'): ?>
  <section class="blog-cards <?php if(get_sub_field('limit_items_to_3_total') == 'true'){?>limite-th<?php }?>">
    <div class="container">
      <?php if(get_sub_field('content_display_mode') == 'select_page'){?>
        <?php $posts = get_sub_field('select_page');
        if( $posts ): ?>
          <div class="row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-sm-4">
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                  <div class="inner">
                    <?php $texonomy_terms = get_the_terms($post->ID, 'content_type');?>
                    <?php if($texonomy_terms){ ?>
                      <span class="category">
                        <?php foreach ($texonomy_terms as $key=>$value) { ?>
                          <?php echo $value->slug; ?>
                        <?php }?>
                      </span>
                    <?php } else { ?>
                      <span class="category">Page</span>
                    <?php }?>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" target="" class="btn link-btn">Read more</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          </div>
        <?php endif; ?>
      <?php }else if(get_sub_field('content_display_mode') == 'select_course_cpt'){?>
        <?php $posts = get_sub_field('select_course_cpt');
        if( $posts ): ?>
          <div class="row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-sm-4">
                <div class="card">
                  <a href="<?php the_permalink(); ?>" target="" class="outer_link"></a>
                  <div class="inner">
                    <span class="category">Post</span>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" class="btn link-btn">Read more</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          </div>
        <?php endif; ?>
      <?php } else if(get_sub_field('content_display_mode') == 'select_posts') {?>
        <?php $posts = get_sub_field('select_posts');
        if( $posts ): ?>
          <div class="row">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-sm-4">
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="outer_link"></a>
                  <div class="inner">
                    <span class="category">Blog
                    </span>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" target="" class="btn link-btn">Read more</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          </div>
        <?php endif; ?>
      <?php }?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- promo cards -->
