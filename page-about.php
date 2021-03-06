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
          <img src="<?php echo get_template_directory_uri(); ?>/img/lizzie-about.jpg" alt="lizzie marie">
        </div>

        <div class="about-item-2">
          <h2 class="text-shadow underline">Info</h2>
          <p>Based in Santa Barbara, California, Bandana Studio was founded to build longterm partnerships with creative entrepreneurs looking for a stunning, custom branding and website design. We work to bring your unique vision to life through collaboration, purpose and steady support.</p>
          <p>Check out our services below. If you feel like we’re a match, get in touch! </p>
        </div>
      </div> <!-- .about -->

      <div class="services">
          <div class="services-title">
            <h6>Services</h6>
          </div>

          <div class="services-item-1 service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/luna-services-small.jpg" alt="one stop shop icon">
              <h3>BRAND & WEBSITE</h3>
              <p>Take your business to the next level with fresh new branding and a custom website that attracts your target audience, converts more users to customers and takes you to where you dream of being. With full branding & site design, installation and support, we will be creative partners in breathing life into your vision.</p>
              <p>
                <a class="btn-dark pill" href="/bandana-studio/startdesign">get started</a>
              </p>
          </div>

          <div class="services-item-2 service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/flowers-services-small.jpg" alt="hassel free icon">
              <h3>WEBSITE MAINTENANCE</h3>
              <p>Just like any investment, a beautiful site needs regular maintenance. We want you to get the most out of your site and the easiest way to do that is through my full maintenance and support services. This is the way to guarantee that your site is running at full capacity: backed up, up-to-date, and malware-free.</p>
              <p>
                <a class="btn-dark pill" href="/bandana-studio/sitemaintenance">get started</a>
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
              <p>Think we’d be a good match for a project but not sure where to start? Get in touch! Fill out the contact form <a href="/bandana-studio/contact" style="color: #404040;">here</a> or shoot us an email directly at: </p>
              <p><strong>hi@bandanastudio.co</strong></p>
              <p>Please allow at least 48 hours for a response</p>
            </div>
          </div>
        </div>
      </div> <!--.questions-->

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
