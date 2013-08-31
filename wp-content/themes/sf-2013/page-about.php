<?php get_header(); ?>

<section class="about-grey">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-10 about-panel">
			<div class="panel-wrap">
				<img src="http://placehold.it/730x324" class="large-focus" />

				<div class="inner">
					<h3 class="leading">About Sean Fisher</h3>
					<p class="leading">Full Stack Developer, Entrepreneur, Explorer.</p>
					<div class="copy">
						<p>Sean has <?php echo (date('Y')-2007); ?> years of experience organizing and building innovative applications. With a background in full stack development, he has worked in various startups, building out their technology and ensuring the visitors that their experience would perfect. Though he is currently working for a major in Web and Information Systems, Sean is also an Eagle Scout. When not pondering or developing, he can be found outdoors hiking.</p>  
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-panels">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 panel-info">
				<h3 class="leading">Teens in Tech Labs</h3>
				<p class="leading">Teens in Tech Labs provided tools and resources to young entrepreneurs world-wide to help encourage entrepreneurship at a young age. Sean worked on the development of it as the CTO. He built out a platform to encourge discussions and events amount entrepreneurs. Thousands were able to benefit from Teens in Tech Labs.</p>
				<p class="leading"><a href="<?php echo home_url('work/teens-in-tech-labs'); ?>">More Information</a></p>
			</div>

			<div class="col-lg-8 col-md-8-sm-8 panel-media">
				<img src="http://seanfisher.co/wp-content/uploads/2012/08/teens-in-tech.jpg" />
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 panel-info">
				<h3 class="leading">TruantToday</h3>
				<p class="leading">TruantToday works to keep parents virtually in the classroom by alerting them about their student. As the CTO, Sean worked to build the frontend and backend infrastructure to make sure the experience is seamless and to help empower parents and guardians around the world.</p>
				<p class="leading"><a href="<?php echo home_url('work/truanttoday'); ?>">More Information</a></p>
			</div>

			<div class="col-lg-8 col-md-8-sm-8 panel-media">
				<img src="http://seanfisher.co/wp-content/uploads/2012/08/truanttoday.jpg" />
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