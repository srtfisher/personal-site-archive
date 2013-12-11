<?php
/**
 * Template Name: Page w/ CTA
 *
**/

get_header(); ?>
<section class="blog">
    <div class="container">
        <?php if (have_posts()) : while(have_posts() ) : the_post(); ?>
            <article>
                <div class="post-title-wrap">
                    <h<?php if (is_single() OR is_page()) echo 2; else echo 4; ?> class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h<?php if (is_single() OR is_page()) echo 2; else echo 4; ?>>
                    
                    <?php if ( is_single()) : ?>
                        <h4 class="post-meta"><?php twentyten_posted_on(); ?></h4>
                    <?php endif; ?>
                </div>
                
                <?php if (is_single() OR is_page()) : ?>
                <div class="page-cta">
                    <div class="page-cta-inner">
                        <h3>Are you doing the best for your business?</h3>
                        <p>My name is <strong>Sean Fisher</strong> and I am a software developer and consultant. Coming from years of experience with WordPress and other software, I can help your business in the best way possible. You may view a sample of my work in my <a href="<?php echo home_url('/'); ?>#work">portfolio</a>. I would love to hear from you and learn how I can help you today.</p>
                    </div>
                    <div class="page-cta-footer">
                        <a href="<?php echo home_url('contact'); ?>?utm_source=seanfisherco&amp;utm_medium=button&amp;utm_content=service-cta&amp;utm_campaign=contact" class="btn btn-lg btn-primary">Let's Get In Touch</a>
                    </div>
                </div>

                <div class="content-wrap">
                    <?php the_content(); ?>
                </div>
                <?php else : ?>
                <div class="content-wrap listing"><?php
                    if (has_excerpt())
                        the_excerpt();
                    else
                        the_content(); ?></div>
                <?php endif; ?>
                
                <?php if (! is_single() AND ! is_page() AND 1 == 2) : ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary right">Read More &rarr;</a>
                <?php endif; ?>
            </article>
        <?php endwhile; endif; ?>
        
        <?php if (! is_single() AND ! is_page()) wp_pagenavi([
        'before' => '<div class="wp-pagenavi-wrap">',
        'after' => '</div>'
        ]); ?>
    </div>
</section>

<?php if (is_single()) : ?>
    <section class="share-it">
        <div class="container">
            <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-via="srtfisher" data-size="large" data-related="srtfisher">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
