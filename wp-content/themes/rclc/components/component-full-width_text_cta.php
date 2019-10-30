<!-- single-promo  -->
<?php if (get_row_layout() == 'full-width_text_cta'): ?>
  <section class="single-promo padding-md white-bg">
    <div class="container container-sm">
      <div class="row">
        <div class="col-sm-12">
          <div class="content">
            <?php if(get_sub_field('title')): ?>
              <h2><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>
            <?php if(get_sub_field('description')): ?>
              <?php the_sub_field('description'); ?>
            <?php endif; ?>
            <?php $link = get_sub_field('cta');
            if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <div class="btn-outer">
                <a href="<?php echo esc_url($link_url); ?>" class="btn btn-default" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              </div>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- single-promo  -->
