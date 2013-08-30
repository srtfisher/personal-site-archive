<?php
$repos = wp_cache_get('sf:repos');
if (false === $repos) :
	$repos = wp_remote_get('http://srtfisher.github.io/repos.json')['body'];

	wp_cache_set('sf:repos', $repos, '', 3600);
endif;
$repos = json_decode($repos);
?>
<?php get_header(); ?>
<section class="focus-area super-dark">
	<div class="container">
		<h2 class="leading">Open Source Projects</h2>
		<p class="leading">Complete listing can be found on <a href="http://github.com/srtfisher" target="_blank" rel="self">GitHub</a></p>
	</div>
</section>

<div class="container">
	<section id="project-listing" class="row">
	<?php foreach($repos->repositories as $repo) : ?>
		<a href="<?php echo $repo->url; ?>" target="_blank">
			<div class=" col-lg-6 col-md-6 col-sm-6">
				<div class="project">
					<h3><?php echo $repo->name; ?></h3>
					<p><?php echo $repo->description; ?></p>
				</div>
			</div>
		</a>
	<?php endforeach; ?>
	</section>
</div>

<div class="container">
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