<!-- promo cards -->
<?php if (get_row_layout() == 'promo_cards'): ?>
  <section class="blog-cards">
    <div class="container">
      <?php if (have_rows('card_listing')): ?> 
        <div class="row">
          <?php while (have_rows('card_listing')): the_row();?>
            <?php if (get_row_layout() == 'list_item'): ?>
              <div class="col-sm-4">
                <div class="card">
                  <?php $link = get_sub_field('cta');
                  if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="outer_link"></a>
                  <?php endif;?>
                  <div class="inner">
                    <?php if(get_sub_field('category')): ?>
                      <span class="category"><?php the_sub_field('category'); ?></span>
                    <?php endif; ?>
                    <?php if(get_sub_field('title')): ?>
                      <h3><?php the_sub_field('title'); ?></h3>
                    <?php endif; ?>
                    <?php $link = get_sub_field('cta');
                    if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn link-btn"><?php echo esc_html($link_title); ?></a>
                    <?php endif;?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile;?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- promo cards -->