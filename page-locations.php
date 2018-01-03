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
			<p>Find your local Prep Academy Tutors by typing in your city, state or zip code in the box above!</p>
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
					<option selected disabled>Make a selection</option>
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
					<button class="btn-info" onclick="locationFilter();"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
		<div class="locations-list">
			<div class="list ontario">
				<h2><a href="">Ontario</a></h2>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors Durham</p>
					<div class="location"><i class="fa fa-map-marker"></i> Pickering, ON <span>L1W 2S2</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (226) 270-2062</div>
						<div class="website"><a href="http://durham.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Durham</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Aurora</p>
					<div class="location"><i class="fa fa-map-marker"></i> Aurora, ON <span>L4G 6K3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 683-2083</div>
						<div class="website"><a href="http://aurora.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Aurora, Nobleton</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Brantford and Hamilton</p>
					<div class="location"><i class="fa fa-map-marker"></i> Brantford, ON <span>N3T 5B3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (226) 778-7517</div>
						<div class="website"><a href="http://brantford-hamilton.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p></p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Burlington</p>
					<div class="location"><i class="fa fa-map-marker"></i> Burlington, ON <span>L7L</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 310-9334</div>
						<div class="website"><a href="http://burlington.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Burlington</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors East Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> Toronto, ON <span>M4S 1J7</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (647) 697-6446</div>
						<div class="website"><a href="http://east-toronto.prepacadtutors.wpengine.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Toronto, Downtown Toronto, East York, Scarborough, Danforth Village, Rosedale, Riverside, Riverdale and surrounding areas</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Markham</p>
					<div class="location"><i class="fa fa-map-marker"></i> Markham, ON <span>L3P</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 823-2031</div>
						<div class="website"><a href="http://markham.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Markham, Unionville</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Midtown Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> Toronto, ON <span>M4S 1A9</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (647) 360-8874</div>
						<div class="website"><a href="http://midtown-toronto.prepacadtutors.wpengine.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Toronto, York</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Mississauga</p>
					<div class="location"><i class="fa fa-map-marker"></i> Mississauga, ON <span>L4T</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 791-1296</div>
						<div class="website"><a href="http://mississauga.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Mississauga, Milton</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Newmarket</p>
					<div class="location"><i class="fa fa-map-marker"></i> Newmarket, ON <span>L3Y</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (289) 803-3818</div>
						<div class="website"><a href="http://newmarket.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Newmarket, Tottenham, Stouffville, Bradford, River Drive Park</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of North Toronto</p>
					<div class="location"><i class="fa fa-map-marker"></i> Toronto, ON <span>M5M 2B1</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 966-9478</div>
						<div class="website"><a href="http://north-toronto.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>North York, Toronto, York</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Oakville</p>
					<div class="location"><i class="fa fa-map-marker"></i> Oakville, ON <span>L6J 3Z3</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 287-2131</div>
						<div class="website"><a href="http://oakville.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Oakville</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Ottawa</p>
					<div class="location"><i class="fa fa-map-marker"></i> Ottawa, ON <span>K1L 5B8</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (343) 800-0226</div>
						<div class="website"><a href="http://ottawa.prepacadtutors.wpengine.com" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>The Glebe, Orleans, New Edinburgh, Westboro, Rockcliffe, Nepean</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Richmond Hill</p>
					<div class="location"><i class="fa fa-map-marker"></i> Richmond Hill, ON <span>L4B</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (905) 581-1076</div>
						<div class="website"><a href="http://richmond-hill.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Richmond Hill, Thornhill</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of Vaughan</p>
					<div class="location"><i class="fa fa-map-marker"></i> Vaughan, ON <span>L6A</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (888) 652-0168</div>
						<div class="website"><a href="http://vaughan.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Woodbridge, Vaughan, Thornhill, Concord, Kleinburg</p>
					</div>
				</div>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors of West Toronto &amp; Etobicoke</p>
					<div class="location"><i class="fa fa-map-marker"></i> Toronto, ON <span>M6S 3J8</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (647) 360-9162</div>
						<div class="website"><a href="http://west-toronto-etobicoke.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
					</div>
					<hr>
					<div class="areas">
						<p class="subtitle">Common Areas Serviced</p>
						<p>Etobicoke, York, Toronto</p>
					</div>
				</div>
			</div>
			<div class="list quebec">
				<h2><a href="">Quebec</a></h2>
				<div class="individual-location">
					<p class="title">Prep Academy Tutors Montreal</p>
					<div class="location"><i class="fa fa-map-marker"></i> Montreal, QC <span>H3G 1C7</span></div>
					<div class="info">
						<div class="phone"><i class="fa fa-phone"></i> (514) 700-7166</div>
						<div class="website"><a href="http://montreal.prepacadtutors.wpengine.com/" target="_blank"><i class="fa fa-picture-o"></i> Visit Website</a></div>
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