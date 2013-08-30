<?php get_header(); ?>    
<section class="focus-area dark">
	<div class="container">
		<h2 class="leading">Hi, my name is <span class="yellow">Sean Fisher</span></h2>
		<p class="leading">I'm a full stack developer from New York City. My specialties including

		WordPress, full stack development and custom application

		development. I work with individuals and business to create amazing

		Internet applications. Let me help create your idea today.</p>

		<div class="action-btns">
			<div class="btn-group">
				<a href="<?php echo home_url('services'); ?>/?utm_source=seanfisherco&utm_medium=cta-button&utm_content=spotlight&utm_campaign=services" class="btn btn-primary btn-lg">What I Can Do For You</a>
				<a href="<?php echo home_url('contact'); ?>/?utm_source=seanfisherco&utm_medium=cta-button&utm_content=spotlight&utm_campaign=contact" class="btn btn-default btn-lg pull-right" id="spotlight-contact" data-medium="spotlight">Contact Me</a>
			</div>
		</div>
	</div>
</section>

<section class="focus-area portfolio-listing" id="work">
	<?php 
                query_posts(array(
                    'post_type'             => 'work',
                    'posts_per_page'        => 30,
                    
                    'orderby'           => 'meta_value_num',
                    'meta_key'          => 'sf-weight',
                    'order'             => 'asc',
                    
                ));
                ?>
	<div class="container">
		<a name="work"></a>
		<h2 class="leading">Look at Some of My Work</h2>
		<p class="leading">I ensure my client's happiness from beginning to end by making a wonderful product that is both beautiful and easy to use.</p>

		<div class="row">
		<?php $cellCount = -1;
            // the Loop
		if (have_posts()) : while (have_posts()) : the_post();
            	$cellCount++;
            	$url = get_post_meta(get_the_ID(), 'sf-website', TRUE);
            	$domain = parse_url($url, PHP_URL_HOST);
            	?>
			<?php if ($cellCount == 2) : ?>
				</div><div class="row">
			<?php $cellCount = 0;
			endif; ?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<a href="<?php the_permalink(); ?>">
					<!--<img src="http://placehold.it/460x200" style="max-width:100%;" /> -->
					<img src="<?php echo home_url().'/wp-content/themes/sf-2013/timthumb.php?src='.urlencode(get_post_meta(get_the_ID(), 'sf-image-small', TRUE)).'&w=460&h=200&a=t'; ?>" style="max-width:100%;" />

					<h3><?php the_title(); ?></h3>
					<h5><?php echo $domain; ?></h5>
				</a>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>

    <p class="last-call">I also have a number of <a href="<?php echo home_url('open-source'); ?>" class="btn btn-default">open source projects</a>.</p>
</section>

<section class="focus-area what-i-work-on">
	<h2 class="leading"><span>What can I provide you?</h2>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 service-item">
				<h3>Full Stack Design</h3>
				<p>
Suspendisse a sapien nulla. Sed id iaculis lacus. Praesent scelerisque imperdiet neque, vitae dapibus turpis feugiat a. Morbi tempus lacus risus, non eleifend nulla.
</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 service-item">
				<h3>Full Stack Design</h3>
				<p>
Suspendisse a sapien nulla. Sed id iaculis lacus. Praesent scelerisque imperdiet neque, vitae dapibus turpis feugiat a. Morbi tempus lacus risus, non eleifend nulla.
</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 service-item">
				<h3>Full Stack Design</h3>
				<p>
Suspendisse a sapien nulla. Sed id iaculis lacus. Praesent scelerisque imperdiet neque, vitae dapibus turpis feugiat a. Morbi tempus lacus risus, non eleifend nulla.
</p>
			</div>


		</div>

		<div class="resume-link"><p>How about a paper <a href="<?php echo home_url('resume'); ?>">resume</a>?</p></div>
	</div>
</section>

    
    <?php get_template_part('contact-form'); ?>

<?php 
add_action('jquery_load', function() {
?>
$('#nav-contact a, #spotlight-contact').click(function(e)
{
	e.preventDefault();
	scrollTo('#contact');
	$('#contact-textarea').focus();
	
	_gaq.push(['_trackEvent', 'Button', 'Click', $(this).data('medium')]);
});

$('#nav-work a').click(function(e)
{
	e.preventDefault();
	scrollTo('#work');
});

<?php
});

get_footer(); ?>