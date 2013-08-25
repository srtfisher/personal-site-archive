<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php
	wp_title('|', true, 'right');
	bloginfo('name');
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page()))
		echo " | $site_description";
	?></title>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>

<noscript>
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/grid/fallback.css" />
</noscript>
<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/grid/fallback.css" />
<![endif]-->

<?php
	if (is_singular() && get_option('thread_comments'))
		wp_enqueue_script('comment-reply');
	wp_head();
?>
    <link href='http://fonts.googleapis.com/css?family=Cutive|Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
    <header class="<?php if (is_front_page()) echo 'loading'; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 site-logo">
                    <a href="<?=home_url()?>"><img src="<?=get_template_directory_uri()?>/img/logo.png" /></a>
                </div>
                
                <div class="col-lg-9 col-md-9">
                    <nav id="site-nav-wrap">
                        <ul id="site-nav">
                            <li id="nav-home" <?php if (is_front_page() ) echo 'class="active"'; ?>><a href="<?=home_url('')?>" data-target="#spotlight">Home</a></li>
                            <li id="nav-about" <?php if (get_the_title() == 'About' ) echo 'class="active"'; ?>><a href="<?=home_url('about')?>" data-target="#about">About Me</a></li>
                            <li id="nav-work"><a href="<?=home_url('')?>#work" data-target="#work">Work Portfolio</a></li>
                            <li <?php if (get_the_title() == 'Blog' ) echo 'class="active"'; ?>><a href="<?=home_url('blog')?>">Blog</a></li>
                            <li id="nav-contact"><a href="<?=home_url('')?>#contact" data-target="#contact">Contact Me</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>