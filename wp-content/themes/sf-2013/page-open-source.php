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
<?php get_footer(); ?>