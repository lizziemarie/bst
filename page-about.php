<?php
/**
 * The template for displaying the about page
 *
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package bst
 */

get_header();
?>


<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="about-section">
      <div class="about">

        <div class="about-item-1">
          <img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/sonoma_pic.jpg" alt="lizzie marie about image">
        </div>

        <div class="about-item-2">
          <h3>Let's build your dream site</h3>
          <h2 class="text-shadow underline">Info</h2>
          <p>Based in Santa Barbara, California, Bandana Studio was founded to build longterm partnerships with creative entrepreneurs looking for a stunning, custom website. I work to bring your unique vision to life through collaboration, purpose and steady support.</p>
          <p>Check out my services below. If you feel like we’re a match, get in touch! </p>
        </div>

        <div class="about-item-3">
          <p>
            <a class="btn pill" href="/bandana-studio/startdesign">get started</a>
          </p>
        </div>
      </div> <!-- .about -->

      <div class="services">
          <div class="services-title">
            <h6>Services</h6>
          </div>

          <div class="services-item-1 service-item">
              <img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/services-ph.png" alt="one stop shop icon">
              <h3>Website Design and Development</h3>
              <p>Go from “Meh,” to “Money!” with a custom WordPress site that attracts your ideal audience, blows up conversion rates, and skyrockets traffic. With full site installation and support, we take your simple seed or idea and breathe functionality, practicality, and optimization through it so you can run forward with a truly inspired new site.</p>
              <p>
                <a class="btn pill" href="/bandana-studio/startdesign">get started</a>
              </p>
          </div>

          <div class="services-item-2 service-item">
              <img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/services-ph.png" alt="hassel free icon">
              <h3>Website Maintenance</h3>
              <p>Go from “Meh,” to “Money!” with a custom WordPress site that attracts your ideal audience, blows up conversion rates, and skyrockets traffic. With full site installation and support, we take your simple seed or idea and breathe functionality, practicality, and optimization through it so you can run forward with a truly inspired new site.</p>
              <p>
                <a class="btn pill" href="/bandana-studio/sitemaintenance">get started</a>
              </p>
          </div>

      </div><!-- .services -->


      <div class="questions">

        <div class="grid-box grid-box-one">
          <h6>Questions</h6>
        </div>

        <div class="grid-box grid-box-two">
          <div class="grid-int">
            <div class="grid-int-1">
              <p>Think we’d be a good match for a project but not sure where to start? Get in touch! Fill out the contact form here or shoot me an email directly at: </p>
              <p><strong>hello@bandanastudio.co</strong></p>
              <p>Please allow at least 48 hours for a response</p>
            </div>
          </div>
        </div>
      </div> <!--.questions-->

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
