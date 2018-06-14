<?php
/**
 * The template for displaying the client library page
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
          <img src="<?php echo get_template_directory_uri(); ?>/img/laptop-relax.jpg" alt="Laptop Design">
        </div>

        <div class="about-item-2">
          <h3>Tutorials & Resources</h3>
          <h2 class="text-shadow underline">Client Library</h2>
          <p>Below I have curated a list of tutorials and resources for you to move forward with your website and brand. </p>
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
