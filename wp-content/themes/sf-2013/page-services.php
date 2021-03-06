<?php
add_filter('body_class', function($classes)
{
	$classes[] = 'darker-header';
	return $classes;
});
get_header(); ?>
<section class="focus-area services">
	<div class="container">
		<h2 class="leading">Are you doing the <span class="yellow">best</span> for your business?</h2>
		<p class="leading">We make sure you get the best value for you money.</p>
	</div>
</section>

<section class="solutions-process">
	<div class="container">
		<h2 class="leading">A process designed for you.</h2>
		<p class="leading">Working around your needs, we ensure maximum happiness.</p>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="<?php bloginfo('template_url'); ?>/img/step-one.png"  />

				<h4>Finding out what is perfect for you.</h4>
				<p>We listen to what you want to build out. Using years of experience, I'll help tailor your product to recieve its maxium value.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="<?php bloginfo('template_url'); ?>/img/step-two.png"  />

				<h4>Build out a incredible product.</h4>
				<p>Using modern technologies, I'll build our your product and communicate clearly with you about it's progress. As the product evolves from start to finish, the client is involved entirely.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="<?php bloginfo('template_url'); ?>/img/step-three.png"  />

				<h4>Deploy and ensure continued happiness.</h4>
				<p>Once we've built out an incredible product, I'll deploy it and ensure you are set on your feet. After it is already launched, we will do a final check to ensure the client's ultimate satisfaction.</p>
			</div>
		</div>		
	</div>
</section>

<section class="solutions-feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<h3 class="leading">We'll handle all of the grunt work so you don't have to.</h3>
				<p class="section-info">
Our years of experience don't go unused. To ensure your product is the best it can be, we can work with you to build an amazing solution customized just for you. From a business website to a custom build application, the sky is the limit.
				</p>

				<p class="section-info">
I've built out hundreds of applications and know a thing or two about what works and what doesn't. We will build you the application of your dreams. Your product is in good hands.
				</p>
			</div>

			<div class="col-lg-7 col-md-7 col-sm-8 col-lg-push-1 col-md-push-1">
				<img src="http://seanfisher.co/wp-content/uploads/2013/08/dashboard-welcome.png">
			</div>
		</div>	
	</div>
</section>

<section class="solutions-feature center-feature">
	<div class="container">
		<h2 class="leading">Your ideas today. Reality tomorrow.</h2>
		<p class="leading">Let's put your ideas to action. While working with you to find the best solution, I'll ensure that you're overly satified.</p>
		
		<div class="row panel-media">
			<div class="col-lg-9 col-md-9 col-sm-9 col-fix">
				
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="http://seanfisher.co/wp-content/uploads/2013/08/wp-services.png" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="http://seanfisher.co/wp-content/uploads/2013/08/laravel-services.png" />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="http://seanfisher.co/wp-content/uploads/2013/08/ci-services.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="solutions-feature cta-feature">
	<div class="container">
		<h3 class="section-title">Let's get in touch.</h3>
		<h4 class="section-sub">You won't be sorry. Possibly the best decision of your life.</h4>
		
		<p align="center">
			<a href="<?php echo home_url('contact'); ?>/?utm_source=seanfisherco&utm_medium=cta-button&utm_campaign=contact&project" class="btn btn-lg btn-primary">Start Your Project</a>
		</p>
	</div>
</section>

<?php get_footer(); ?>