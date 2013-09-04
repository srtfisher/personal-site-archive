<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/favicon.png" />
<title><?php
	wp_title('|', true, 'right');
	bloginfo('name');
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page()))
		echo " | $site_description";
	?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="global-nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--<a class="navbar-brand" href="#">Brand</a>-->
        <a href="<?=home_url()?>" class="site-logo"><img src="<?=get_template_directory_uri()?>/img/logo.png" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        
        <ul class="nav navbar-nav navbar-right">
            <li id="nav-home" <?php if (is_front_page() ) echo 'class="active"'; ?>><a href="<?=home_url('')?>" data-target="#spotlight">Home</a></li>
            <li id="nav-about" <?php if (get_the_title() == 'About' ) echo 'class="active"'; ?>><a href="<?=home_url('about')?>" data-target="#about">About Me</a></li>
            <li id="nav-services" <?php if (get_the_title() == 'Services' ) echo 'class="active"'; ?>><a href="<?=home_url('services')?>/?utm_source=seanfisherco&utm_medium=link&utm_content=header&utm_campaign=services">Services</a></li>
            <li id="nav-work"><a href="<?=home_url('')?>#work" data-target="#work">Portfolio</a></li>
            <li id="nav-blog" <?php if (get_the_title() == 'Blog' ) echo 'class="active"'; ?>><a href="<?=home_url('blog')?>">Blog</a></li>
            <li id="nav-contact" <?php if (get_the_title() == 'Contact' ) echo 'class="active"'; ?>><a href="<?=home_url('contact')?>/?utm_source=seanfisherco&utm_medium=link&utm_content=header&utm_campaign=contact" data-target="#contact" data-medium="header">Contact Me</a></li>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>