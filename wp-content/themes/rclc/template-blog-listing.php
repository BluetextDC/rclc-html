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
<section class="blog-listing-hero">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="hero-content">
          <h1>Listing header optional header lorem ipsom site message</h1>
          <div class="filter-block">
            <form>
              <div class="dropdown">
                <a class="dropdown-toggle dropdown-trigger" data-toggle="dropdown">
                  <span class="first-text">Filter by</span>
                  <span class="counter"></span>
                  <span class="selected-text">item selected</span>
                </a>
                <ul class="dropdown-menu dropdown-style" id="cate-check">
                  <li>
                    <label class="checkbox-container">cat-1<input type="checkbox" class="alm-checkbox" value="cat-1">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="checkbox-container">cat-2<input type="checkbox" class="alm-checkbox" value="cat-1">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="checkbox-container">cat-3<input type="checkbox" class="alm-checkbox" value="cat-1">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="checkbox-container">cat-4<input type="checkbox" class="alm-checkbox" value="cat-1">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="checkbox-container">cat-5<input type="checkbox" class="alm-checkbox" value="cat-1">
                      <span class="checkmark"></span>
                    </label>
                  </li>
                    <!-- <li class="filter-btns">
                      <button class="clearCheckBox" id="clear-all-category">clear all</button>
                      <button class="right-btn apply-filter-category">apply</button>
                    </li> -->
                  </ul>
                </div>
                <div class="dropdown">
                  <a class="dropdown-toggle dropdown-trigger" data-toggle="dropdown">Filter by</a>
                  <ul class="dropdown-menu dropdown-style" id="cate-check">
                    <li>
                      <label class="checkbox-container">cat-1<input type="checkbox" class="alm-checkbox" value="cat-1">
                        <span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="checkbox-container">cat-2<input type="checkbox" class="alm-checkbox" value="cat-1">
                        <span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="checkbox-container">cat-3<input type="checkbox" class="alm-checkbox" value="cat-1">
                        <span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="checkbox-container">cat-4<input type="checkbox" class="alm-checkbox" value="cat-1">
                        <span class="checkmark"></span>
                      </label>
                    </li>
                    <li>
                      <label class="checkbox-container">cat-5<input type="checkbox" class="alm-checkbox" value="cat-1">
                        <span class="checkmark"></span>
                      </label>
                    </li>
                    <!-- <li class="filter-btns">
                      <button class="clearCheckBox" id="clear-all-category">clear all</button>
                      <button class="right-btn apply-filter-category">apply</button>
                    </li> -->
                  </ul>
                </div>
              </form>
              <div class="taglist-outer">
                <div id="filter-added" class="filter-added filter-blog-added">
                  <!-- <a class="btn btn-default link  filter-clear" id="clear-blog-tags">Clear All</a> -->
                  <ul class="tag-list">
                    <li>tag</li>
                    <li>tag</li>
                    <li class="clear-all"><a>clear all tags</a></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-item">
      <div class="blog-item-inner">
        <a href="blog-details.html" class="outer_link"></a>
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/slide-3.jpg');"></div>
        <div class="blog-content">
          <h4>customer experience: luxury fashion</h4>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
          <span>December 13th, 2018</span>
        </div>
      </div>
    </div>

  </section>
  <!-- Hero Zone -->
  <section class="listing-outer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 padding-none">
          <ul class="blog-listing">
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/slide-2.jpg');"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-1.jpg');"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-2.jpg');"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-3.jpg');"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <li class="item">
              <div class="item-inner">
                <a href="blog-details.html" class="outer_link"></a>
                <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-4.jpg');"></div>
                <div class="blog-content">
                  <h4>Tips For Giving Effective Constructive Feedback Lorem Ipsum Dolor Review</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum….</p>
                  <span>December 13th, 2018</span>
                </div>
              </div>
            </li>
            <div class="clearfix"></div>
          </ul>
        </div>
      </div>
      <div class="row pagination-outer pagination-visible">
        <div class="col-sm-5 center">
          <p>Showing <b>1-8</b> of 700 results</p>
        </div>
        <div class="col-sm-7 text-right center">
          <div class="pagination hidden-xs">
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="javascript:void(0)">2</a>
            <a class="page-numbers" href="javascript:void(0)">3</a>
            <a class="page-numbers" href="javascript:void(0)">4</a>
            <a class="page-numbers" href="javascript:void(0)">5</a>
            <a class="page-numbers" href="javascript:void(0)">6</a>
            <a class="page-numbers" href="javascript:void(0)">7</a>
          </div>
          <div class="pagination-mobile pagination visible-xs">
            <a class="prev page-numbers" href="javascript:void(0)"><i class="icon-left"></i></a>
            <span aria-current="page" class="page-numbers current">1</span> <b>/</b> 
            <a class="page-numbers" href="javascript:void(0)">10</a>
            <a class="next page-numbers" href="javascript:void(0)"><i class="icon-left"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if (have_rows('components')): 
    while (have_rows('components')): the_row();
     get_template_part ( 'components/component', 'cta-block' ); 
   endwhile; endif; ?>
   <?php
   get_footer();
