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

    <?php while ( have_posts() ) : the_post();
      $client_website = get_field('client_website');
      $client_testimonial = get_field('client_testimonial');
      $site_image = get_field('site_image');
      $size = "full"; ?>

      <article class="case-study">
            <aside class="case-study-sidebar">
                <h6><?php the_title(); ?></h6>
                <p><em>Website:</em><?php echo $client_website; ?></p>
                <div class="underline">
                </div>
                <h3>From the Client:</h3>
                <p><?php echo $client_testimonial; ?></p>

                <div class="case-study-button">
                    <p>
                      <a class="btn-large large-pill" href="<?php echo $client_website; ?>"><em>See the website: </em><br><h3><?php echo $client_website; ?></h3></a>
                    </p>
                </div>

            </aside>


            <div class="case-study-images">
                <?php if($site_image) {
                  echo wp_get_attachment_image( $site_image, $size );
                } ?>

            </div>

      </article>

    <?php endwhile; // end of the loop. ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
