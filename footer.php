<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- Main Footer -->
<footer class="main-footer" style="background-image:url(https://via.placeholder.com/1920x650)">
	<div class="auto-container">
		<!-- Widgets Section -->
		<div class="widgets-section">
			<div class="row clearfix">
				
				<!-- Big Column -->
				<div class="big-column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">
						
						<!--Footer Column-->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="index.html"><img src="https://via.placeholder.com/205x65" alt="" /></a>
								</div>
								<div class="text">Powerlift is a champ in providing its users with absolutely everything a fitness or gym site needs. consectetur adipiscing elit. Suspendisse interdum nulla eu posuere scelerisque.</div>
								<div class="social-links">
									<span>Follow on Socials </span>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-instagram"></a>
									<a href="#" class="fa fa-linkedin"></a>
								</div>
							</div>
						</div>
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget news-widget">
								<h4>Latest Posts</h4>
								<!-- Footer Column -->
								<div class="widget-content">
									<div class="post">
										<div class="thumb"><a href="blog-single.html"><img src="https://via.placeholder.com/100x100" alt=""></a></div>
										<h5><a href="blog-single.html">Your Future is Created by What You Do Today</a></h5>
										<span class="date">JUNE 21, 2020</span>
									</div>

									<div class="post">
										<div class="thumb"><a href="blog-single.html"><img src="https://via.placeholder.com/100x100" alt=""></a></div>
										<h5><a href="blog-single.html">How to Maximise Time Spent at The GYM.</a></h5>
										<span class="date">JUNE 21, 2019</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Big Column -->
				<div class="big-column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget links-widget">
								<h4>Our Services</h4>
								<ul class="list-link">
									<li><a href="">Fat Burn</a></li>
									<li><a href="">Streching</a></li>
									<li><a href="">Weight Loss</a></li>
									<li><a href="">Self Defense</a></li>
									<li><a href="">Body Building</a></li>
									<li><a href="">Psycho Trainning</a></li>
									<li><a href="">Strength Trainning</a></li>
								</ul>
							</div>
						</div>
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget timing-widget">
								<h4>Working Hours</h4>
								<ul>
									<li>Monday – Friday:<span>07:00 – 21:00</span></li>
									<li>Saturday:<span>07:00 – 16:00</span></li>
									<li>Sunday Closed</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="copyright">Copyright 2020 Theme by expertthemes</div>
		</div>
	
	</div>
</footer>

<?php /*
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
*/
?>

<?php wp_footer(); ?>

</body>

</html>

