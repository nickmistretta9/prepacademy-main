<?php
/*
Template Name: Home Page
*/
?>
<!-- Header -->
<?php get_header(); ?>

<section class="hero">
	<div class="hero-slider">
		<div><img src="<?php bloginfo('template_directory'); ?>/dist/images/hero.jpg" alt=""></div>
	</div>
	<div class="hero-caption">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/hero-caption.png">
	</div>
</section>
<section class="ctas">
	<div class="container-fluid">
		<div class="flex">
			<div class="cta-box">
				<p class="title" data-mh>Making Parents and Kids Happy</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/testimonials'); ?>">Our Reviews</a>
				</div>
			</div>
			<div class="cta-box">
				<p class="title" data-mh>Tutoring With a Personal Touch</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/how-we-work'); ?>">How We Work</a>
				</div>
			</div>
			<div class="cta-box">
				<p class="title" data-mh>Hey, Smarty Pants!</p>
				<div class="cta-action">
					<a href="<?php echo home_url('/find-your-local-tutor'); ?>">Find Your Tutor</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<div class="callout">
					<p class="quote">"The average one-to-one tutored student performed greater than 98% of the students who learn via conventional methods"</p>
					<p class="source">Source - Bloom</p>
				</div>
			</div>
			<div class="col-sm-6">
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/content-image1.jpg">
			</div>
		</div>
	</div>
</section>
<section class="why-prep">
	<div class="container-fluid">
		<div class="header">
			<h2>Why Prep Academy Tutors?</h2>
		</div>
		<div class="flex">
			<div class="first-third">
				<div class="sub">
					<div class="icon-container"><!-- <i class="fa fa-certificate"></i> --></div>
					<div class="text">
						<h3>Certified Teachers</h3>
						<p>Our tutors have proper experience and qualifications to make sure your student succeeds.</p>
					</div>
				</div>
				<div class="sub">
					<div class="icon-container"><!-- <i class="fa fa-home"></i> --></div>
					<div class="text">
						<h3>Flexible In-Home Tutoring</h3>
						<p>Our tutors come to you at the times you decide, so tutoring fits into your and your child's schedule.</p>
					</div>
				</div>
			</div>
			<div class="second-third">
				<h3>We offer tutoring with a personal side!</h3>
				<p>We are communicators! You will receive phone calls instead of emails and face to face meetings with our tutors whenever possible. We always provide feedback and illustrate the progress that is made so that everyone is on the same page. We only hire teachers. You can rest assured that our tutors bring proper experience and qualifications to teach your child.</p>
			</div>
			<div class="third-third">
				<div class="sub">
					<div class="icon-container"><!-- <i class="fa fa-user"></i> --></div>
					<div class="text">
						<h3>Personal Attention</h3>
						<p>We offer a high level of service, professionalism and work to form a bond with your child.</p>
					</div>
				</div>
				<div class="sub">
					<div class="icon-container"><!-- <i class="fa fa-graduation-cap"></i> --></div>
					<div class="text">
						<h3>Boost Your Child's Confidence</h3>
						<p>Improved grades and understanding of subject matter often results in a boost in your child's confidence.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonial-section">
	<div class="container-fluid">
		<h2>Hear From the parents and students we have tutored</h2>
		<h3>Improve your student's grades without leaving your home. Prep Academy Tutors sends Ontario Certified Teachers to you, so your student can start getting A's in their classes.</h3>
		<div class="testimonial-slider">
			<?php 
			    $args = array( 'post_type' => 'testimonial', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page = 11' );
			    $loop = new WP_Query( $args );
			    while ( $loop->have_posts() ) : $loop->the_post();
			
				$title = types_render_field( "title", array("raw"=>"true") );
			    $quote = types_render_field( "quote", array("raw"=>"true") );
			?> 
			<div class="testimonial">
				<p data-mh><i class="fa fa-quote-left"></i><?php echo $title ?><i class="fa fa-quote-right"></i></p>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<button class="btn-info"><a href="<?php echo home_url('/testimonials'); ?>">Read More Testimonials</a></button>
	</div>
</section>
<section class="what-we-do">
	<div class="container-fluid">
		<h2>What We Do</h2>
		<ul class="wwd-list">
			<li>
				<i class="fa fa-university"></i>
				<p>JK to Grade 12</p>
			</li>
			<li>
				<i class="fa fa-book"></i>
				<p>All Subjects - Math, English, French, Science and More!</p>
			</li>
			<li>
				<i class="fa fa-graduation-cap"></i>
				<p>We Work With Your Student's Current Class Curriculum</p>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/icon-certificate.png">
				<p>ACT/SAT Test Prep</p>
			</li>
			<li>
				<i class="fa fa-users"></i>
				<p>In-Home Tutoring - We Come to You</p>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/icon-ruler.png">
				<p>Remedial Programs</p>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/dist/images/icon-diploma.png">
				<p>Enrichment Programs</p>
			</li>
		</ul>
		<button class="btn-info"><a href="<?php echo home_url('/how-we-work'); ?>">Learn About How We Work</a></button>
	</div>
</section>
<section class="map-area">
	<div id="map"></div>
	<div class="location-search">
		<div class="text">
			<img src="<?php bloginfo('template_directory'); ?>/dist/images/location-search.png">
		</div>
		<div class="search">
			<input type="text" id="postalCodeSearch" class="form-control" placeholder="Enter Your Postal Code">
			<button class="btn-info" onclick="locationSearch();">Go!</button>
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
<section class="home-blog">
	<div class="container-fluid">
		<h2>Our Blog</h2>
		<?php
            $args = array( 'post_type' => 'post', 'posts_per_page' => 4);
        	$query = new WP_Query( $args );
        ?>
      	<?php if ( $query->have_posts() ) : ?>
      	<ul class="home-blog-posts">
      		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
  			<li>
  				<a href="<?php the_permalink(); ?>">
  					<div class="post-content">
  						<div class="date">
	  						<div class="day"><?php the_time('j'); ?></div>
	  						<div class="month-year">
	  							<?php the_time('M'); ?> <br>
	  							<?php the_time('Y'); ?>
	  						</div>
  						</div>
  						<div class="text"><h3><?php the_title(); ?></h3></div>
  					</div>
  				</a>
  			</li>
  			<?php endwhile; ?>
      	</ul>
      	<?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <button class="btn-info"><a href="<?php echo home_url('/blog'); ?>">Visit Our Blog</a></button>
	</div>
</section>

<!-- Footer -->
<?php get_footer(); ?>