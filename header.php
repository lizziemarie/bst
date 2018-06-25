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

	<!--animate links-->
	<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bst' ); ?></a>

	<header id="masthead" class="site-header">

		<!-- Front Page Header -->

<?php
		if ( is_home() || is_front_page() ) :
?>
		<input class="full-chk" id="full-menu" type="checkbox" />

		<label class="full-cntr" for="full-menu">
			<span class="full-span"></span>
			<span class="full-span"></span>
			<span class="full-span"></span>
		</label>


		<nav class="full-nav">
			<ul class="full-nav-ul">
				<section class="full-nav-cntr">
					<li>
						<p class="full-nav-p">
							<a class="full-nav-a" href="<?php echo site_url('/case-studies/') ?>">
								<span class="full-nav-hltd">Work</span>
							</a>
						</p>
					</li>
					<li>
						<p class="full-nav-p">
							<a class="full-nav-a" href="/bandana-studio/about/">
								<span class="full-nav-hltd">Info</span>
							</a>
						</p>
					</li>
					<li>
						<p class="full-nav-p">
							<a class="full-nav-a" href="/bandana-studio/contact/">
								<span class="full-nav-hltd">Contact</span>
							</a>
						</p>
					</li>
					<li>
						<p class="full-nav-p">
							<a class="full-nav-a" href="/bandana-studio/startdesign/">
								<span class="full-nav-hltd">Get Started</span>
							</a>
						</p>
					</li>
				</section>
			</ul>
		</nav>

<?php else : ?>

<div class="navigation-other">

<div id="menuToggle-other">

	<input class="full-chk" id="full-menu" type="checkbox" />

	<label class="full-cntr" for="full-menu">
		<span class="full-span"></span>
		<span class="full-span"></span>
		<span class="full-span"></span>
	</label>


	<nav class="full-nav">
		<ul class="full-nav-ul">
			<section class="full-nav-cntr">
				<li>
					<p class="full-nav-p">
						<a class="full-nav-a" href="<?php echo site_url('/case-studies/') ?>">
							<span class="full-nav-hltd">Work</span>
						</a>
					</p>
				</li>
				<li>
					<p class="full-nav-p">
						<a class="full-nav-a" href="/bandana-studio/about/">
							<span class="full-nav-hltd">Info</span>
						</a>
					</p>
				</li>
				<li>
					<p class="full-nav-p">
						<a class="full-nav-a" href="/bandana-studio/contact/">
							<span class="full-nav-hltd">Contact</span>
						</a>
					</p>
				</li>
				<li>
					<p class="full-nav-p">
						<a class="full-nav-a" href="/bandana-studio/startdesign/">
							<span class="full-nav-hltd">Get Started</span>
						</a>
					</p>
				</li>
			</section>
		</ul>
	</nav>
</div>

	<div id="sm-bs-logo">
		<a style="text-decoration:none;" href="<?php echo get_home_url(); ?>">Bandana Studio</a>
	</div>


	<!--Desktop and Tablet TOPNAV-->
	<div class="fp-topnav" id="fp-my-topnav">
		<a style="text-decoration:none;" href="<?php echo site_url('/case-studies/') ?>" id="lg-m1">Work</a>
		<a style="text-decoration:none;" href="/bandana-studio/about/" id="lg-m2">Info</a>
		<a style="text-decoration:none;" href="<?php echo get_home_url(); ?>" id="lg-bs-logo" class="active">Bandana Studio</a>
		<a style="text-decoration:none;" href="/bandana-studio/contact/" id="lg-m3">Contact</a>
		<a style="text-decoration:none;" href="/bandana-studio/startdesign/" id="lg-m4">Get Started</a>
	</div>

</div> <!-- .navigation-other -->

<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
