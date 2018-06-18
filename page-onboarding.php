<?php
/**
 * The template for displaying the client onboarding page
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
          <img src="<?php echo get_template_directory_uri(); ?>/img/loft-bonvoyage.jpg" alt="Loft Office">
        </div>

        <div class="about-item-2">
          <h3>Hi There!</h3>
          <h2 class="text-shadow underline">Welcome</h2>
          <p>Thanks a bunch for getting in touch. Below you’ll find more information on working together, including:</p>

                <p>- A detailed look at my design process
                <br>- Pricing & packages
                <br>- How we will communicate during the project
                <br>- Timelines
                <br>- What I’ll need from you before the project begins
                <br>- Frequently asked questions
            <br>
            <br>After you’ve had a look, <a href="https://calendly.com/lizziemariew/30min/06-11-2018" target="_blank" style="color: #B66E60;"> head this way to schedule a free design consultation.</a></p>
        </div>


      </div> <!-- .about -->

      <div class="full-page client-resources">
				<div class="full-page-content">
				<?php
		        // Start the loop.
		        while ( have_posts() ) : the_post();

		            // Include the page content template.
		            get_template_part( 'template-parts/content', 'page' );


		            // End of the loop.
		        endwhile;
		        ?>
            <div class="button-cta">
              <a class="btn-cta pill-cta" href="https://calendly.com/lizziemariew/30min/06-11-2018" target="_blank">Book Your Free Consulation</a>
            </div>
				</div>
			</div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
