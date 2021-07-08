<?php
/**
 * Template Name: Florist Template
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container">
    <div class="row justify-content-center mb-5">
        <a href="https://rlmflorist.com/" target="_blank" ><button class="btn">CLICK FOR FLORIST-ORDER FLOWERS NOW</button></a>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <img class ="mb-5" src="<?php echo get_template_directory_uri(); ?>/img/fl-image.jpg" alt="" srcset="">
    </div>
</div>

<hr class="mb-5">

<div class="container">
    <div class="row justify-content-center">
        <h2>Floral Showroom</h2>
        <p class="text-align-center">Fresh Florals: RLM Affairs  is a full-service florist serving North  Georgia for 40 years. Our award winning designers offer exquisite attention to detail. Whether it’s a single rose or decor for an entire Gala every bloom is hand picked and sourced eco friendly. Our retail storefront offers modern & unique items keeping everyone in mind.</p>
    </div>
    <div class="row justify-content-center">
        <img class ="floral-image" src="<?php echo get_template_directory_uri(); ?>/img/fl-1.jpg" alt="" srcset="">
        <img class ="floral-image" src="<?php echo get_template_directory_uri(); ?>/img/fl-2.jpg" alt="" srcset="">
    </div>
</div>


<?php get_footer();
