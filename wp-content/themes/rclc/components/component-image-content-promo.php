<!-- Half Block -->
<?php if (get_row_layout() == 'image_content_promo'): ?>
  <section class="half-block">
    <?php if(get_sub_field('image')): ?>
      <div class="bg-img" style="background-image: url('<?php the_sub_field('image')?>');">
      </div>
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 right">
          <div class="content">
           <?php if(get_sub_field('title')): ?>
            <h2><?php the_sub_field('title')?></h2>
          <?php endif; ?>
          <?php if(get_sub_field('content')): ?>
           <?php the_sub_field('content')?>
         <?php endif; ?>
       </div>
     </div>
   </div>
 </div>
</section>
<?php endif; ?>
<!-- Half Block -->