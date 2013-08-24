<?php get_header(); ?>    
<section class="focus-area dark">
	<div class="container">
		<h2 class="leading">Hi, my name is <span class="yellow">Sean Fisher</span></h2>
		<p class="leading">I'm a full stack developer from New York City. My specilties including
		WordPress, front and backend Development and custom application
		development. I work with individuals and business to create amazing
		internet applications. Let me help create your.</p>

                <p class="action-btns">
                    <a href="<?php echo home_url('about'); ?>" class="btn btn-default btn-lg pull-left">About Me</a>
                    <a href="<?php echo home_url('services'); ?>" class="btn btn-primary btn-lg">What I Can Do For You</a>
                    <a href="<?php echo home_url('services'); ?>" class="btn btn-default btn-lg pull-right">Contact Me</a>
                </p>
	</div>
</section>

<section class="focus-area portfolio-listing">
	<h2 class="leading">Look at Some of My Work</h2>
	
	<?php /*
                query_posts(array(
                    'post_type'             => 'work',
                    'posts_per_page'        => 30,
                    
                    'orderby'           => 'meta_value_num',
                    'meta_key'          => 'sf-weight',
                    'order'             => 'asc',
                    
                ));
                
                // the Loop
                if (have_posts()) : while (have_posts()) : the_post();
                	?>
                	<li>
                	   <a href="<?php the_permalink(); ?>"><img src="<?=get_post_meta(get_the_ID(), 'sf-image-small', TRUE)?>" /></a>
                	</li>
                	<?php
                endwhile; endif; */ ?>
	<div class="container">
		<div class="row">
		<?php $cellCount = 0; for ($i = 0; $i < 8; $i++) : $cellCount++; ?>
			<?php if ($i > 0 AND ($i % 2) == 0) : ?>
				</div><div class="row">
			<?php $cellCount = 0;
			endif; ?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<a href="#">
					<img src="http://placehold.it/460x200" style="max-width:100%;" />

					<h3>Great Content Site I Worked On</h3>
					<h5>google.com</h5>
				</a>
			</div>
		<?php endfor; ?>
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

    
    <section class="contact" id="contact">
        <div class="container">
            <h3 class="section-title">Let's get in touch.</h3>
            <h4 class="section-sub">We should be in touch. Shoot Sean an email below and he'll get back to you within <strong class="tipsy" title="That is, of course, if I'm not away on a much needed vacation!">one day</strong>.</h4>
            
            <div class="row">
            <form action="/contact" method="POST" id="contact-form" enctype="multipart/form-data">
                
                <div class="col-lg-6 col-md-6">
                    <textarea name="content" id="contact-textarea" placeholder="What's on your mind?" class="form-control"></textarea>
                </div>

                <div class="col-lg-6 col-md-6">
                    <input type="text" name="subject" class="form-control subject" placeholder="What will we be talking about?" />

                    <input type="text" name="your-name" placeholder="What's your name?" class="form-control name" />

                    <input type="email" name="your-email" placeholder="What is your email address?" class="form-control email" />

                        <button type="submit" class="btn btn-large btn-primary btn-block" id="contact-btn"
                    data-placement="top" data-content="I will not help wire money to your account, need SEO services, or want to rule the world. Thank you!"
                    data-title="Before you waste your time!" data-trigger="hover">Send Your Message</button>
                </div>
                
                
                <input type="hidden" name="is-robot" id="is-robot" value="yes" />
            </form>
            </div>

            <div id="content-error" style="display:none;">
                <div class="alert alert-error"><p align="center">Your form contains invalid things &mdash; try and fix it!</p></div>
            
            </div>
            <div id="contact-sent" style="display:none;">
                <div class="alert">
                    <p align="center">Your message has been sent my way &mdash; stay tuned!</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>