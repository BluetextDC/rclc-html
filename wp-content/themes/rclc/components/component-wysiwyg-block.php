<!-- wysiwyg-block -->
<?php if (get_row_layout() == 'wysiwyg_block'): ?>
  <section class="wysiwyg-block padding-md">
    <div class="container container-sm">
      <div class="row">
        <div class="col-sm-12">
          <div class="content">
           <?php the_sub_field('content'); ?>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php endif; ?>
<!-- wysiwyg-block -->