<!-- Tab Section -->
<?php if (get_row_layout() == 'vertical_resource_ladder'): ?>
  <?php $row_id =  get_row_index(); ?>
  <section class="custom-tab padding-lg">
    <div class="container">
      <div class="row hidden-xs hidden-sm">
        <div class="col-md-7">
          <div class="tab-content">
            <?php if (have_rows('tab_listing')): ?>
              <?php $j = 1;while (have_rows('tab_listing')): the_row();?>
              <?php if (get_row_layout() == 'item'): ?>
                <div id="c-<?php echo $row_id; ?>-<?php echo get_row_index(); ?>" class="tab-pane fade in content <?php echo $j == 1 ? 'active' : ''; ?>">
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
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn link-btn"><?php echo esc_html($link_title); ?></a>
                  <?php endif;?>
                </div>
              <?php endif;?>
              <?php $j++;endwhile;endif;?>
            </div>
          </div>
          <div class="col-md-5">
            <ul class="nav nav-tabs">
              <?php if (have_rows('tab_listing')): ?>
                <?php $i = 1;while (have_rows('tab_listing')): the_row();?>
                <?php if (get_row_layout() == 'item'): ?>
                  <?php if (get_sub_field('headline')): ?>
                    <li class="<?php echo $i == 1 ? 'active' : ''; ?>"><a data-toggle="tab" href="#c-<?php echo $row_id; ?>-<?php echo get_row_index(); ?>"><?php the_sub_field('headline');?></a></li>
                  <?php endif;?>
                <?php endif;?>
                <?php $i++;endwhile;endif;?>
              </ul>
            </div>
          </div>
          <!-- Accordian Start here -->
          <div class="row custom-accordian visible-sm visible-xs">
            <div class="panel-group" id="accordion-<?php echo $row_id; ?>">
              <?php if (have_rows('tab_listing')): ?>
                <?php $k = 1;while (have_rows('tab_listing')): the_row();?>
                <?php if (get_row_layout() == 'item'): ?>
                  <div class="panel">
                    <?php if (get_sub_field('headline')): ?>
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion-<?php echo $row_id; ?>" href="#m-<?php echo $row_id; ?>-<?php echo get_row_index(); ?>" class="collapsed"><?php the_sub_field('headline'); ?></a>
                        </h4>
                      </div>
                    <?php endif; ?>
                    <div id="m-<?php echo $row_id; ?>-<?php echo get_row_index(); ?>" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?php if(get_sub_field('title')): ?>
                          <h2><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_sub_field('description')): ?>
                          <?php the_sub_field('description');?>
                        <?php endif;?>
                        <?php $link = get_sub_field('cta');
                        if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn"><?php echo esc_html($link_title); ?></a>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>
                <?php endif;?>
                <?php $i++;endwhile;endif;?>
              </div>
            </div>
            <!-- Accordian Start here -->
          </div>
        </section>
      <?php endif; ?>
<!-- Tab Section