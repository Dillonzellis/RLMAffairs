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

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="site-info">
							<!-- <div class="row mb-3 ml-5 mr-5">
								<div class="col-2 center">
									RLM AFFAIRS
								</div>
								<div class="col-5 center">
									3575 McEver Road, Gainesville, GA, 30504, United States
								</div>
								<div class="col-2 center">
									770-536-7306
								</div>
								<div class="col-2 center">
									Resia@RLMAffairs.com
								</div>
							</div> -->

							<div class="row justify-content-center">
								<div class="footer-link">
									RLM AFFAIRS
								</div>
								<div class="footer-link">
									3575 McEver Road, Gainesville, GA, 30504, United States
								</div>
								<div class="footer-link">
									770-536-7306
								</div>
								<div class="footer-link">
									Resia@RLMAffairs.com
								</div>
							</div>

						<div class="row justify-content-center align-items-center">
							<div class="footer-link">
								Hours
							</div>
							<div class="footer-link hours">
								Mon 10:00-4:00
							</div>
							<div class="footer-link hours">
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
							</div>
							<div class="footer-link hours">
								Sat 10:00-12:00
							</div>
						</div>

						<div class="knot-holder flex-center">
							<div class="knot-img pr-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2020.jpg" alt=""
									srcset="">
							</div>
							<div class="knot-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2021.jpg" alt=""
									srcset="">
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
