<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bst
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900|Playfair+Display:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bst' ); ?></a>

	<header id="masthead" class="site-header">

		<!-- NEW HEADER  -->
		<!-- First if is for homepage/frontpage ham nav-->

		<?php
		if ( is_home() || is_front_page() ) :
			 ?>
		<nav role="navigation" class="navigation-front">
  		<div id="menuToggle">
			    <!--
			    A fake / hidden checkbox is used as click reciever,
			    so you can use the :checked selector on it.
			    -->
			    <input type="checkbox" />

			    <!--
			    Some spans to act as a hamburger.
			    -->
			  	<span></span>
			    <span></span>

					<a href="#">
						<img class="front-ham-nav" src="<?php echo get_template_directory_uri(); ?>/img/light-ham-nav.png" alt="Nav Menu">
					</a>

			    <!--
			    Too bad the menu has to be inside of the button
			    but hey, it's pure CSS magic.
			    -->
			    <ul id="menu">
			      <a style="text-decoration:none;"href="/bandana-studio/work/"><li>Work</li></a>
			      <a style="text-decoration:none;"href="/bandana-studio/about/"><li>Info</li></a>
			      <a style="text-decoration:none;"href="/bandana-studio/contact/"><li>Contact</li></a>
			      <a style="text-decoration:none;"href="/bandana-studio/startdesign/"><li>Get Started</li></a>
			    </ul>
  		</div>
		</nav>


			<?php
		else :
			?>

			<!--Else is for all other pages with ham nav and site name or site name and full menu on bigger screens-->

			<nav role="navigation" class="navigation-other">
	  			<div id="menuToggle-other">
				    <!--
				    A fake / hidden checkbox is used as click reciever,
				    so you can use the :checked selector on it.
				    -->
				    <input type="checkbox" />

				    <!--
				    Some spans to act as a hamburger.
				    -->
				  	<span></span>
				    <span></span>

						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/dark-ham-nav.png" alt="Nav Menu">
						</a>

				    <!--
				    Too bad the menu has to be inside of the button
				    but hey, it's pure CSS magic.
				    -->
				    <ul id="menu">
				      <a style="text-decoration:none;"href="/bandana-studio/work/"><li>Work</li></a>
				      <a style="text-decoration:none;"href="/bandana-studio/about/"><li>Info</li></a>
				      <a style="text-decoration:none;"href="/bandana-studio/contact/"><li>Contact</li></a>
				      <a style="text-decoration:none;"href="/bandana-studio/startdesign/"><li>Get Started</li></a>
				    </ul>
	  		</div>
				<div id="sm-bs-logo">
					<a style="text-decoration:none;" href="<?php echo get_home_url(); ?>">Bandana Studio</a>
				</div>


				<!--FP TOPNAV-->
				<div class="fp-topnav" id="fp-my-topnav">
				  <a style="text-decoration:none;" href="/bandana-studio/work/" id="lg-m1">Work</a>
				  <a style="text-decoration:none;" href="/bandana-studio/about/" id="lg-m2">Info</a>
					<a style="text-decoration:none;" href="<?php echo get_home_url(); ?>" id="lg-bs-logo" class="active">Bandana Studio</a>
				  <a style="text-decoration:none;" href="/bandana-studio/contact/" id="lg-m3">Contact</a>
				  <a style="text-decoration:none;" href="/bandana-studio/startdesign/" id="lg-m4">Get Started</a>
				</div>

		</nav>


		<?php endif; ?>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
