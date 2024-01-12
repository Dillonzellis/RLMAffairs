<?php

/**
 * Template Name: Venue
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<style>
.flex-col{
	display: flex;
	flex-direction: column;
}

@media(min-width:768px){
	.flex-col{
		flex-direction: row;
	}
}
</style>

<div class="container">
	<div class="row align-items-center justify-content-center mb-5">

		<h1>RLM Affairs Estate Room & Gardens</h1>

		<div class="btn-wrapper flex-right">
			<a href="https://hello.dubsado.com/public/form/view/5afe45144f411345f6129204" target="_blank" rel="noopener noreferrer"><button class="btn">
				BOOK A TOUR
			</button></a>
		</div>
	</div>
</div>



<div class="package-header-container mb-5">
	<div class="package-heading-wrapper">
		<h2>ESTATE ROOM & GARDEN PACKAGES</h2>
		<div>Venue Free With Any Package</div>
	</div>
</div>

<hr class="mb-5">

<div class="container">
	<div class="row align-items-center mb-5">
		<div class="col-md-2 flex-center">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/venue-rlm-logo.jpg" alt="" srcset="" loading="lazy">
		</div>

		<div class="col-md-10 flex-center">
			<p>
				RLM Affairs offers all the services you may need for your event. Our staff works directly with our
				clients to tailor each event to your specific needs. Whether you need just catering, or a complete event
				design, we will work with you as much as you need, or we will provide you with A la carte services based
				specifically on your needs and budget. Our award winning catering, wedding planning, cakes, and floral
				design are available every day, breakfast, lunch, dinner, or in between.
			</p>
		</div>
	</div>
</div>

<hr class="mb-5">

<section class="venue-feats-container">
	<h3 class="venue-feats-header">Venue Features</h3>

	<div id="mobile-slideshow">
		<div class="m-slide">
			<div class="m-slide-text">Donut Wall & Victorian Donut Ladder</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-donut-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Champagne Wall</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-champ-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Food Service Bar</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slide2a.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Built in Bar</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-bar-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Outdoor Pew Seating</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slide3a.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">DJ Station</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-dj-station.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Vintage Wood Tables & Chairs</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-tables-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Dance Floor</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-dance-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Private Dressing Rooms</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-suite-1.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Dressing Suite & Separate Bath</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-suite-2.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Outdoor Patio Space</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-patio-slide.jpg" alt="" loading="lazy">
		</div>
		<div class="m-slide">
			<div class="m-slide-text">Photo Wall</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/mini-photo-wall.jpg" alt="" loading="lazy">
		</div>

	</div>

	<div id="slideshow">
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Donut Wall & Victorian Donut Ladder</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide1a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">Champagne Wall</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide1b.jpg" alt="">
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Built in Food Service Bar</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide2a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">Built in Bar</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide2b.jpg" alt="">
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Outdoor Pew Seating</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide3a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">DJ Station</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide3b.jpg" alt="">
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Vintage Wood Tables & Folding Chairs</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide4a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">Dance Floor</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide4b.jpg" alt="">
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Private Dressing Rooms</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide5a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">Dressing Suite Separate Bath & Entrance</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide5b.jpg" alt="">
			</div>
		</div>
		<div class="slide">
			<div class="slide-inner">
				<div class="slide-text">Outdoor Patio Space</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide6a.jpg" alt="">
			</div>
			<div class="slide-inner">
				<div class="slide-text">Photo Wall</div>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/slide6b.jpg" alt="">
			</div>
		</div>
	</div>

</section>



<section class="venue-feats-container">
	<hr>
	<div class="feats-sub-header">
		Wedding Packages
	</div>
	<hr>
</section>


<div class="container" style="margin-top: 2rem">
	<div class="row">
		<div class="col package-header">
			Sapphire Wedding Package: $3800.00
		</div>
	</div>

	<ul>
		<li>50 Guests</li>
		<li>6 hour Venue Rental Included</li>
		<li>Reception Décor: Silk Greens & Organza</li>
		<li>Ceremony Décor: organza draping</li>
		<li>Wedding Party: flower girl petals Bride bouquet & 3 bridesmaids Groom & 3 groomsmen boutonnières</li>
		<li>One entrée buffet with 2 side dishes and bread Or Heavy Hors d’Oeuvres with 3 choices</li>
		<li>Tea and Water beverages</li>
		<li>Disposable Flatware Glasses and Paper Napkins</li>
		<li>2 tier Cake with Cake stand, Staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced
		</li>
		<li>Staff for event 4 hours</li>
		<li>Rehearsal Day of Event</li>
		<li><em>Monday - Thursday: $3600.00</em></li>
	</ul>

	<div class="row">
		<div class="col package-header">
			Emerald Wedding Package: $4800.00
		</div>
	</div>

	<ul>
		<li>60 Guests</li>
		<li>7 hour Venue Rental Included</li>
		<li>Reception Décor: Silk Greens & Organza entry table decor</li>
		<li>Ceremony Décor: Organza draping with optional greens</li>
		<li>Bride bouquet & 3 bridesmaids and flower girl petals Groom & 3 groomsmen boutonnières</li>
		<li>Cocktail hour 2 Hors d’Oeuvres</li>
		<li>1 entrée buffet, salad, rolls, 2 side dishes</li>
		<li>Tea and water beverages With display Decanters</li>
		<li>Silver flatware glasses charger and plates with signature paper napkins</li>
		<li>2 tier cake with Cake stand Staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced
		</li>
		<li>Staff for event 4 hours</li>
		<li>Day of Coordinator: Wedding Ceremony Coordination/ Dinner service/ Cake Cutting</li>
		<li>Rehearsal Day of Event</li>
		<li><em>Monday - Thursday: $4500.00</em></li>
	</ul>

	<div class="row">
		<div class="col package-header">
			Ruby Wedding Package: $6400.00
		</div>
	</div>

	<ul>
		<li>70 Guests</li>
		<li>9 hour Venue Rental Included</li>
		<li>Ceremony Décor: Organza draping with Florals & with aisle pew decor</li>
		<li>Reception Décor: Lanterns, Greens, Organza, and entry table, mantle florals</li>
		<li>Bride bouquet & 3 bridesmaids and flower girl petals Groom & 3 groomsmen boutonnières </li>
		<li>Catering: Cocktail hour 3 Hors d’Oeuvres 2 entrée buffet, signature salad, dinner rolls, 2 side dishes </li>
		<li>Beverages Displayed in Elegant Decanters: Tea and water beverages </li>
		<li>Silver or Gold flatware, Goblets and Dinner Plates</li>
		<li>3 tier cake with Cake stand, staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced
		</li>
		<li>Photo Booth Wall</li>
		<li>Staff for event 6 hours</li>
		<li>Day of Coordinator: Wedding Ceremony Coordination/Dinner service/ Toasts/ Cake Cutting</li>
		<li>Rehearsal with coordinator </li>
		<li>Clean up</li>
		<li><em>Monday- Thursday: $6000.00</em></li>
	</ul>

	<div class="row">
		<div class="col package-header">
			Diamond Wedding Package: $8400.00
		</div>
	</div>

	<ul>
		<li>75 Guests</li>
		<li>10 hour Venue Rental Included</li>
		<li>Ceremony Décor: Organza draping with Florals & with aisle pew decor</li>
		<li>Reception Décor: Floral Centerpieces flowers for food display & reception </li>
		<li>Bride bouquet & 5 bridesmaids and flower girl petals Groom & 5 groomsmen boutonnières </li>
		<li>3 Corsages (Moms Grandmothers Etc.) 3 Boutioneres (Fathers Grandfathers Etc)</li>
		<li>Catering: Cocktail hour 3 Hors d’Oeuvres 2 entrée buffet, signature salad, diner rolls, 2 side dishes </li>
		<li>Beverages Displayed in Elegant Decanters: Tea and water beverages </li>
		<li>Silver or Gold flatware, Goblets and Dinner Plates with Linen Napkins. White or cream linens for seating
			tables </li>
		<li>3 tier cake with Cake stand, staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced
		</li>
		<li>Staff for event 6 hours</li>
		<li>Full wedding Coordination service</li>
		<li>Photo Booth Wall</li>
		<li>Day of Coordinator: Wedding Ceremony Coordination/ Dances /Dinner Service /Toasts/ Cake Cutting/ Send off
		</li>
		<li>Rehearsal with coordinator </li>
		<li>Full set up & Clean up</li>
		<li><em>Monday - Thursday: $8100.00</em></li>
	</ul>

	<div class="row">
		<div class="col package-header">
			Micro Wedding Package: $3300.00 Monday - Thursday
		</div>
	</div>

	<ul>
		<li>25 Guests:</li>
		<li>4 hour Venue Rental included</li>
		<li>Ceremony Décor: organza draping</li>
		<li>Bride bouquet & Groom boutonnière</li>
		<li>Set Up & display of couples personal items</li>
		<li>One entrée buffet with 2 side dishes and bread Or Heavy Hors d’Oeuvres with 3 choices</li>
		<li>Tea and Water beverages</li>
		<li>Disposable Flatware Glasses and Paper Napkins</li>
		<li>2 tier Cake with stand, Staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced</li>
		<li>Staff for event 2 hours</li>
	</ul>



	<div class="row">
		<div class="col package-header">
			Wedding Reception Only: $3500.00
		</div>
	</div>

	<ul>
		<li>50 Guests</li>
		<li>Venue Rental Included 4 hours</li>
		<li>Reception tables & chairs</li>
		<li>1 Entree 2 sides dinner roll & salad</li>
		<li>Set Up & clean up</li>
		<li>Beverages Displayed in Decanters: Tea and water beverages </li>
		<li>Disposable service with signature paper napkins</li>
		<li>2 tier cake with Cake stand Vanilla or Chocolate, Rough, Smooth or Naked iced</li>
		<li>Staff for event 4 hours</li>
	</ul>

	<section class="venue-feats-container">
		<hr>
		<div class="feats-sub-header">
			Event Packages
		</div>
		<hr>
	</section>

	<div class="row">
		<div class="col package-header">
			Premier Event Package: $3500.00
		</div>
	</div>

	<ul>
		<li>50 Guests:</li>
		<li>6 hour Venue Rental included</li>
		<li>Event Décor: greens and lanterns </li>
		<li>Set Up & display of your personal items</li>
		<li>One entrée buffet with 2 side dishes and bread Or Heavy Hors d’Oeuvres with 3 choices</li>
		<li>Beverages Displayed in Elegant Decanters: Tea and water beverages </li>
		<li>Disposable Flatware Glasses and Paper Napkins</li>
		<li>2 tier Cake for dessert with stand, Staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced</li>
		<li>Staff for event 4 hours</li>
		<li>You may add additional guests for $32.00 a person</li>
		<li><em>Monday - Thursday: $3400.00</em></li>
	</ul>


	<div class="row">
		<div class="col package-header">
			Elegant Event Package: $6000.00
		</div>
	</div>

	<ul>
		<li>65 Guests:</li>
		<li>9 hour Venue Rental Included</li>
		<li>Set Up & display of your personal items</li>
		<li>Event Décor: table runners, greens and lanterns for tables, flowers for entry table and mantle</li>
		<li>Catering: Cocktail hour 2 Hors d’Oeuvres 2 entrée buffet, signature salad, diner rolls, 2 side dishes</li>
		<li>Beverages Displayed in Elegant Decanters: Tea and water beverages </li>
		<li>Charger, Silver flatware, Goblets and Dinner Plates with Napkins</li>
		<li>3 tier cake with stand, staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced</li>
		<li>Staff for event 6 hours </li>
		<li>You may add additional guests for $42.00 a person</li>
		<li><em>Monday- Thursday: $5700.00</em></li>
	</ul>

	<div class="row">
		<div class="col package-header">
			Exquisite Event Package: $8000.00
		</div>
	</div>

	<ul>
		<li>75 guests </li>
		<li>10 hour Venue Rental Included</li>
		<li>Set Up & display of your personal items</li>
		<li>Event Décor: table runners, greens & lanterns with florals for tables, florals for food display, mantle & entry table</li>
		<li>Catering: Cocktail hour 3 Hors d’Oeuvres Dinner 2 entrée buffet, signature salad, diner rolls, 2 side dishes</li>
		<li>Beverages Displayed in Elegant Decanters: Tea and water beverages </li>
		<li>Charger,Silver or Gold flatware, Goblets and Dinner Plates with Napkins</li>
		<li>3 tier cake with stand, staff will cut & serve cake Vanilla or Chocolate, Rough, Smooth or Naked iced</li>
		<li>Staff for event 6 hours </li>
		<li>You may add additional guests for $48.00 a person</li>
		<li>Photo Booth Wall</li>
		<li>Day of Coordinator: Timeline /Dinner Service /Toasts / Cake Cutting/ Etc.</li>
		<li><em>Monday- Thursday: $7800.00</em></li>
	</ul>

	<div class="venue-only-wrapper mb-5">
		<div class="package-header">Venue Only</div>
		<li>Fridays, Saturdays & Sundays - $1800.00 8 hours</li>
		<li>Monday-Thursday - $1,200 6 hours</li>
		<li>With any package 250.00/hour</li>
		<li>A $500 deposit is required to hold a date.</li>
		<li>This deposit is not refundable. The balance is due 40 days prior to your event.</li>
	</div>
</div>


<section class="venue-feats-container">
	<hr>
	<div class="feats-sub-header">
		Additional Features:
	</div>
	<div class="sub-feats">Full Kitchen</div>
	<div class="sub-feats">Audio System throughout & Microphone</div>
	<hr>
</section>


<div class="container">


	<div class="row">
		<h4 class="col package-header">
			Rental Fees:
		</h4>
	</div>
	<ul>
		<li>Photo Booth Wall $300.00</li>
		<li>Corn Hole, Giant Jenga $10.00 each per event</li>
		<li>Champagne Wall $2.60 a glass</li>
		<li>Sparkler Buckets $4.00 each(***Sparklers not included***)</li>
		<li>Bar Glassware $16 a rack</li>
		<li>Extra Decanters $8.00 each</li>
		<li>Tasting $125.00</li>
		<li>Extra Hours: $250.00 an hour with package</li>
	</ul>




	<div class="vendors mt-5">
		<div style="font-size:24px; margin-bottom:1rem" class="package-header">Vendors:</div>
		<div class="photography mb-3">
			<div class="package-header">Photography:</div>
			<a href="https://www.ritaweddingstudio.com/" target="_blank" rel="noopener noreferrer">
				<p>Rita Wedding Studio</p>
			</a>
			<a href="https://sixheartsphotography.com/" target="_blank" rel="noopener noreferrer">
				<p>Far Out Galaxy
			</a> - Photography - <a href="tel:+770-876-9248">770-876-9248</a></p>
			<a href="https://squidwed.com/" target="_blank" rel="noopener noreferrer">
				<p>Far Out Galaxy
			</a> - Cinematography - <a href="tel:+770-876-9248">770-876-9248</a></p>
			<a href="https://cherimichellephotography.com/" target="_blank" rel="noopener noreferrer">
				<p>Cheri Michelle Photography</p>
			</a>
		</div>

		<!-- <div class="dj-services mb-3"> -->
		<!-- 	<div class="package-header">Bartender:</div> -->
		<!-- 	<div class="flex-col" style="gap:0.5rem"><a style="text-decoration:underline" href="https://cdeeventbartender.com" target="_blank" rel="noopener noreferrer">Citizen Dane Enterprises</a> -->
		<!-- 		<a href="tel:+2483451090">(248) 345-1090</a> -->
		<!-- 		<a href="mailto:cdaneger@gmail.com">cdaneger@gmail.com</a> -->
		<!-- 	</div> -->
		<!-- </div> -->



		<div class="dj-services mb-3">
			<div class="package-header">DJ Services:</div>
			<a href="https://djcuttlefish.com/about-us/" target="_blank" rel="noopener noreferrer">
				<p>Far Out Galaxy
			</a> - (DJ) - <a href="tel:+770-876-9248">770-876-9248</a></p>
		</div>

		<div class="officiant mb-3">
			<div class="package-header">Officiant:</div>
			<a href="https://www.weddingofficiantga.com/" target="_blank" rel="noopener noreferrer">
				<p>Rev. Heinz Kloeter
			</a> - <a href="tel:+678-983-7976">678-983-7976</a></p>
			<a href="http://www.alternativeweddingsbyrevroberts.com/" target="_blank" rel="noopener noreferrer">
				<p>Alternative Weddings
			</a> - Rev. Dr. Barbara Roberts - <a href="tel:+706-265-7794">706-265-7794</a></p>
			<a href="https://www.weddingwire.com/biz/reverend-gale-m-york-alpharetta/9d305b6b2c47239e.html" target="_blank" rel="noopener noreferrer">
				<p>Rev. Gale York
			</a> - <a href="tel:+678-890-4881">678-890-4881</a></p>
			<p>Davis Palmour - <a href="tel:+706-455-8421">706-455-8421</a></p>
			<p><a href="https://ceremoniesbyrick.com/" target="_blank" rel="noopener noreferrer">Ceremonies By Rick</a>
				- Rick Durham - <a href="tel:+706-654-6268">706-654-6268</a></p>
			<a href="mailto:tjmaraia@gmail.com">
				<p>Tyler Maraia
			</a> - <a href="tel:+206-245-5986">206-245-5986</a></p>
			<p>Sensational Ceremonies - Dr. Gregg Potts - <a href="tel:+678-205-7267">678-205-7267</a></p>
			<a href="mailto:godsgatheringchurch@gmail.com">
				<p>Sue Palmer (minister)
			</a> - <a href="tel:+470-232-1170">470-232-1170</a></p>
			<p>Rocky Thompason - <a href="tel:+770-490-1274">770-490-1274</a></p>
		</div>

		<div class="hair-makeup mb-3">
			<div class="package-header">Hair & Make Up</div>
			<a href="https://blissformalhair.com/" target="_blank" rel="noopener noreferrer">
				<p>Bliss Formal Hair
			</a> - Candice Miklius</p>
			<a href="https://www.mindseyeinkandhair.com/" target="_blank" rel="noopener noreferrer">
				<p>Mind's Eye Salon
			</a> - <a href="tel:+678-828-7747">678-828-7747</a></p>
		</div>

		<div class="event-travel mb-3">
			<div class="package-header">Event Travel & Insurance</div>
			<p>Vacations by Sally - Sally Pavao - <a href="tel:+706-360-1346">706-360-1346</a></p>
			<a href="https://vipsoutherntours.com/" target="_blank" rel="noopener noreferrer">
				<p>VIP Southern Tours
			</a> - <a href="tel:+706-348-8747">706-348-8747</a></p>
			<a href="http://juliettechapel.com/wp-content/uploads/2020/02/e-Brochure-1.pdf" target="_blank" rel="noopener noreferrer">
				<p>Bradford Turner Insurance Group
			</a> - Brittany Turner - <a href="http://juliettechapel.com/wp-content/uploads/2020/02/Wedding-Rate-Chart-1.pdf" target="_blank" rel="noopener noreferrer"></a>Wedding Rate Chart</a> - <a href="http://wedding%20protector%20plan-quote%20%26%20issue/" target="_blank" rel="noopener noreferrer">Wedding Quote</a></p>
		</div>
	</div>
</div>

<?php
while (have_posts()) {
	the_post();
	get_template_part('loop-templates/content', 'page');
}
?>

<?php
get_footer();
