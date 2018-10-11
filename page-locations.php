<?php
/*
Template Name: Locations Page
*/
?>
<!-- Header -->
<?php get_header(); ?>

<section class="map-area locations">
	<div id="map"></div>
	<div class="location-search">
		<div class="text">
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/location-search.png">
		</div>
		<div class="search">
			<input type="text" id="postalCodeSearch" class="form-control" placeholder="Enter Your Postal Code" value="<?php echo $_POST['postalCode'] ?>">
			<button class="btn-info" onclick="locationSearch();">Search</button>
		</div>
		<div class="location-text">
			<p>Enter Your Postal Code To Find The Prep Academy Tutors Location Closest To You!</p>
		</div>
	</div>
</section>
<section class="inner-content locations-content">
	<div class="container-fluid">
		<h1><span>Our</span> <br> Locations</h1>
		<div class="search-box">
			<div class="state">
				<p>Your State</p>
				<select name="" class="form-control state-select">
					<option selected value="Both">Make a selection</option>
					<option value="Ontario">Ontario</option>
					<option value="Quebec">Quebec</option>
				</select>
			</div>
			<div class="or">
				<p>OR</p>
			</div>
			<div class="location">
				<p>Your Location</p>
				<div class="search">
					<input type="text" class="form-control" placeholder="Enter Postal Code" id="locationFilter">
					<button class="btn-info" onclick="postalCodeFilter();"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
		<div class="locations-list">
			<div class="list ontario">
				<h2>Ontario</h2>
				<?php 
				    $args = array( 'post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 );
				    $loop = new WP_Query( $args );
				    while ( $loop->have_posts() ) : $loop->the_post();
				
				    $state = types_render_field("location_state", array("raw"=>"true"));
				    $name = types_render_field("location_name", array("raw"=>"true"));
				    $city = types_render_field("location_city", array("raw"=>"true"));
				    $postalCode = types_render_field("postal_code", array("raw"=>"true"));
				    $website = types_render_field("location_website", array("raw"=>"true"));
				    $phone = types_render_field("location_phone", array("raw"=>"true"));
				    $serviceAreas = types_render_field("areas_serviced", array("raw"=>"true"));
				?> 
				<?php if($state == 'ontario') { ?>
					<div class="individual-location ontario">
						<p class="title"><?php echo $name; ?></p>
						<div class="location">
							<i class="fa fa-map-marker"></i> <span class="city"><?php echo $city; ?></span>, ON <span class="postal-code"><?php echo $postalCode; ?></span>
						</div>
						<div class="info">
							<div class="phone"><i class="fa fa-phone"></i> <?php echo $phone; ?></div>
							<div class="website"><a href="//<?php echo $website; ?>" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
						</div>
						<hr>
						<div class="areas">
							<p class="subtitle">Common Areas Serviced</p>
							<p><?php echo $serviceAreas; ?></p>
						</div>
					</div>
				<? } ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div class="list quebec">
				<h2>Quebec</h2>
				<?php 
				    $args = array( 'post_type' => 'location', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 );
				    $loop = new WP_Query( $args );
				    while ( $loop->have_posts() ) : $loop->the_post();
				
				    $state = types_render_field("location_state", array("raw"=>"true"));
				    $name = types_render_field("location_name", array("raw"=>"true"));
				    $city = types_render_field("location_city", array("raw"=>"true"));
				    $postalCode = types_render_field("postal_code", array("raw"=>"true"));
				    $website = types_render_field("location_website", array("raw"=>"true"));
				    $phone = types_render_field("location_phone", array("raw"=>"true"));
				    $serviceAreas = types_render_field("areas_serviced", array("raw"=>"true"));
				?> 
				<?php if($state == 'quebec') { ?>
					<div class="individual-location quebec">
						<p class="title"><?php echo $name; ?></p>
						<div class="location">
							<i class="fa fa-map-marker"></i> <span class="city"><?php echo $city; ?></span>, QC <span class="postal-code"><?php echo $postalCode; ?></span>
						</div>
						<div class="info">
							<div class="phone"><i class="fa fa-phone"></i> <?php echo $phone; ?></div>
							<div class="website"><a href="//<?php echo $website; ?>" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
						</div>
						<hr>
						<div class="areas">
							<p class="subtitle">Common Areas Serviced</p>
							<p><?php echo $serviceAreas; ?></p>
						</div>
					</div>
				<? } ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
<section class="home-contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" data-mh>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/contact-img.png">
			</div>
			<div class="col-sm-6" data-mh>
				<div class="footer-contact">
					<?php include (TEMPLATEPATH . '/dist/inc/contactForm.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>