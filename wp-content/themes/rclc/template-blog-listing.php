<?php
/**
 * The template for displaying all pages
 * Template Name: Blog Listing
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rclc
 */

get_header();
?>
<!-- Hero Zone -->
<?php if( have_rows('hero_zone') ): 
  while( have_rows('hero_zone') ): the_row();?>
    <section class="blog-listing-hero">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="hero-content">
              <?php if(get_sub_field('hero_text')): ?>
                <h1><?php the_sub_field('hero_text'); ?></h1>
              <?php endif; ?>
              <div class="filter-block">
                <form id="filter-form">
                  <!-- <input type="hidden" id="categories" value="<?php echo isset($_GET['categories']) ? $_GET['categories']: ''?>" name="categories"> -->
                  <input type="hidden" id="tags" value="<?php echo isset($_GET['tags']) ? $_GET['tags']: ''?>" name="tags">
                 <!--  <?php 
                  $categories = get_categories(); {?>
                    <?php if($categories) :?>
                      <div class="dropdown">
                        <a class="dropdown-toggle dropdown-trigger" data-toggle="dropdown">
                          <span class="first-text">Filter by categories</span>
                          <span class="counter"></span>
                          <span class="selected-text">item selected</span>
                        </a>
                        <ul class="dropdown-menu dropdown-style" id="cate-check">
                          <?php foreach($categories as $category) {?>
                            <li>
                              <label class="checkbox-container"><?php echo $category->name; ?><input type="checkbox" class="alm-checkbox" value="<?php echo $category->slug; ?>" <?php if(isset($_GET['categories']) && in_array($key, explode(",", $_GET['categories']))){ ?> <?php }?>>
                                <span class="checkmark"></span>
                              </label>
                            </li>
                          <?php }?>
                          <li class="filter-btns">
                            <button class="clearCheckBox" id="clear-all-category">clear all</button>
                            <button class="right-btn apply-filter-category">apply</button>
                          </li>
                        </ul>
                      </div>
                    <?php endif; ?>
                  <?php }?> -->
                  <?php
                  $args = array( 
                    'order' => 'DESC',
                    'post_type' => 'post', 
                    'posts_per_page' => -1,
                  );
                  ?>
                  <?php 
                  $aval_tags = [];
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); 
                    $t = wp_get_post_tags($post->ID);
                    foreach ($t as $key => $value) {
                      $aval_tags[$value->slug]=$value;
                    }
                  endwhile;?>
                  <?php if($aval_tags): ?>
                    <div class="dropdown">
                      <a class="dropdown-toggle dropdown-trigger" data-toggle="dropdown">Filter by</a>
                      <ul class="dropdown-menu dropdown-style" id="tag-check">
                       <li class="filter-btns">
                        <button class="clearCheckBox" id="clear-all-category">clear all</button>
                        <button class="right-btn apply-filter-tag">apply</button>
                      </li>
                       <?php foreach ($aval_tags as $key=>$value) { ?>
                        <li>
                          <label class="checkbox-container <?php if(isset($_GET['tags']) && in_array($key, explode(",", $_GET['tags']))) {  echo 'selected-posts'; } ?>"><?php echo $value->name; ?><input type="checkbox" 
                            class="alm-checkbox" value="<?php echo $key; ?>" <?php if(isset($_GET['tags']) && in_array($key, explode(",", $_GET['tags']))){ ?> <?php }?>>
                            <span class="checkmark"></span>
                          </label>
                        </li>
                      <?php }?>
                    </ul>
                  </div>
                <?php endif; ?>
              </form>
              <?php if((isset($_GET['categories']) && $_GET['categories']!="") || (isset($_GET['tags']) && $_GET['tags']!="")){?>
                <div class="taglist-outer">
                  <div id="filter-added" class="filter-added filter-blog-added">
                    <!-- <a class="btn btn-default link  filter-clear" id="clear-blog-tags">Clear All</a> -->
                    <ul class="tag-list">
                      <?php foreach($categories as $category) { ?>
                        <?php if(isset($_GET['categories']) && in_array($category->slug, explode(",", $_GET['categories']))){ ?>
                          <li data-type="categories" data-slug="<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
                        <?php }?>
                      <?php } ?>
                      <?php foreach ($aval_tags as $key=>$value) { ?>
                        <?php if(isset($_GET['tags']) && in_array($key, explode(",", $_GET['tags']))){ ?>
                          <li data-type="tags" data-slug="<?php echo $key; ?>"><?php echo $value->name; ?></li>
                        <?php }?>
                      <?php } ?>
                      <li class="clear-all"><a id="clear-post-tags">clear all tags</a></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $post_id = [];
    $posts = get_sub_field('highlighted_blog');
    if( $posts ): ?>
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); $post_id[] = $post->ID;?>

        <div class="blog-item">
          <div class="blog-item-inner">
            <a href="<?php the_permalink(); ?>" class="outer_link"></a>
            <?php if (has_post_thumbnail()) {?>
              <div class="bg-img" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
            <?php }?>
            <div class="blog-content">
              <h4><?php the_title(); ?></h4>
              <p>
                    <?php echo wp_trim_words(get_the_content(), 30, ' (...)'); ?>
              </p>
              <span><?php the_date("F j, Y"); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
  </section>
<?php endwhile; ?>  
<?php endif; ?>
<!-- Hero Zone -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 
  'post_type' => 'post',
  'posts_per_page' => 6,
  'orderby' => 'DESC',
  'paged' => $paged,
  'post__not_in' => $post_id
);
if(isset($_GET['keyword']) && trim($_GET['keyword']) != ""){
  $args['s'] = $_GET['keyword']; 
}
if(isset($_GET['categories']) && trim($_GET['categories']) != ""){
  $args['category_name'] = $_GET['categories']; 
}
if(isset($_GET['tags']) && trim($_GET['tags']) != ""){
  $args['tag'] = $_GET['tags']; 
}
?>

<section class="listing-outer">
 <div class="container">
  <!-- Post listing -->
  <div class="row">
    <div class="col-sm-12 padding-none">
      <ul class="blog-listing">
        <?php
        $loop = new WP_Query( $args );
        if ($loop->have_posts()) :
          $prev_posts = ( $paged - 1 ) * 6;
          $from = 1 + $prev_posts;
          $to = count( $loop->posts ) + $prev_posts;
          $of = $loop->found_posts;
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <li class="item">
            <div class="item-inner">
              <a href="<?php the_permalink(); ?>" class="outer_link"></a>
              <?php if(has_post_thumbnail()){ ?>
                <div class="bg-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
              <?php } else {?>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg');"></div>
              <?php }?>
              <div class="blog-content">
                <h4><?php the_title(); ?></h4>
                <!-- <p><?php the_excerpt(); ?></p> -->
                  <p>
                    <?php echo wp_trim_words(get_the_content(), 20, ' (...)'); ?>
                  </p>
                <span><?php echo get_the_date('F j, Y'); ?></span>
              </div>
            </div>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
         <div class="no-post">
           <p>Posts not found</p>
         </div>
       <?php endif; ?>
       <div class="clearfix"></div>
     </ul>
   </div>
 </div>
 <!-- Post listing -->
 <!-- pagination block -->
 <div class="row pagination-outer pagination-visible">
  <div class="col-sm-5 center">
   <p>Showing <b><?php echo $from?>-<?php echo $to?></b> of <?php echo $of?> results</p>
 </div>

 <!-- Pagination pages counting -->
 <?php
 $args = array(
   'total' => $loop->max_num_pages,
   'current' => max(1, get_query_var('paged')),
   'prev_next' => true,
   'prev_text' => __('<i class="icon-left"></i>'),
   'next_text' => __('<i class="icon-left"></i>'),
 ); { ?>
   <div class="col-sm-7 text-right center">
    <div class="pagination hidden-xs">
      <?php echo paginate_links($args); ?>
    </div>
    <div class="pagination-mobile pagination visible-xs">
      <?php echo paginate_links($args); ?>
    </div>
  </div>
<?php }?>
</div>
<!-- pagination block -->
</div>
</section>

<?php 
get_template_part ( 'components/component', 'cta-block' ); 
?>
<?php
get_footer();
