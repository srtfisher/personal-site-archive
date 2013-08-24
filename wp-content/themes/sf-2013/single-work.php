<?php
/**
 * Template Name: Work Template
 *
**/

get_header();

$url = get_post_meta(get_the_ID(), 'sf-website', TRUE);
$domain = parse_url($url, PHP_URL_HOST);

the_post();
?>
<section class="single-work">
    <div class="container">
        <div class="featured-image">
            <img src="<?=get_post_meta(get_the_ID(), 'sf-image', TRUE)?>" />
        </div>
        
        <hr />
        
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 work-featured">
                <h2><?php the_title(); ?></h2>
                <h4><a href="<?=$url?>"><?=$domain?></a></h4>
                <?php the_content(); ?>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3 work-sidebar">
                <h4>Work Performed</h4>
                <?php
                echo wpautop(get_post_meta(get_the_ID(), 'sf-work', TRUE));
                ?>
            </div>
        </div>
    </div>
    
    <div class="container footer-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h3>Like what you see?</h3>
                <p class="lead">I enjoy building amazing products and I would love to work with you.</p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-push-2 col-md-push-2 col-sm-push-2">
                <a class="btn btn-primary btn-large" href="<?=home_url()?>#contact">Let's Get in Touch!</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>