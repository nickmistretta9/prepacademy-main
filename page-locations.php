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
				<div class="individual-location">
					<p class="title">Prep Academy Tutors Durham</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Pickering</span>, ON <span class="postal-code">L1W 2S2</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (416) 906-4260</div>
						<div class="website"><a href="//durham.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Durham</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Aurora</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Aurora</span>, ON <span class="postal-code">L4G 6K3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 581-6603</div>
						<div class="website"><a href="//aurora.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Aurora, Nobleton</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Brantford and Hamilton</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Brantford</span>, ON <span class="postal-code">N3T 5B3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (226) 777-7155</div>
						<div class="website"><a href="//brantford-hamilton.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p></p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Burlington</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Burlington</span>, ON <span class="postal-code">L7L</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 296-0360</div>
						<div class="website"><a href="//burlington.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Burlington</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors East Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Toronto</span>, ON <span class="postal-code">M4S 1J7</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (416) 236-5437</div>
						<div class="website"><a href="//east-toronto.prepacademytutors.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Toronto, Downtown Toronto, East York, Scarborough, Danforth Village, Rosedale, Riverside, Riverdale and surrounding areas</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Kitchener-Waterloo</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Kitchener</span>, ON <span class="postal-code">N2A 2Z6</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (226) 777-8864</div>
						<div class="website"><a href="//kitchener-waterloo.prepacademytutors.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p></p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Markham</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Markham</span>, ON <span class="postal-code">L3P</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 581-6603</div>
						<div class="website"><a href="//markham.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Markham, Unionville</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Midtown Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Toronto</span>, ON <span class="postal-code">M4S 1A9</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (647) 557-3352</div>
						<div class="website"><a href="//midtown-toronto.prepacademytutors.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Toronto, York</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Mississauga</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Mississauga</span>, ON <span class="postal-code">L4T</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 995-7382</div>
						<div class="website"><a href="//mississauga.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Mississauga, Milton</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Newmarket</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Newmarket</span>, ON <span class="postal-code">L3Y</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 895-3592</div>
						<div class="website"><a href="//newmarket.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Newmarket, Tottenham, Stouffville, Bradford, River Drive Park</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of North Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Toronto</span>, ON <span class="postal-code">M5M 2B1</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 995-7382</div>
						<div class="website"><a href="//north-toronto.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>North York, Toronto, York</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Oakville</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Oakville</span>, ON <span class="postal-code">L6J 3Z3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 296-0360</div>
						<div class="website"><a href="//oakville.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Oakville</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Ottawa</p>
					<div class="location"><i class="fa fa-map-marker"></i> <span class="city">Ottawa</span>, ON <span class="postal-code">K1L 5B8</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (343) 600-2620</div>
						<div class="website"><a href="//ottawa.prepacademytutors.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>The Glebe, Orleans, New Edinburgh, Westboro, Rockcliffe, Nepean</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Richmond Hill</p>
					<div class="location"><i class="fa fa-map-marker"></i> Richmond Hill, ON <span class="postal-code">L4B</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 581-6603</div>
						<div class="website"><a href="//richmond-hill.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Richmond Hill, Thornhill</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Vaughan</p>
					<div class="location"><i class="fa fa-map-marker"></i> Vaughan, ON <span class="postal-code">L6A</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 995-7382</div>
						<div class="website"><a href="//vaughan.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Woodbridge, Vaughan, Thornhill, Concord, Kleinburg</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of West Toronto &amp; Etobicoke</p>
					<div class="location"><i class="fa fa-map-marker"></i> Toronto, ON <span class="postal-code">M6S 3J8</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (647) 361-8102</div>
						<div class="website"><a href="//west-toronto-etobicoke.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Etobicoke, York, Toronto</p>
					</div>
				</div>
			</div>
			<div class="list quebec">
				<h2>Quebec</h2>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors Montreal</p>
					<div class="location"><i class="fa fa-map-marker"></i> Montreal, QC <span class="postal-code">H3G 1C7</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (450) 915-1100</div>
						<div class="website"><a href="//montreal.prepacademytutors.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Montreal, Laval, Saint-Laurent, Outremont, Pointe-Claire, Verdun, Pierrefonds, Lasalle and surrounding areas</p>
					</div>
				</div>
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