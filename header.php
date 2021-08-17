<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Josefin+Sans&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">

		<div class="nav-wrapper home">
			<nav class="navbar navbar-expand-lg container">

				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/RLMAffairs-Logo.png" alt="logo" srcset="">
				</a>


				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars fa-2x"></i>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Event Planner<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo esc_url( home_url( '/estate-room-gardens/' ) ); ?>">Venue</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo esc_url( home_url( '/rlm-florist/' ) ); ?>">RLM Florist</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo esc_url( home_url( '/catering-menu/' ) ); ?>">Catering Menu</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
