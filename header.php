<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Fitness-wp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('hidden-bar-wrapper'); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<!-- Start page wrapper -->
<div class="page-wrapper">
 	
	 <!-- Preloader
	 <div class="preloader"></div>
	 -->
	 
	<!-- Main Header-->
	<header class="main-header header-style-one">
		
		<!-- Header Top -->
		<div class="header-top">
			<div class="outer-container">
				<div class="clearfix">
				
					<!-- Top Left -->
					<div class="top-left pull-left">
						<div class="text">Welcome to iron GYM Fitness</div>
					</div>
					
					<!-- Top Right -->
					<div class="top-right pull-right">
					
						<!-- Info List -->
						<ul class="info-list">
							<li><span class="icon fa fa-location-arrow"></span> 27 Division St, New York, USA</li>
							<li><span class="icon fa fa-phone"></span> <a href="tel:+1-044-123-456-789"> +1 (044) 123 456 789</a></li>
							<li><span class="icon fa fa-envelope-o"></span> <a href="mailto:info@example.com"> info@example.com</a></li>
						</ul>
						
						<!--Language-->
						<div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon fa fa-globe"></span>EN &nbsp;<span class="icon fa fa-angle-down"></span></a>
							<ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
								<li><a href="#">English</a></li>
								<li><a href="#">German</a></li>
								<li><a href="#">Arabic</a></li>
								<li><a href="#">Hindi</a></li>
							</ul>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Header Upper -->
		<div class="header-upper">
			<div class="outer-container clearfix">
				
				<div class="pull-left logo-box">
					<div class="logo"><a href="index.html"><img src="https://via.placeholder.com/230x100" alt="" title=""></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="current dropdown"><a href="#">Home</a>
									<ul>
										<li><a href="index.html">Home Page 01</a></li>
										<li><a href="index-2.html">Home Page 02</a></li>
										<li><a href="index-3.html">Home Page 03</a></li>
										<li class="dropdown"><a href="#">Header Styles</a>
											<ul>
												<li><a href="index.html">Header Style 01</a></li>
												<li><a href="index-2.html">Header Style 02</a></li>
												<li><a href="index-3.html">Header Style 03</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">About</a>
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="price.html">Price</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="time-table.html">Time Table</a></li>
										<li><a href="testimonial.html">Testimonial</a></li>
										<li><a href="comming-soon.html">Comming Soon</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Classes</a>
									<ul>
										<li><a href="classes.html">Classes</a></li>
										<li><a href="classes-detail.html">Classes Detail</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Portfolio</a>
									<ul>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="portfolio-detail.html">Portfolio Detail</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Shop</a>
									<ul>
										<li><a href="shop.html">Our Products</a></li>
										<li><a href="shop-single.html">Product Single</a></li>
										<li><a href="shopping-cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="account.html">Account</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog</a>
									<ul>
										<li><a href="blog.html">Our Blog</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
										<li><a href="not-found.html">Not Found</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
					
						<!-- Cart Box -->
						<div class="cart-box">
							<div class="dropdown">
								<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
								<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="https://via.placeholder.com/70x70" alt="" /></div>
											<h3><a href="shop-single.html">Flying Ninja</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="https://via.placeholder.com/70x70" alt="" /></div>
											<h3><a href="shop-single.html">Patient Ninja</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-total">Sub Total: <span>$198</span></div>
									<ul class="btns-boxed">
										<li><a href="shoping-cart.html">View Cart</a></li>
										<li><a href="checkout.html">CheckOut</a></li>
									</ul>

								</div>
							</div>
						</div>
						
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
							
					</div>
				</div>
				
			</div>
		</div>
		<!--End Header Upper-->
		
		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container clearfix">
				<!--Logo-->
				<div class="logo pull-left">
					<a href="index.html" title=""><img src="https://via.placeholder.com/125x55" alt="" title=""></a>
				</div>
				<!--Right Col-->
				<div class="pull-right">
					<!-- Main Menu -->
					<nav class="main-menu">
						<!--Keep This Empty / Menu will come through Javascript-->
					</nav><!-- Main Menu End-->
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
					
						<!-- Cart Box -->
						<div class="cart-box">
							<div class="dropdown">
								<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
								<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="https://via.placeholder.com/70x70" alt="" /></div>
											<h3><a href="shop-single.html">Flying Ninja</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-product">
										<div class="inner">
											<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
											<div class="image"><img src="https://via.placeholder.com/70x70" alt="" /></div>
											<h3><a href="shop-single.html">Patient Ninja</a></h3>
											<div class="quantity-text">Quantity 1</div>
											<div class="price">$99.00</div>
										</div>
									</div>
									<div class="cart-total">Sub Total: <span>$198</span></div>
									<ul class="btns-boxed">
										<li><a href="shoping-cart.html">View Cart</a></li>
										<li><a href="checkout.html">CheckOut</a></li>
									</ul>

								</div>
							</div>
						</div>
						
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
						
					</div>
					
				</div>
			</div>
		</div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-multiply"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="https://via.placeholder.com/175x100" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div><!-- End Mobile Menu -->

	</header>
	<!-- End Main Header -->

<?php /*
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
*/
?>