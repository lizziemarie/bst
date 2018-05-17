<?php
/**
 * The template for displaying the contact page
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
	<main id="main" class="site-main contact-main">

		<?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );


            // End of the loop.
        endwhile;
        ?>

      <div id="break">
      </div>

	 </main><!-- #main -->
 </div><!-- #primary -->



<?php
get_footer();
