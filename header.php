<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#FFFFFF" />

    <!-- Site CSS -->
    <link type='text/css' rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/dist/css/main.css">
    <link type='text/css' rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css">
    
    <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- jQuery Library -->  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="st-container" class="st-container">
    <nav class="st-menu st-effect-4" id="menu-4">
        <?php
        	   wp_nav_menu( array(
        	       'menu'              => 'Main Nav',
        	       'theme_location'    => 'primary',
        	       'depth'             => 2,
        	       'container'         => '',
        	       'container_class'   => '',
        	       'menu_class'        => 'nav navbar-nav',
        	       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        	       'walker'            => new wp_bootstrap_navwalker())
        	   );
        	?>
    </nav>
<div class="st-pusher">
<div class="st-content">
<div class="st-content-inner">

<div class="top-fix">
	<header class="site-header">
		<a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.png" alt="" class="logo"></a>
		<div class="container-fluid">
			<div class="flex">
				<!-- <div>
					<p class="h4">Find My Location:</p>
				</div>
				<form action="<?php echo home_url('/find-your-local-tutor'); ?>" method="post">
					<div class="form">
						<div>
							<input type="text" placeholder="Enter Postal Code" name="postalCode" class="form-control">
						</div>
						<div>
							<button class="btn-info">Go!</button>
						</div>
					</div>
				</form> -->
				<a href="<?php echo get_page_link(10); ?>" class="btn btn-info">Find Your Local Tutor</a>
			</div>
		</div>
		<div class="franchise">
			<a href="//franchise.prepacadtutors.wpengine.com"><p>Franchise Opportunities</p></a>
		</div>
	</header>

	<nav class="navbar-default">
	    <div class="container-fluid">
	        <div id="st-trigger-effects" class="column mobile-buttons">
        		<div class="mobile-phone"><span>647.620.7955</span></div>
        		<a class="call mobile-ctc" href="tel:647-620-7955"><i class="fa fa-phone"></i> Call</a>
        		<a class="email mobile-ctc" href="mailto:info@prepacademytutors.com"><i class="fa fa-envelope"></i> Email</a>
            	<button class="mobile-toggle" data-effect="st-effect-4"><i class="fa fa-bars"></i> Menu</button>
	        </div>
	        <div class="social-icons">
	        	<a href="https://www.linkedin.com/company/prep-academy-tutors?trk=nav_account_sub_nav_company_admin"><i class="fa fa-linkedin"></i></a>
				<a href="https://twitter.com/pattutors"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/PrepAcademyTutors"><i class="fa fa-facebook"></i></a>
	        </div>
	        <div class="collapse navbar-collapse" id="main-nav">
	        	<?php
	        	   wp_nav_menu( array(
	        	       'menu'              => 'Main Nav',
	        	       'theme_location'    => 'primary',
	        	       'depth'             => 2,
	        	       'container'         => '',
	        	       'container_class'   => '',
	        	       'menu_class'        => 'nav navbar-nav',
	        	       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	        	       'walker'            => new wp_bootstrap_navwalker())
	        	   );
	        	?>
	        </div>
	        <div class="phone">
	        	<a href="tel:647-620-7955">647.620.7955</a>
	        </div>
	    </div>
	</nav>
</div>
<div class="placeholder"></div>