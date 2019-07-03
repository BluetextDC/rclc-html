<!-- single-promo  -->
<?php if (get_row_layout() == 'content_block'): ?>
  <section class="single-promo padding-lg white-bg">
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
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- single-promo  -->