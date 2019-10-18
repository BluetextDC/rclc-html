
<?php if (get_row_layout() == 'accordion_listing'): ?>
<section class="accordion-listing relative padding-global">
  <div class="container">
      <?php if(get_sub_field('ac_title')): ?>
        <h2><?php the_sub_field('ac_title'); ?></h2>
      <?php endif; ?>


    <?php if(get_sub_field('al_content_display_mode') == 'al_select_taxonomy'){?>
    <div class="panel-group" id="accordionGroupClosed" role="tablist" aria-multiselectable="true">
        <?php 
          $postselect = get_sub_field('al_taxonomy');
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
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?php echo get_the_ID(); ?>">
                          <h3 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionGroupClosed" href="#post-pagelisting-<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="post-pagelisting-<?php echo get_the_ID(); ?>">
                              <?php the_title(); ?>
                            </a>
                          </h3>
                        </div>
                        <div id="post-pagelisting-<?php echo get_the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo get_the_ID(); ?>">
                          <div class="panel-body">
                              <p><?php if (!has_excerpt()) { echo substr(get_the_content(), 0,(int)get_sub_field("al_description_length")).'...'; } else {echo substr(get_the_excerpt(), 0,(int)get_sub_field("al_description_length")).'...';} ?></p>
                            <div class="button-container-box">
                            <a href="<?php the_permalink(); ?>" class="btn link-btn">
                              <?php
                                $value = get_sub_field( "cta_text" );
                                if( $value ) {
                                    echo $value;
                                } else {
                                    echo 'Learn More';
                                } 
                               ?>
                            </a>
                          </div>
                          </div>
                        </div>
                      </div>
                  <?php endwhile;
                   }
                  }
                  wp_reset_postdata();
                ?>
          </div>
        <?php }?>


      <?php if(get_sub_field('al_content_display_mode') == 'al_select_post'){?>
      <?php $posts = get_sub_field('al_choose_content');
      if( $posts ): ?>
        <div class="panel-group" id="accordionGroupClosed" role="tablist" aria-multiselectable="true">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); 
              // var_dump(get_post_meta($post->ID));
            ?>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo get_the_ID(); ?>">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionGroupClosed" href="#taxonomy-listing-<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="taxonomy-listing-<?php echo get_the_ID(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h3>
                </div>
                <div id="taxonomy-listing-<?php echo get_the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo get_the_ID(); ?>">
                  <div class="panel-body">
                    <?php echo get_sub_field('wysiwyg_block', $post->ID); ?>
                   <!-- <p><?php if (!has_excerpt()) {?><?php echo substr(get_the_content(), 0,250).'...'; ?><?php } else {the_excerpt();}?></p> -->
  <p><?php if (!has_excerpt()) { echo substr(get_the_content(), 0,(int)get_sub_field("al_description_length")).'...'; } else {echo substr(get_the_excerpt(), 0,(int)get_sub_field("al_description_length")).'...';} ?></p>
                  <div class="button-container-box">
                      <a href="<?php the_permalink(); ?>" class="btn link-btn">
                        <?php
                          $value = get_sub_field( "cta_text" );
                          if( $value ) {
                              echo $value;
                          } else {
                              echo 'Learn More';
                          } 
                         ?>
                  </a>
                 </div>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    <?php }?>



<!--     <div class="panel-group" id="accordionGroupClosed" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h3 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionGroupClosed" href="#collapseCloseOne" aria-expanded="true" aria-controls="collapseCloseOne">
              Collapsible Group Item #1 Closed on Load
            </a>
          </h3>
        </div>
        <div id="collapseCloseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
            raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            <a href="<?php the_permalink(); ?>" class="btn link-btn">read more</a>
          </div>
        </div>
      </div>
    </div> -->

    </div>
</section>
<?php endif; ?>