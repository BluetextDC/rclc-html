<?php
/**
 * The template for displaying all pages
 * Template Name: Home
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
    <section class="hero-zone home">
      <div class="bg-img"></div>
      <div class="container">
        <div class="row v-center wd-100">
          <div class="upper-content">
            <?php if(get_sub_field('first_heading')): ?>
              <h1><?php the_sub_field('first_heading'); ?></h1>
            <?php endif; ?>
            <div class="bottom">
             <?php if(get_sub_field('second_heading')): ?>
              <span class="h1"><?php the_sub_field('second_heading'); ?></span>
            <?php endif; ?>
            <?php if(get_sub_field('content')): ?>
              <div class="content">
               <?php the_sub_field('content'); ?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     </div>
     <?php if (have_rows('cta_block')): ?>
       <div class="row bottom-stripe">
        <?php while (have_rows('cta_block')): the_row();?>
          <?php if (get_row_layout() == 'cta'): ?>
            <div class="col-sm-4">
              <?php $link = get_sub_field('cta');
              if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a  href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif;?>
            </div>
          <?php endif; endwhile; ?>
        </div>
      <?php endif;?>
    </div>
  </section>
<?php endwhile; ?>  
<?php endif; ?>
<!-- Hero Zone -->
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
<!-- banner-cta section -->
<section class="banner-cta relative">
  <div class="bg-img"></div>
  <div class="container">
    <div class="row flex-container padding-lg">
      <div class="col-md-4">
        <div class="content">
          <h3>H3 26 Customer <br>Experience: A Child’s Ballet</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h3>H3 26 John’s <br>Perspective: Determine Your Currency</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h3>H3 26 Customer <br>Experience: Car Rental Company</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner-cta section -->

<?php
get_footer();
