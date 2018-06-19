<?php
/**
 * The template for displaying the get started with site maintenance page
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
	<main id="main" class="site-main get-started-m-main">

    <div class="get-started">

			<div class="about">

              <div class="about-item-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/laptop-relax.jpg" alt="Laptop Design">
              </div>

              <div class="about-item-2">
                <h3>TLC for your site</h3>
                <h2 class="text-shadow underline">Keep on<br></h2>
                <h2 id="no-mt" class="text-shadow underline">shining</h2>
                <p>Just like any investment, a beautiful site needs regular maintenance. We want you to get the most out of your site and the easiest way to do that is through our full maintenance and support services. This is the way to guarantee that your site is running at full capacity: backed up, up-to-date, and malware-free.</p>
              </div>

      </div> <!-- .about -->

      <div class="gs-included">
              <div class="gs-included-item-a decor">
                <h5>*</h5>
              </div>

              <div class="gs-included-item-2">
                <h3>Monthly Maintenance Plan</h3>
                <h6> What's Included </h6>
                <ul>
                  <li>- Priority support requests</li>
                  <li>- Daily security and malware scan</li>
                  <li>- Daily uptime monitoring</li>
                  <li>- Weekly Wordpress core updates</li>
                  <li>- Weekly WordPress plugin updates</li>
                  <li>- Weekly secure off-site backups</li>
                  <li>- Monthly maintenance report</li>
                </ul>
								<p>
									<br>
                  <a class="btn pill" href="/bandana-studio/contact/">contact us</a>
                </p>
              </div>
      </div> <!-- .gs-included -->

      <div class="gs-faq">

          <div class="grid-box grid-box-one">
            <h6>Frequently Asked Questions</h6>
          </div>

          <div class="grid-box grid-box-two">
            <div class="grid-int">
              <div class="grid-int-1">
                <p><strong>Do you offer support to sites not created by Bandana Studio?</strong></p>
                <p>We offer support/revisions on a case by case basis. Please send an email to support@bandanastudio.co to see how we can help you out!</p>
              </div>
            </div>
          </div>

          <div class="grid-box grid-box-three">
            <div class="grid-int">
              <div class="grid-int-1">
                <p><strong>Do I <em>really</em> need site maintenance?</strong></p>
                <p>Yes! It is important to keep your site up and running at full capacity. We want your site to help you drive business and to do we need to make sure all cylinders are firing. </p>
              </div>
            </div>
          </div>

          <div class="grid-box grid-box-four">
            <div class="grid-int">
              <div class="grid-int-1">
                <p><strong>I need help! How should I get in touch?</strong></p>
                <p>Email us at support@bandanastudio.co and we will get back to you within 48 hours!</p>
              </div>
            </div>
          </div>

          <div class="grid-box grid-box-five">
            <div class="grid-int">
              <div class="grid-int-1">
                <p><strong>How do I enroll in a monthly maintenance plan?</strong></p>
                <p>Email us at support@bandanastudio.co and we will set you up!</p>
              </div>
            </div>
          </div>

          <div class="grid-box grid-box-six">
            <div class="grid-int">
              <div class="grid-int-1">
                <p><strong>What are your support/revision rates?</strong></p>
                <p>During business hours $80/hr is our standard. Clients on the monthly maintenance plan get at discount of $65/hr.</p>
              </div>
            </div>
          </div>
      </div> <!-- .gs-faq -->

    </div> <!-- .get-started -->

	 </main><!-- #main -->
 </div><!-- #primary -->



<?php
get_footer();
