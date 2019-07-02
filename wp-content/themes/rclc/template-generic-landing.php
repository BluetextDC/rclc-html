<?php
/**
 * The template for displaying all pages
 * Template Name: Generic Landing
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
    <section class="hero-zone generic-landing">
      <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/generic-hero.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="content">
            <h1>Generic landing header content optional lorem amet ipsom dolor frothed lorem.</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Zone -->
    <!-- wysiwyg-block -->
    <section class="wysiwyg-block padding-md">
      <div class="container container-sm">
        <div class="row">
          <div class="col-sm-12">
            <div class="content">
              <h2>Lorem ipsum general title, course description, sample headline and information</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. aute irure dolor in reprehenderit in voluptate velit.</p>
              <h3>Sub Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              <ul>
                <li>
                  Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet nisi ut aliquip.
                </li>
                <li>Lorem ipsum dolor sit amet nisi ut aliquip.</li>
              </ul>
              <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</li>
                <li>Consectetur adipisicing elit, sed do eiusmod.</li>
                <li>Lorem ipsum dolor sit amet nisi ut aliquip.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- wysiwyg-block -->
    <!-- Slider section -->
    <section class="slider-sec">
      <div class="slider">
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/slide-1.jpg');"></div>
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/slide-2.jpg');"></div>
        <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/slide-3.jpg');"></div>
      </div>
    </section>
    <!-- Slider section -->
    <section class="blog-cards">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <span class="category">blog</span>
              <h3>Customer Experience: A Child’s Ballet</h3>
              <a class="btn link-btn">read more</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <span class="category">Vertical / Industry</span>
              <h3>Gold Standard solutions across many industries</h3>
              <a class="btn link-btn">all industries</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <span class="category">Courses</span>
              <h3>Enrichment courses immersed in The Ritz-Carlton ambience</h3>
              <a class="btn link-btn">course calendar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tab Section -->
    <section class="custom-tab padding-lg">
      <div class="container">
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-7">
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active content">
                <h2>H2 30 Lorem Option 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="javascript:void(0)" class="btn link-btn">Learn more</a>
              </div>
              <div id="menu1" class="tab-pane fade content">
                <h2>Lorem Option 2</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="javascript:void(0)" class="btn link-btn">Learn more</a>
              </div>
              <div id="menu2" class="tab-pane fade content">
                <h2>Lorem Option 3</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="javascript:void(0)" class="btn link-btn">Learn more</a>
              </div>
              <div id="menu2" class="tab-pane fade content">
                <h2>Lorem Option 4</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="javascript:void(0)" class="btn link-btn">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">lorem option 1</a></li>
              <li><a data-toggle="tab" href="#menu1">lorem option 2</a></li>
              <li><a data-toggle="tab" href="#menu2">lorem option 3</a></li>
              <li><a data-toggle="tab" href="#menu3">lorem option 4</a></li>
            </ul>
          </div>
        </div>
        <div class="row custom-accordian visible-sm visible-xs">
          <div class="panel-group" id="accordion">
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">Collapsible Group 1</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <span>related case study</span>
                  <a href="" class="btn">learn more</a>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">Collapsible Group 2</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <span>related case study</span>
                  <a href="" class="btn">learn more</a>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">Collapsible Group 3</a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tab Section -->
    <!-- Cta Section -->
    <section class="cta-section text-center">
      <div class="container">
        <div class="row">
          <div class="cta-outer">
            <a href="javascript:void(0)" class="h2"><span>Contact</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Cta Section -->
    <!-- Half Block -->
    <section class="half-block">
      <div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/glass-bg.jpg');">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 right">
            <div class="content">
              <h2>Single Promo Block with Image Dolor Sit Amet</h2>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Half Block -->
    <!-- single-promo  -->
    <section class="single-promo padding-lg white-bg">
      <div class="container container-sm">
        <div class="row">
          <div class="col-sm-12">
            <div class="content">
              <h2>Single Promo without Image</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- single-promo  -->

<?php
get_footer();
