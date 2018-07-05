<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
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
								<h1 class="top-optc">COLORADO TENANT REPRESENTATION AT ITS FINEST</h1>
								<p class="top-optc">Your lease is about to expire. Your space or business needs have changed. You’re curious what other options are out there.</p>

<p class="top-optc">Whatever your reasons for considering an office move, this stage is filled with unknowns. But one thing is certain: You need to make room for the future, even if you can’t predict it.</p>

<p class="top-optc">Whether that means a mild renovation or a full-on relocation, this guide will help you start that discussion. So if and when you decide to move, you’ll know exactly what to you will need to act upon.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 form-outter visibility">
						<div class="form-content">
							<div class="form-content-inner">
								<h3 style="margin-bottom:30px;">Sign Up for Our Monthly Strategy and Tips and Receive Our Guide to Office Relocation</h3>
							</div>
							<span class="tagline">By clicking 'Sign Up' you agree to our Website Terms of Use and Privacy Statement. You will receive promotional emails from Front Range Property Group.</span>
						</div>
						<div class="form-wrapper">
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="10"]'); ?>
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
    </body>
</html>
