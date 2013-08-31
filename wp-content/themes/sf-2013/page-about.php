<?php get_header(); ?>

<section class="about-grey">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-10 about-panel">
			<img src="http://placehold.it/900x400" class="large-focus" />

			<div class="inner">
				<h3 class="leading">About Sean Fisher</h3>
				<p class="leading">Full Stack Developer, Entrepreneur, Explorer.</p>
				<div class="copy">
					<p>Sean has <?php echo (date('Y')-2007); ?> years of experience organizing and building innovative applications. With a background in full stack development, he has worked in various startups, building out their technology and ensuring the visitors that their experience would perfect. Though he is currently working for a major in Web and Information Systems, Sean is also an Eagle Scout. When not pondering or developing, he can be found outdoors hiking.</p>  
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container hide">
	<section class="single-work">
		<div class="footer-container open-source">
	        <div class="row">
	            <div class="col-lg-7 col-md-7 col-sm-7">
	                <h3>Like what you're seeing?</h3>
	                <p class="lead">I enjoy building amazing products and I would love to work with you.</p>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-push-1 col-md-push-1 col-sm-push-1">
	                <a class="btn btn-primary btn-large" href="<?=home_url()?>/contact//?utm_source=seanfisherco&utm_medium=cta-button&utm_content=open-source-start-project&utm_campaign=contact&project">Start Your Project</a>
	            </div>
	        </div>
	    </div>
	</section>
</div>

<?php get_footer(); ?>