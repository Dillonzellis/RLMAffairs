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

						<div class="div">
							RLM AFFAIRS 3575 McEver Road, Gainesville, GA, 30504, United States 770-536-7306 Resia@RLMAffairs.com
						</div>

						<div class="div">
							Hours Mon 10:00-4:00 Tue 10:00-4:00 Wed 10:00-4:00 Thu 10:00-4:00 Fri 10:00-4:00 Sat 10:00-12:00
						</div>

						<div class="div">
							best of knot
						</div>

						<div class="div">
							SOCIAL LINKS
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

