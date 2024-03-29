`<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after
	 *
	 * @package UnderStrap
	 */

	// Exit if accessed directly.
	defined('ABSPATH') || exit;

	$container = get_theme_mod('understrap_container_type');
	?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr($container); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info">
						<div class="row justify-content-center">
							<div class="footer-link">
								<a href="https://www.rlmaffairs.com/">
									RLM AFFAIRS
								</a>
							</div>
							<div class="footer-link">
								<a href="http://maps.google.com/?q=3575 McEver Road, Gainesville, GA, 30504, United States" target="_blank" rel="noopener noreferrer">
									3575 McEver Road, Gainesville, GA, 30504, United States
								</a>
							</div>
							<div class="footer-link">
								<a href="tel:+770-536-7306">
									770-536-7306
								</a>
							</div>
							<div class="footer-link">
								<a href="mailto:Weddings@RLMAffairs.com">
									Weddings@RLMAffairs.com
								</a>
							</div>
						</div>

						<div class="row justify-content-center align-items-center">
							<div class="footer-link">
								Hours by Appointment Only
							</div>
							<!-- <div class="footer-link hours">
								Tue 10:00-4:00
							</div>
							<div class="footer-link hours">
								Wed 10:00-4:00
							</div>
							<div class="footer-link hours">
								Thu 10:00-4:00
							</div>
							<div class="footer-link hours">
								Fri 10:00-4:00
							</div> -->
						</div>

						<div class="knot-holder flex-center" style="gap:1rem; flex-wrap:wrap">
							<div class="knot-img">
								<a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225">
									<img src="https://rlmaffairs.com/wp-content/uploads/2023/01/knot-2020.png" alt="" srcset="">
								</a>
							</div>
							<div class="knot-img">
								<a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225">
									<img src="https://rlmaffairs.com/wp-content/uploads/2023/01/knot2021.png" alt="" srcset="">
								</a>
							</div>
							<div class="knot-img">
								<a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225">
									<img src="https://rlmaffairs.com/wp-content/uploads/2023/01/knot2022.webp" alt="" srcset="">
								</a>
							</div>
							<div class="knot-img">
								<a href="https://www.weddingwire.com/biz/rlm-affairs-gainesville/8de930e8de8e48d0.html">
									<img style="border-radius:7px" src="https://rlmaffairs.com/wp-content/uploads/2023/01/wedding-wire-2023.png" alt="" srcset="">
								</a>
							</div>

						</div>

						<div class="social-holder flex-center">

							<div class="social pr-4">
								<a href="https://www.facebook.com/rlmaffairs/" target="_blank" rel="noopener noreferrer"><img class="fb" src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="" srcset=""></a>
							</div>
							<div class="social">
								<a href="https://www.instagram.com/rlmaffairs/" target="_blank" rel="noopener noreferrer"><img class="fb" src="<?php echo get_template_directory_uri(); ?>/img/ig.png" alt="" srcset=""></a>
							</div>
						</div>

					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>