<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<section id="home-hero" class="hero">
	<div class="row content">
		<div class="large-6 columns">
			<h1>Lorem ipsum dolor sit amet</h1>
			<p class="leading">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
	</div>	
	<div class="row collapse blue-boxes" data-equalizer>
		<div class="medium-4 columns light-bl-bx" data-equalizer-watch>
			<h3>How We Can Help</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
			<a href="" class="button outline">Quality Care</a>
		</div>
		<div class="medium-4 columns bl-bx" data-equalizer-watch>
			<h3>Our Programs</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo. </p>
			<a href="" class="button outline">Treatment Options</a>
		</div>
		<div class="medium-4 columns dark-bl-bx text-center" data-equalizer-watch>
			<h3>Speak With Our Support Staff Now</h3>
			<a href="" class="button large" onclick="return SnapEngage.startLink();">Live Chat</a>		
		</div>
	</div>
</section>

<section class="statement-tier content">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<p><strong>Next Generation Village</strong> is a sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo.</p>
		</div>
	</div>				
</section>

<section class="text-center content">
	<div class="row below-5">
		<div class="small-12 columns">
			<h2>
				Treatment Programs That Get Results
			</h2>
		</div>	
	</div>
	<div class="row below-4 small-stack" data-equalizer="program" data-equalizer-mq="medium-up">
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
	</div>		
	<div class="row small-stack" data-equalizer="program" data-equalizer-mq="medium-up">
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
		 <div class="medium-4 columns" data-equalizer-watch="program">
		 	<h4>Program Title</h4>
		 	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
		 	<a href="">Treatment Link</a>
		 </div>
	</div>
</section>

<section class="facility-tour row">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/style/images/pool.jpg">
	</div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/style/images/room.jpg">
	</div>
	<div class="orange-bx cta-bx">
		<h3>Our Amenities</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem et quasi explicabo. </p>
		<a href="" class="button outline">Tour our Facility</a>
	</div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/style/images/bed.jpg">
	</div>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/style/images/beach.jpg">
	</div>
</section>

<section>
	<div class="row text-center content medium-stack">
		<div class="large-6 columns">
			<h3>
				We Offer Insurance Options
			</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/style/images/insurance-small.jpg" alt="Insurance Logos" class="pad-lv3 pad-r0 pad-l0"><br>
			<a href="">Insurance Link</a>
		</div>
		<div class="large-6 columns">
			<h3>
				Accreditations & Memberships
			</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/style/images/accreditations-home.jpg" alt="Accreditation Logos" class="pad-lv3 pad-r0 pad-l0"><br>
			<a href="">Meet our Staff</a>
		</div>
	</div>	
</section>

<section class="light-grey-bx">
	<div id="home-quality" class="row content">
		<div class="large-8 large-push-4 medium-10 medium-push-2 small-12 columns">
			<h2>
				You Deserve Quality Care
			</h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi explicabo. </p>
		</div>
	</div>
</section>
<?php get_footer(); ?>