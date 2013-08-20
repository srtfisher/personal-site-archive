<?php
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define('DB_NAME', 'sf');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'staw8R9t');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );

if (defined('WP_CLI') AND WP_CLI)
	define( 'WP_CONTENT_URL', 'http://localhost/wp-content' );
else
	define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

define('AUTH_KEY',         'V.^{s(tc[6UTH97 -C:&>p9~9d(e3%y!|sbj%!?Eyh+`P56FVD[jAI[P-vl|rODL');
define('SECURE_AUTH_KEY',  'q;,<OSA{*T7Vl~YpBW$+z-w|#*2gwd@`]rH7afbNB!zD-8$ R<TYaYFCNF:qX?U ');
define('LOGGED_IN_KEY',    '+qpm 3So5^B*Qhp%&UzS~ys^Et+AxDe;+QwB%biHjwMri5/TQ>jYu<3N(9FT=smp');
define('NONCE_KEY',        '`JCR>FGGjY{7Al[SGj8+9vz!8dGu;,q!,t%|FdqhU^|/S)lVHp@ ||MnW*.a$?Me');
define('AUTH_SALT',        '3u$=xw)/7Ud|bh`w*&hMC1=;K&+.H!FsfBm!)1C^t-3f_gJ`iOM6P,!nv&&+:QFR');
define('SECURE_AUTH_SALT', 'oc|V]Gx)1?r*OF=Bn|tk-Tt@giNq6@2 bh!xw+c>{%Y4:~zq_dOW7F]bqkJ8v$TN');
define('LOGGED_IN_SALT',   'tr|C{#C%gDI?S)f?8%dm*O/P-_pUm|c+gW9$IU1B:?Db1(ZmL*,r:%GaP8u:1F&^');
define('NONCE_SALT',       '.lT-M- [ B+N1R~sr7ZQ-;kj78Cy1sh~M!>n1w9J5yW>nCS,YDEo9=$s*b9Y|Yi`');

$table_prefix  = 'sf_';

define('WPLANG', '');

if (!defined('WP_DEBUG')) define('WP_DEBUG', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
