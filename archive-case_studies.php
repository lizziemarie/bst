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
  <main id="main" class="site-main work-main">
      <div class="work">
        <h6>Work</h6>

      <?php while ( have_posts() ) : the_post();
          $site_image = get_field('site_image');
          $size = 'full';?>

            <div class="case-study-images ">
                    <a href="<?php the_permalink(); ?>">
                      <?php if($site_image) {
                      echo wp_get_attachment_image( $site_image, $size );
                      } ?>
                    </a>
            </div>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- .work -->

    <div class="break">
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
