<?php
/**
 * Template Name: Work Template
 *
**/

get_header();

$url = get_post_meta(get_the_ID(), 'sf-website', TRUE);
$domain = parse_url($url, PHP_URL_HOST);

if (is_page()) :
#    query_posts(array(
#        'posts_per_page'        => 10,
#    ));
endif;

?>
<section class="blog">
    <div class="container">
        <?php if (have_posts()) : while(have_posts() ) : the_post(); ?>
            <article>
                <div class="post-title-wrap">
                    <h<?php if (is_single() OR is_page()) echo 2; else echo 4; ?> class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h<?php if (is_single() OR is_page()) echo 2; else echo 4; ?>>
                    
                    <?php if ( is_single() OR is_page()) : ?>
                        <h4 class="post-meta"><?php twentyten_posted_on(); ?></h4>
                    <?php endif; ?>
                </div>
                
                <div class="content-wrap">
                    <?php the_content(); ?>
                </div>
                
                <?php if (! is_single() AND ! is_page()) : ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-permalink right">Permalink &rarr;</a>
                <?php endif; ?>
            </article>
        <?php endwhile; endif; ?>
        
        <?php wp_pagenavi(); ?>
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
