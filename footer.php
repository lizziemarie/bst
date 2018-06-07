<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bst
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div id="footer-ig-sidebar" class="secondary">
			<div id="footer-ig-sidebar">
			<?php
			if(is_active_sidebar('sidebar-1')){
			dynamic_sidebar('sidebar-1');
			}
			?>
			</div>
		</div>

		<div class="site-info">
			<div id="footer-menu">
					<h3>Services</h3>
					<ul>
						<li>
							<a href="/bandana-studio/case-studies/">Work</a>
						</li>
						<li>
							<a href="/bandana-studio/startdesign/">Design & Branding</a>
						</li>
						<li>
							<a href="/bandana-studio/sitemaintenance/">Site Maintenance</a>
						</li>
					</ul>

					<h3>Support</h3>
					<ul>
						<li>
							<a href="/bandana-studio/contact/">Contact</a>
						</li>
						<li>
							<a href="/bandana-studio/startdesign#gs-faq-section">FAQ</a>
						</li>
					</ul>

					<h3>Bandana Studio</h3>
					<ul>
						<li>
							<a href="/bandana-studio/about/">Info</a>
						</li>
						<li>
							<a href="/bandana-studio/about/">Terms & Conditions</a>
						</li>
						<li>
							<a href="/bandana-studio/about/">Privacy Policy</a>
						</li>
					</ul>
		</div>
		<div id="footer-social">
			<div class="f-s-i">
					<a href="#">
						<img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/fb-bs.png" alt="Facebook Link">
					</a>
			</div>
			<div class="f-s-i">
					<a href="#">
						<img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/be-bs.png" alt="Behance Link">
					</a>
			</div>
			<div class="f-s-i">
					<a href="#">
						<img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/dr-bs.png" alt="Dribbble Link">
					</a>
			</div>
			<div class="f-s-i">
					<a href="#">
						<img src="http://localhost:8888/bandana-studio/wp-content/uploads/2018/05/ig-bs.png" alt="Instagram Link">
					</a>
			</div>
		</div>

		<div id="site-cr">
			&copy 2018 Bandana Studio<br>Designed by Bandana Studio
		</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
