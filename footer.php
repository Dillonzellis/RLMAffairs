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

						<div class="container">
							<div class="row pb-3">
								<div class="col center">
									RLM AFFAIRS
								</div>
								<div class="col center">
									770-536-7306
								</div>
								<div class="col center">
									Resia@RLMAffairs.com
								</div>
							</div>
						</div>

						<div class="row pb-3">
							<div class="col center">
								3575 McEver Road, Gainesville, GA, 30504, United States
							</div>
						</div>

						<div class="row pb-4">
							<div class="col">
								Hours
							</div>
							<div class="col">
								Mon 10:00-4:00
							</div>
							<div class="col">
								Tue 10:00-4:00
							</div>
							<div class="col">
								Wed 10:00-4:00
							</div>
							<div class="col">
								Thu 10:00-4:00
							</div>
							<div class="col">
								Fri 10:00-4:00
							</div>
							<div class="col">
								Sat 10:00-12:00
							</div>
						</div>


						<!-- <div class="row">
							<div class="col center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2020.jpg" alt=""
									srcset="">
							</div>
							<div class="col center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2021.jpg" alt=""
									srcset="">
							</div> -->
						<!-- </div> -->

						<div class="knot-holder center">
							<div class="knot-img pr-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2020.jpg" alt=""
									srcset="">
							</div>
							<div class="knot-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/knot2021.jpg" alt=""
									srcset="">
							</div>
						</div>

						<div class="social-holder center">
							<div class="social pr-4">
								<i class="fab fa-facebook-f"></i>
							</div>
							<div class="social">
								<i class="fab fa-instagram"></i>
							</div>
						</div>


					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
