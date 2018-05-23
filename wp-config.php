<?php
define('DB_NAME', 'renatahagge-wp-cNfgGtVl');
define('DB_USER', '2Hz3NeGgqPNV');
define('DB_PASSWORD', '0xuZos31gcSkqx7O');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'wsWH3Sm2vTfp11CThrmgMWyrNcmrlwJMeHp5tZtv');
define('SECURE_AUTH_KEY',  'sYgT88CZjzyoEBsFDdxE9W7DCuvmBMayReX0Kh12');
define('LOGGED_IN_KEY',    '7FjhJAnnzAmIGLjHnkFt84V626m9vBPCxQ792iZS');
define('NONCE_KEY',        'l4HPTZ0B3lNDXYEbxFMRiakfIMhWnOeruBtbgv55');
define('AUTH_SALT',        'MrgGF2cy7e7yQfN8FUGf30rIMHiKWxNiII5YVklt');
define('SECURE_AUTH_SALT', '0enBcSBUnkkAqWN9hbP8yBP9g8qV9jJH3FLwrPTo');
define('LOGGED_IN_SALT',   'HBbJ9xW5iaBoLpmI7giI01wI403ZfI9uJ1RbdlVb');
define('NONCE_SALT',       '8NGYxrsGTnPjlfBXFKmgEbSWIQWDaq0Akn188VRz');

$table_prefix  = 'wp_53666465c9_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
