<?php
/**
 * Executed on Deploy
 */

// Load WordPress
require_once (__DIR__.'/wp/wp-load.php');
require_once(  __DIR__ . '/wp/wp-admin/includes/plugin.php');

$plugins = [
	'akismet/akismet.php',
	'composer/composer.php',
	'disqus-comment-system/disqus.php',
	'jetpack/jetpack.php',
	'redirection/redirection.php',
	'all-in-one-seo-pack/all_in_one_seo_pack.php',
	'disable-wordpress-plugin-updates/disable-plugin-updates.php',
	'mp6/mp6.php',
	'wp-pagenavi/wp-pagenavi.php'
];

$plugin_path = __DIR__.'/wp-content/plugins/';
foreach ($plugins as $plugin) {
	echo sprintf('Activating %s...', $plugin).PHP_EOL;
	$activate = activate_plugin($plugin_path.$plugin);

	if (is_object($activate) AND get_class($activate) == 'WP_Error')
		die('ERROR: '.$activate->get_error_message());

	echo "Done!".PHP_EOL;
}