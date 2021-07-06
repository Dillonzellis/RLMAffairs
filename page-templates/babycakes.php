<?php
/**
 * Template Name: Babycakes Template
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('clean');
?>

<div class="container">
    <div class="row justify-content-center mb-5">
        <a href="https://rlmflorist.com/product-category/babycakes/babycakes-cupcakes/" target="_blank" ><button class="btn">CLICK TO ORDER BABYCAKES ONLINE</button></a>
    </div>
</div>

<hr class="mb-5">

<div class="container">
    <div class="row justify-content-center">
        <p>BabyCakes specializes in hand crafted cupcakes. We make everything fresh from scratch in small batches throughout the day using the finest ingredients, including sweet cream butter, Vanilla bean, bittersweet Belgian chocolate, fresh zucchini and carrots.</p>
    </div>

    <div class="row justify-content-center">
        <img class ="mb-5" src="<?php echo get_template_directory_uri(); ?>/img/IMG_8095.jpg" alt="" srcset="">
    </div>
</div>


<?php get_footer();
