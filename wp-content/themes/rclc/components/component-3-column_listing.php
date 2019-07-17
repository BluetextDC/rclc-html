<!-- promo cards -->
<?php if (get_row_layout() == '3-column_listing'): ?>
  <section class="blog-cards <?php if(get_sub_field('limit_items_to_3_total') == 'true'){?>limite-th<?php }?>">
    <div class="container">
      <?php if(get_sub_field('content_display_mode') == 'select_pages'){?>
        <?php $posts = get_sub_field('page_select');
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
      <?php }else if(get_sub_field('content_display_mode') == 'display_by_taxonomy'){?>
        <?php $posts = get_sub_field('taxonomy_select');
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
      <?php }?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- promo cards -->