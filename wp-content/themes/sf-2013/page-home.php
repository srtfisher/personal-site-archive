<?php get_header(); ?>    
<section class="focus-area dark">
	<div class="container">
		<h2 class="leading">Hi, my name is <span class="yellow">Sean Fisher</span></h2>
		<p class="leading">I'm a full stack developer from New York City. My specilties including
		WordPress, front and backend Development and custom application
		development. I work with individuals and business to create amazing
		internet applications. Let me help create your.</p>
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

<section class="focus-area">
	<h2 class="leading">What have I been up to?</h2>
	
	<div class="container">
		<div class="row">
			<div class="span2">&nbsp;</div>
			<div class="span4">
				Item

			</div>

			<div class="span4">
				Item

			</div>
			<div class="span2">&nbsp;</div>

		</div>
	</div>
</section>

    <section class="below-spotlight">
        <div class="inner">
            <div class="container">
                <p class="lead text">I'm a <strong>full stack developer</strong> from New York City. I love code, WordPress, GIT and <span class="red">you</span>.</p>
            </div>
        </div>
    </section>
    
    <section class="services" id="about">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <p class="lead">The world is becoming a smaller and smaller place. The rise of the Internet has allowed people across the globe to feel like they are right next to one another, even if it is virtually. This is amazing for those who haven't had a computer for most of their life.</p>
                    <p class="lead">However, for those who have grown up with a computer and a smart phone, this is just the beginning. We will push technology further and further to new lengths. Instead of thinking what is impossible and what cannot be achieved, we think of what we want to see in the world.</p>
                    <p class="lead">We are the change in the world, the well needed <span class="red">fire</span> in history books. We will make a dent in the universe &mdash; not next year, not ten years from now, today.</p>
                    
                    <hr />
                    <p>Want Sean's paper-style resume? Visit my <a href="http://linkedin.com/in/srtfisher" target="_blank">LinkedIn</a> or <a href="http://seanfisher.co/resume" target="_blank">download it</a>
                    
                </div>
                
                <div class="span9">
                    <div class="work-history clearfix">
                        <div class="span5 col">
                            <p>I work for as the CTO for Teens in Tech Labs. <strong>Teens in Tech Labs</strong> is a company that provides tools and resources to young entrepreneurs world-wide. We run an incubator to help give young entrepreneurs the skills they need to start their own company &mdash; as well as have them present at our annual conference. Throughout our online and offline initivites, we help connect young entrepreneurs connect around the world and receive the skills they need.</p>
                        </div>
                        <div class="span4 col right" style="">
                            <a href="http://teensintech.com/"><img src="http://75f0.http.cdn.softlayer.net/0075F0/media/logo-300.jpg" /></a>
                        </div>
                        
                        <!-- Clearing it out between -->
                        <div class="clearfix"></div>
                        <div class="spacer"></div>
                        
                        <div class="span4 col ">
                            <a href="http://truanttoday.com/"><img src="http://s3.truanttoday.com/2012/04/tt-email-logo.png" /></a>
                        </div>
                        <div class="span5 col right">
                            <p><strong>TruantToday</strong> works to keep parents virtually in the classroom by alerting them about their student. As the CTO, I work to build the frontend and backend infrastructure to make sure the experience is seamless and to help empower parents and guardians around the world.</p>
                        </div>
                        
                    </div>
                    
                    <div class="freelance-cta">
                        <span>I still accept freelancing requests! Let's <a href="#contact">get in touch.</a></span>
                    </div>
                    
                    <div class="quotes">
                        <div class="quote clearfix">
                            <a href="http://twitter.com/danielbru" class="left span2" rel="nofollow"><img src="http://a0.twimg.com/profile_images/2503703736/411390_472724532745507_1521460306_o.jpg" class="img-circle" /></a>
                            
                            <p>"Love having Sean Fisher in the Teens in Tech Labs office! So many great things are getting done right now."</p>
                            <cite>Daniel Brusilovsky, CEO and Founder Teens in Tech Labs</cite>
                        </div>
                        
                        <div class="quote clearfix">
                            <a href="http://twitter.com/kukoff" class="left span2" rel="nofollow"><img src="http://s3.truanttoday.com/2012/02/zak.jpg" class="img-circle" /></a>
                            
                            <p>"You are the Beethoven of code."</p>
                            <cite>Zak Kukoff, CEO and Founder of TruantToday</cite>
                        </div>
                        <!--
                        <div class="quote clearfix">
                            <a href="http://twitter.com/kukoff" class="left span2" rel="nofollow"><img src="http://s3.truanttoday.com/2012/02/zak.jpg" class="img-circle" /></a>
                            
                            <p>"You are the Beethoven of code."</p>
                            <cite>Zak Kukoff, CEO and Founder of TruantToday</cite>
                        </div>
                        -->
                        
                    </div>
                </div>
            </div>
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