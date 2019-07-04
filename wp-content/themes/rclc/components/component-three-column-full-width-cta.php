<!-- banner-cta section -->
<?php if (get_row_layout() == 'three_column_full-width_cta'): ?>
  <section class="banner-cta relative">
    <div class="bg-img" style="background-image: url('<?php the_sub_field('background_image');?>');"></div>
    <div class="container">
      <?php if (have_rows('cta_listing')): ?>
        <div class="row flex-container padding-lg">
         <?php while (have_rows('cta_listing')): the_row();?>
          <?php if (get_row_layout() == 'item'): ?>
           <?php $link = get_sub_field('cta');
           if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="col-md-4">
              <div class="content">
                <h3><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></h3>
              </div>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile;?>
    </div>
  <?php endif; ?>
</div>
</section>
<?php endif; ?>
<!-- banner-cta section -->