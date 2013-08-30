<?php
// Check Composer
if (! file_exists(__DIR__.'/vendor/autoload.php'))
	die('You haven\'t setup composer yet.');

// WordPress view bootstrapper
define( 'WP_USE_THEMES', true );
require( __DIR__.'/wordpress/wp-blog-header.php' );
