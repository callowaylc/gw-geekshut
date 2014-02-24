<?php

//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/geeksh5/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_POST_REVISIONS', false );  
define('DISABLE_WP_CRON', true);


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_geekshut');

/** MySQL database username */
define('DB_USER', 'geekshut');

/** MySQL database password */
define('DB_PASSWORD', 'fe5180zz');

/** MySQL hostname */
define('DB_HOST', 'database');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ztuqxvpt5o6onozxcahn2syiaitx7rl4v7txghirsdfqyckcuzdal5ptnofkp1iu');
define('SECURE_AUTH_KEY',  'vwwfxagoo3flixqvtoiqsdttb8ip0qxtwoe1gpivct0jpgh88uz99o2oqxnw2q3x');
define('LOGGED_IN_KEY',    'go30cqgz8q47m3czsz2bnrwnnbirjjpinm07mat0kvzwbxvrukpojiisfc7ro0bf');
define('NONCE_KEY',        'w5emkfj0vhqce7l81c2q93nfevlhnvt8r31cegwudyw9kfcqmlj1ocxvomewpzlj');
define('AUTH_SALT',        'yijpehcsnna3vb6zdza1jyhxd46h0jx2wqp58koqpignccf4ar4bq0noz99vpodu');
define('SECURE_AUTH_SALT', '6i1x7i2ojtvqthxoobowamm2w4tjloufcd9gcljhs3xya1dzvpbtul2faifxnyzd');
define('LOGGED_IN_SALT',   '6st8gnkzjqv3ahzfdgvy7s05shkbp2obz7oxrarj60zvhusyaampwnfdh4v7ormx');
define('NONCE_SALT',       'gmvvdzpowti60zjfm2av2ncfv7hquvovjcop9azi3mzm6elqduj8k2kaf1iyv84c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');
define('WP_HOME',   'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST']);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
