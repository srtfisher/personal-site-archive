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
		<p class="leading">Complete listing can be found on <a href="http://github.com/srtfisher" target="_blank" rel="self">GitHub</a></p>
	</div>
</section>

<section class="solutions-process">
	<div class="container">
		<h2 class="leading">A process designed for you.</h2>
		<p class="leading">Working around your needs, we ensure maximum happiness.</p>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="http://placehold.it/150x150" class="img-circle" />

				<h4>Cum sociis natoque penatibus et magnis dis parturient montes.</h4>
				<p>Aenean egestas nisi ut odio mollis elementum. Curabitur vulputate felis sit amet quam vulputate, vel laoreet orci accumsan.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="http://placehold.it/150x150" class="img-circle" />

				<h4>Cum sociis natoque penatibus et magnis dis parturient montes.</h4>
				<p>Aenean egestas nisi ut odio mollis elementum. Curabitur vulputate felis sit amet quam vulputate, vel laoreet orci accumsan.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 solution-item">
				<img src="http://placehold.it/150x150" class="img-circle" />

				<h4>Cum sociis natoque penatibus et magnis dis parturient montes.</h4>
				<p>Aenean egestas nisi ut odio mollis elementum. Curabitur vulputate felis sit amet quam vulputate, vel laoreet orci accumsan.</p>
			</div>
		</div>		
	</div>
</section>

<section class="solutions-feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<h3 class="leading">A better way to manage a construction job.</h3>
				<p class="section-info">Ut ut tellus bibendum, volutpat erat et, ullamcorper erat. Pellentesque sit amet tellus eget tortor ullamcorper scelerisque sit amet eu justo. Praesent ac turpis nec erat faucibus mollis. Morbi ultrices mauris ac nisl pharetra, a facilisis dolor ultrices.</p>

				<p class="section-info">Ut ut tellus bibendum, volutpat erat et, ullamcorper erat. Pellentesque sit amet tellus eget tortor ullamcorper scelerisque sit amet eu justo. Praesent ac turpis nec erat faucibus mollis. Morbi ultrices mauris ac nisl pharetra, a facilisis dolor ultrices.</p>
			</div>

			<div class="col-lg-7 col-md-7 col-lg-push-1 col-md-push-1">
				<img src="http://placehold.it/700x500">
			</div>
		</div>	
	</div>
</section>

<section class="solutions-feature center-feature">
	<div class="container">
		<h2 class="leading">Your ideas today. Reality tomorrow.</h2>
		<p class="leading">Let's put your ideas to action. While working with you to find the best solution, we'll ensure that you're overly satified.</p>
		
		<div class="media-wrap">
			<img src="http://placehold.it/700x400">
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