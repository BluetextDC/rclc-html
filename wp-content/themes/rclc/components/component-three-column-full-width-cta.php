<!-- banner-cta section -->
<?php if (get_row_layout() == 'three_column_full-width_cta'): ?>
  <section class="banner-cta relative">
    <div class="bg-img" style="background-image: url('<?php the_sub_field('background_image');?>');"></div>
    <div class="container">

      <!-- Select Pages -->
      <?php if(get_sub_field('cta_content_display_mode') == 'select_pages'){?>
        <?php $posts = get_sub_field('select_pages');
        if( $posts ): ?>
          <div class="row flex-container padding-lg">
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <div class="col-md-4">
                <div class="content">
                    <?php $texonomy_terms = get_the_terms($post->ID, 'content_type');?>
                    <?php if($texonomy_terms){ ?>
                    <?php } else { ?>
                      <span class="category">Page</span>
                    <?php }?>
                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      <?php }?>
      <!-- Select Pages -->

    <!-- Select Posts -->
    <?php if(get_sub_field('cta_content_display_mode') == 'select_post'){?>
      <?php $posts = get_sub_field('select_post');
      if( $posts ): ?>
        <div class="row flex-container padding-lg">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="col-md-4">
              <div class="content">
                  <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <?php }?>
    <!-- Select Posts -->

  </div>
</section>
<?php endif; ?>
<!-- banner-cta section -->