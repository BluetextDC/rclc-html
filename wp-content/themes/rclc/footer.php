<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rclc
 */

?>

</div>
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
  <!-- Main Footer -->
  <footer class="footer padding-global light_gray-bg">
    <div class="container">
      <div class="row d-flex">
        <!-- footer social media -->
        <div class="col-md-4 align-self-end">
          <div class="footer-left">
            <ul class="social-list">
              <li><a href="javascript:void(0)" target="_blank"><i class="icon-linkedin-button-logo"></i></a></li>
              <li><a href="javascript:void(0)" target="_blank"><i class="icon-instagram-logo"></i></a></li>
              <li><a href="javascript:void(0)" target="_blank"><i class="icon-twitter-logo-silhouette"></i></a></li>
              <li><a href="javascript:void(0)" target="_blank"><i class="icon-facebook-app-symbol"></i></a></li>
            </ul>
            <ul class="footer-info">
              <li><a href="mailto:dummy@gmail.com">Email Us</a></li>
              <li><a href="tel:301.380.9570">301.380.9570</a></li>
              <li>
                <p>Mon - Fri 8 AM - 5 PM</p>
              </li>
            </ul>
          </div>
        </div>
        <!-- footer social media -->
        <!-- footer menu for navigate page -->
        <div class="col-md-4 align-self-end">
          <div class="footer-center">
            <div class="row">
              <div class="col-md-6">
                <ul class="footer-menu first">
                  <li><a href="javascript:void(0)" target="_blank">Cources</a></li>
                  <li><a href="javascript:void(0)" target="_blank">Services</a></li>
                  <li><a href="javascript:void(0)" target="_blank">Symposium</a></li>
                  <li><a href="javascript:void(0)" target="_blank">blog</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="footer-menu">
                  <li><a href="javascript:void(0)" target="_blank">About Us</a></li>
                  <li><a href="javascript:void(0)" target="_blank">Contact Us</a></li>
                  <li><a href="javascript:void(0)" target="_blank">Our Leadership</a></li>
                  <li><a href="javascript:void(0)" target="_blank">Awards</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- footer menu for navigate page -->
        <!-- footer website information -->
        <div class="col-md-4 align-self-end">
          <div class="footer-right">
            <div class="footer-logo">
              <a href="javascript:void(0)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="RCLC">
              </a>
            </div>
            <ul>
              <li>
                <p>Hotel Site</p>
              </li>
              <li>
                <p>Privacy and Cookie Statment</p>
              </li>
            </ul>
            <div class="copyright">
              <p>&copy; 2019 The-Ritz-Carlton Leadership Center. <span>All rights reserved</span></p>
            </div>
          </div>
        </div>
        <!-- footer website information -->
      </div>
    </div>
  </footer>
  <!-- Main Footer -->

<?php wp_footer(); ?>

</body>
</html>
