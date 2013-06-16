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
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Kotta+One" rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>
    <header class="<?php if (is_front_page()) echo 'loading'; ?>">
        <div id="top-border"></div>
        
        <div class="container">
            <div class="row">
                <div class="span3 site-logo">
                    <a href="<?=site_url()?>"><img src="<?=get_template_directory_uri()?>/img/logo.png" /></a>
                </div>
                
                <div class="span9">
                    <nav id="site-nav-wrap">
                        <ul id="site-nav">
                            <li id="nav-home" <?php if (is_front_page() ) echo 'class="active"'; ?>><a href="<?=site_url('')?>" data-target="#spotlight">Home <div class="arrow"><div class="fill"></div></div></a></li>
                            <li id="nav-about"><a href="<?=site_url('')?>#about" data-target="#about">About Me <div class="arrow"><div class="fill"></div></div></a></li>
                            <li id="nav-work"><a href="<?=site_url('')?>#work" data-target="#work">Work Portfolio <div class="arrow"><div class="fill"></div></div></a></li>
                            <li <?php if (get_the_title() == 'Blog' ) echo 'class="active"'; ?>><a href="<?=site_url('blog')?>">Blog <div class="arrow"><div class="fill"></div></div></a></li>
                            <li id="nav-contact"><a href="<?=site_url('')?>#contact" data-target="#contact">Contact Me <div class="arrow"><div class="fill"></div></div></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>