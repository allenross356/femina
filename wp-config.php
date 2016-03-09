<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\femina\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress_femina');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Y{n-|gRuXQo*-$|#x|xhV/b9ru_3*@|t74@KvG+X|q%a5%L(/+{<ziF=|T$[{j`R');
define('SECURE_AUTH_KEY',  'jp,GQXpbKIhm@:^b~jtQ6U~Z5Tq^^|(<+v2!$na7X8R:V![aiu<O5+er;1b|-F2h');
define('LOGGED_IN_KEY',    'kca]4rGJ2XF:,M- +%m1}&`l<f#?SM.1XeUtJ9ViuFS<LS-Y.V>u:*hGWZY15J^}');
define('NONCE_KEY',        'ms$ud79D]Z(p,l|Q/x,R^wQh_|ceww[e!53)Md|jFydl/8!1;H*KBN??U,bQ|&qd');
define('AUTH_SALT',        'Y7Zf|3h[sP8Y%5,s8d*JLbUU35=!%iP,?-EwnOgwLzL<x-R3<s69CBxO$xVu+qgu');
define('SECURE_AUTH_SALT', 'xkD($egs0TEg9%g{UTilMHfcb=KRGHjQ0tG37N;(b1d 0x;PqRAL9|K/.+#kw_wZ');
define('LOGGED_IN_SALT',   'X)v:iiDc)8.)t,2|8>VC_EP_lgN>)/XBUxf?&SD<O<3/Y%F;K?o*=y! ?wP40c@Q');
define('NONCE_SALT',       '+#c$=kq-FIH+X+2Hf7+WJoCLS+o[v/.SXA:gWxkAK(J/b2ZP7`H&-UBeMu{-kvzV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
