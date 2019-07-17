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