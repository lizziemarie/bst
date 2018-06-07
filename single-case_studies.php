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
    <div class="project">
      <?php while ( have_posts() ) : the_post();
        $client_website = get_field('client_website');
        $content_title = get_field('content_title');
        $client_testimonial = get_field('client_testimonial');
        $client_url = get_field('client_url');
        $site_image = get_field('site_image');
        $size = "full"; ?>

        <article class="case-study">
                  <div class="case-study-info">
                    <h6><?php the_title(); ?></h6>
                    <p id="client-site"><em>Website: </em><h3 id="client-site"><strong><?php echo $client_website; ?></strong></h3>
                    <hr></hr>
                    <h3><strong><?php echo $content_title; ?></strong></h3>
                    <p><?php echo $client_testimonial; ?></p>
                    <p>
                        <a class="btn-large pill-large" href="<?php echo $client_url; ?>" target="_blank"><em>See the website: </em><br><strong><?php echo $client_website; ?></strong></a>
                    </p>
                    <hr id="space-hr"></hr>
                  </div>

                  <div class="case-study-image">
                      <?php if($site_image) {
                        echo wp_get_attachment_image( $site_image, $size );
                      } ?>
                  </div>

                  <div class="view-work-button">
                    <p>
                      <a class="btn pill" href="/bandana-studio/case-studies">view all work</a>
                    </p>
                  </div> <!-- .view-work-button -->
        </article>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- .project -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
