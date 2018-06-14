<?php
/**
 * The template for displaying the client welcome page
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
          <img src="<?php echo get_template_directory_uri(); ?>/img/mac-edb.jpg" alt="Bright Office">
        </div>

        <div class="about-item-2">
          <h3>Welcome!</h3>
          <h2 class="text-shadow underline">Time to shine</h2>
          <p>I’m so excited to get started on your project! In the meantime please take a look at the information below that will give us a running start.</p>
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
				</div>
			</div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
