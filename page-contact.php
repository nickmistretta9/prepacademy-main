<?php
/*
Template Name: Contact Page
*/
?>
<!-- Header -->
<?php get_header(); ?>


<section class="inner-content contact-content">
	<div class="content contact">
		<div class="row">
			<div class="col-sm-6">
				<div class="container-fluid">
					<h2>Prep Academy Tutors</h2>
					<p>Telephone: <span>888.885.3968</span></p>
					<div class="about-us-box">
						<div class="icon-container">
							<i class="fa fa-user"></i>
						</div>
						<div class="learning"><a href="<?php echo home_url('/about-us'); ?>">Learn About Us</a></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h2>Contact Us For More Information</h2>
				<div class="contact-page-form">
					<?php include (TEMPLATEPATH . '/dist/inc/contactPageForm.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>