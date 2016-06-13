<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>

	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php do_action( 'foundationpress_after_content' ); ?>

				

<section class="services">
	<header>
		<h2>Local and Reliable. No Job Too Small</h2>
	</header>

	<div class="service">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/home-improvements.svg" alt="Home Improvements">
		<h3>Home Improvements</h3>
		<ul class="no-bullet"><li>fitted kitchens</li><li>new worktops</li><li>doors</li><li>tiling</li><li>flooring</li></ul>
	</div>

	<div class="service">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/repairs.svg" alt="Repairs">
		<h3>Repairs</h3>
		<p><ul class="no-bullet"><li>tile repairs</li><li>leaks</li><li>re-grouting</li></ul>

	</div>

	<div class="service">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/construction.svg" alt="Construction">
		<h3>Construction</h3>
		<p><ul class="no-bullet"><li>joinery<li>made to measure shelving</li><li>storage</li><li>decking</li></ul>

	</div>

	<div class="service">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/odd-jobs.svg" alt="Odd Jobs">
		<h3>Odd-Jobs</h3>
		<ul class="no-bullet"><li>painting</li><li>flat pack furniture</li><li>bathroom sealing</li><li>power washing</li><li>cat flaps</li></ul>
		
	</div>
</section>

<section class="contact">
	<div class="contact-area">
		<article class="large-12 columns"><h3>Contact Stef</strong></h3>			
			<div><p>0774 360 4782 | 01422 847182 | <a href="mailto:info@hebdenhandyman.co.uk">info@hebdenhandyman.co.uk</a></p>
			</div>
		</article>
	</div>	
</section>	

<section class="benefits">
	<div class="benefits-area">
		<div class="benefit"><p>I can be with you quickly if you have an urgent job</p></div>
		<div class="benefit"><p>Well known locally with references</p></div>
		<div class="benefit"><p>Discounts for OAPs</p></div>
	</div>
</section>	

<?php get_footer();
