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
	
	<div class="container">
		<div class="row">
		<?php $cellCount = 0; for ($i = 0; $i < 8; $i++) : $cellCount++; ?>
			<?php if ($i > 0 AND ($i % 2) == 0) : ?>
				</div><div class="row">
			<?php $cellCount = 0;
			endif; ?>
			<div class="span6">
				<a href="#">
					<img src="http://placehold.it/460x200" />

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
			<div class="span4 service-item">
				<h3>Full Stack Design</h3>
				<p>
Suspendisse a sapien nulla. Sed id iaculis lacus. Praesent scelerisque imperdiet neque, vitae dapibus turpis feugiat a. Morbi tempus lacus risus, non eleifend nulla.
</p>
			</div>

			<div class="span4 service-item">
				<h3>Full Stack Design</h3>
				<p>
Suspendisse a sapien nulla. Sed id iaculis lacus. Praesent scelerisque imperdiet neque, vitae dapibus turpis feugiat a. Morbi tempus lacus risus, non eleifend nulla.
</p>
			</div>

			<div class="span4 service-item">
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
    
    <section class="social">
        <div class="container">
            <h3 class="section-title">What have I been up to?</h3>
            
            <div class="row">
                <div class="span4">
                    <h3><span class="hidden">Sean Fisher on </span> Twitter <span class="right">
                        <a href="https://twitter.com/srtfisher" class="twitter-follow-button" data-show-count="false" data-show-screen-name="true">Follow @srtfisher</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </span></h3>
                    
                    <ul class="tweets">
                        <?php
                        $tweets = get_transient('sf:twitter');
                        if ($tweets == false OR 1 == 1) :
                            $connect = new \TwitterOAuth\Api('xe6B1ofvhNcLKagvlRxnWw', 'L0QrABJ5k52KWmPVdcKfxPQJg5uddte5yR1wX9wCL9I', '90006452-JY1G84FNxAaK0NviArLxOJVK0iww1sq5mjoZujewV', 'cD4HA7NQNuWReY2fEXcrkoyFI24pXcwqfomyRQKGQ');


                            $tweets = $connect->get('statuses/user_timeline', array(
                                'exclude_replies' => true,
                                'include_rts' => false,
                                'include_entities' => true,
                            ));

                            set_transient('sf:twitter', $tweets, 400);
                        endif;
                        
                        if ($tweets == NULL) : ?>
                            <p align="center">We're having some trouble contacting Twitter right now &mdash; check back in a second.</p>
                        <?php
                        
                        else :
                        $i = 0;
                        if (is_array($tweets) AND count($tweets) > 0) : foreach($tweets as $tweet) :
                            $i++;
                            
                            if ($i > 8) break;
                            ?>
                            <li>
                                <?php
                                $msg = $tweet->text;
                                
                                // Parse for URLs
                                if (isset($tweet->entities->urls) AND count($tweet->entities->urls) > 0) :
                                    foreach($tweet->entities->urls as $url) :
                                        $msg = str_replace($url->url, '<a href="'.$url->expanded_url.'" target="_blank">'.$url->display_url.'</a>', $msg);
                                    endforeach;
                                endif;
                                
                                echo '<p>'.autoConvert($msg).'</p>';
                                
                                echo '<a href="http://twitter.com/srtfisher/status/'.$tweet->id.'" class="time">';
                                echo human_time_diff(strtotime($tweet->created_at)).' ago';
                                echo '</a>';
                                ?>
                            </li>
                            <?php
                        endforeach; endif;
                        
                        endif;
                        ?>
                    </ul>
                </div>
                
                <div class="span8">
                    <!-- Foursquare -->
                    <div class="foursquare">
                        <div class="inner">
                            <a href="http://foursquare.com/srtfisher" target="_blank">
                                <img src="https://playfoursquare.s3.amazonaws.com/press/logo/icon-36x36.png" height="36" width="36" />
                            </a>
                            I'm currently at <?php
                            // Foursquare
                            $fq_trans = get_transient('sf:4sq');
                            
                            if ($fq_trans == false OR $fq_trans == NULL) :
                                $get = wp_remote_get('https://api.foursquare.com/v2/users/self/checkins?oauth_token=IF1KABRGCUQBASSE0BX1K4R3NRY2AJXMNV1LGCKTBGUKTPS2&v=20120820'); 
                                
                                if (! is_wp_error($get) ) :
                                    $body = json_decode($get['body']);
                                    $checkin = $body->response->checkins->items[0];
                                    
                                    set_transient('sf:4sq', $checkin, 500);
                                else :
                                    $checkin = NULL;
                                endif;
                            else :
                                $checkin = $fq_trans;
                            endif;
                            
                            if ($checkin == NULL) :
                                ?><p align="center">We're having some trouble contacting Foursquare right now &mdash; check back in a second.</p><?php
                            else :
                                echo '<a href="http://foursquare.com/v/'.$checkin->venue->id.'" target="_blank">'.$checkin->venue->name.'</a> in '.$checkin->venue->location->city;
                            endif;
                            ?>
                            
                        </div>
                    </div><!-- .foursquare -->
                    
                    <div class="instagram-wrap">
                        <ul class="thumbnails">
                        <?php
                        $insta = get_transient('sf:instagram');
                        
                        if ($insta == false)
                        {
                            $json = wp_remote_get('https://api.instagram.com/v1/users/27643219/media/recent/?access_token=27643219.f59def8.894985fd068a482e834740cefd30d6e6');
                            
                            if ( ! is_wp_error($json) ) :
                                $json = json_decode($json['body']);
                                set_transient('sf_insta', $json->data, 60*8);
                                
                                $insta = $json->data;
                            else :
                                $insta = NULL;
                            endif;
                        }
                        
                        $i = 0;
                        if ($insta == NULL) :
                            ?><p align="center">We're having some trouble contacting Instagram right now &mdash; check back in a second.</p><?php
                        else :
                        foreach($insta as $post) :
                            $i++;
                            
                            // Stop after 16
                            if ($i > 16) break;
                            
                            ?><li class="span2">
                                <a class="thumbnail" href="<?=$post->link?>"><img src="<?=$post->images->low_resolution->url?>" height="140" width="140" /></a>
                            </li><?php
                        endforeach;
                        endif;
                        ?>
                        </ul>
                    </div>
                    <!-- Instagram -->
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
            <!-- GitHub -->
            <div class="span4">
                <h3><span class="hidden">Sean Fisher on </span> GitHub
                <iframe style="margin-top:10px;" src="http://ghbtns.com/github-btn.html?user=srtfisher&type=follow&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="200px" align="right" height="30px"></iframe>
                </h3>
                
                <?php
                include_once(ABSPATH . WPINC . '/feed.php');
                $feed = fetch_feed('https://github.com/srtfisher.atom');
                
                if (! is_wp_error($feed) ) :
                    // Figure out how many total items there are, but limit it to 5. 
                    $maxitems = $feed->get_item_quantity(10); 
                    
                    // Build an array of all the items, starting with element 0 (first element).
                    $rss_items = $feed->get_items(0, $maxitems); 
                endif;
                
                ?>
                <ul class="tweets">
                    <?php if ($maxitems > 0 AND count($rss_items) > 0) : foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"><?php echo esc_html( $item->get_title() ); ?></a>
                    </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            
                <div class="span8">
                    <h3>By Blog Writings <a href="<?=home_url('feed')?>" class="right"><i class="icon-star-empty"></i></a></h3>
                    
                    <ul class="tweets blog-posts">
                        <?php
                        query_posts(array(
                            'post_type'     => 'post',
                            
                        ));
                        
                        if (have_posts()) : $i = 0; while(have_posts()) : $i++; the_post();
                        if ($i > 5) break; ?>
                            <li>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <h5>Written on <?php the_date(); ?></h5>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="work" id="work">
        <div class="wrap">
            <div class="overlay-back"></div>
            <div id="ri-grid" class="ri-grid ri-grid-size-2">
                <ul>
                <?php
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
                endwhile; endif;
                
                
                wp_reset_query();
                ?>
            </div><!-- .ri-grid -->
            <div class="overlay">
                <h3>Somethings I've Built</h3>
                <h4>I've put pride and effort into each project I take, never leaving anybody unhappy.</h4>
                
                <a href="#" class="btn btn-primary right">See more of my work &rarr;</a>
            </div>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="container">
            <h3 class="section-title">Like what you see?</h3>
            <h4 class="section-sub">We should be in touch. Shoot Sean an email below and he'll get back to you within <strong class="tipsy" title="That is, of course, if I'm not away on a much needed vacation!">one day</strong>.</h4>
            
            <div class="row">
            <form action="/contact" method="POST" id="contact-form" enctype="multipart/form-data">
                
                <div class="span6">
                    <textarea name="content" id="contact-textarea" placeholder="What's on your mind?"></textarea>
                </div>

                <div class="span6">
                    <input type="text" name="subject" class="subject" placeholder="What will we be talking about?" />

                    <input type="text" name="your-name" placeholder="What's your name?" class="name" />

                    <input type="email" name="your-email" placeholder="What is your email address?" class="email" />

                        <button type="submit" class="btn btn-large btn-primary btn-block" id="contact-btn"
                    data-placement="right" data-content="I will not help wire money to your account, need SEO services, or want to rule the world. Thank you!"
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

<!-- Backbone -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>
<script type="text/javascript">

    var AppRouter = Backbone.Router.extend({
        routes: {
            "contact":  "contact",
            "work": "work",
            "about": "about",
            "contactsent": "contactsent",
            // "*actions": "defaultRoute" // matches http://example.com/#anything-here
        },
        contact: function(a)
        {
            scrollTo('#contact');
            
            SF.resetHeader();
            $('#nav-contact').addClass('active');
        },
        
        about: function(a)
        {
            scrollTo('#about');
            
            SF.resetHeader();
            $('#nav-about').addClass('active');
        },
        
        contactsent: function()
        {
            $('#contact-sent').show();
            scrollTo('#contact-sent');
        },
        
        work: function(a)
        {
            scrollTo('#work');
            
            SF.resetHeader();
            $('#nav-work').addClass('active');
        },
    });
    // Initiate the router
    var app_router = new AppRouter;
    // Start Backbone history a neccesary step for bookmarkable URL's
    Backbone.history.start();

</script>
<?php get_footer(); ?>