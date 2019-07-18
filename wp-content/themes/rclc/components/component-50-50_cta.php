<!-- Half Block -->
<?php if (get_row_layout() == '50-50_cta'): ?>
  <section class="half-block <?php the_sub_field('image_first');?>">
    <?php if(get_sub_field('image')): ?>
      <div class="bg-img" style="background-image: url('<?php the_sub_field('image')?>');">
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 right">
          <div class="content">
           <?php if(get_sub_field('heading')): ?>
            <h2><?php the_sub_field('heading')?></h2>
          <?php endif; ?>
          <?php if(get_sub_field('description')): ?>
           <?php the_sub_field('description')?>
         <?php endif; ?>
         <?php $link = get_sub_field('cta_text');
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
<!-- Half Block -->