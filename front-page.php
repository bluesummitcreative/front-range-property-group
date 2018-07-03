<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
        <!--Bootstrap Style Sheet-->        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css">        
        <!--Custom Style Sheet-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <!--New Custom Style Sheet-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
        <!--New Updates Style Sheet-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/updates.css">        
		<!--Animation Style Sheet-->   
	    <link href="<?php echo get_template_directory_uri(); ?>/css/animations.css" rel="stylesheet" type="text/css">
        <!--loader Style Sheet-->
	    <link href="<?php echo get_template_directory_uri(); ?>/css/loader.css" rel="stylesheet" type="text/css">
        <!--color-mustard.css-->
	    <link href="<?php echo get_template_directory_uri(); ?>/css/color-mustard.css" rel="stylesheet" type="text/css">	    	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body <?php body_class(); ?> id="color-mustard">
		<!-- LOADER -->
		<div id="preloader-2">
		    <div id="status"> 
				<div class="bullet-2"></div>
		    </div>
		</div>		
		<!-- END OF LOADER -->

		<!-- HEADER -->
		<header class="banner header-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="logo-outter top-optc clearfix">
							<a href="<?php echo esc_url(home_url()); ?>" class="logo">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?> logo">
							</a>
						</div>
						<div class="header-txt">
							<div class="header-txt-inner">
								<h1 class="top-optc">COMMERCIAL PROPERTIES FOR SALE</h1>
								<p class="top-optc">Sign up to get the latest list of commercial real estate properties for sale, delivered weekly to your inbox.</p>
								<p class="top-optc">Questions? Call 303-419-4686</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 form-outter visibility">
						<div class="form-content">
							<div class="form-content-inner">
								<h4>Get FREE Commercial Listing Alerts</h4>
							</div>
							<span class="tagline">By clicking 'Sign Up' you agree to our Website Terms of Use and Privacy Statement. You will receive promotional emails from Front Range Property Group.</span>
						</div>
						<div class="form-wrapper">
							ECHO GRAVITY FORM HERE
						</div>
					</div>					
				</div>
			</div>
		</header>
		<!-- END OF HEADER -->
        
		<!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="copy">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="/privacy-policy/">Privacy Policy</a></div>
						<div class="socail">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/pweller" class="facebook"></a></li>
								<li><a target="_blank" href="http://www.linkedin.com/in/pweller/" class="linkdin"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END OF FOOTER -->
		<?php wp_footer(); ?>

        <!-- jquery-2.1.1.min.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
		<!--modernizr.js-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
		<!--jquery.waypoints.js-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.js"></script>        
        <!-- bootstrap.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.js"></script>
		<!-- Jquery.simplr.jquery.validate.js -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.js"></script>		
		<!-- Jquery.simplr.jquery-validate.bootstrap-tooltip.js -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-validate.bootstrap-tooltip.js"></script>
		<!-- Less.js -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/less/less.js"></script>          
        <!-- custom.js -->        
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>		        
    </body>
</html>
