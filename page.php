<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bst
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="full-page">
				<div class="full-page-header">
					<h6><?php the_title(); ?></h6>
				</div>
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
