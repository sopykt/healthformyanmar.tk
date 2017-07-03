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
define('DB_NAME', 'wordpresshealth');

/** MySQL database username */
define('DB_USER', 'wordpresshealthuser');

/** MySQL database password */
define('DB_PASSWORD', '014369929wordpresshealth');

/** MySQL hostname */
define('DB_HOST', 'localhost');

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'hO7`h!rBSWBqtmpP-x8|9+OyB7]$Bh>o[3W@1!nHT`nSG+/aM4xCV:Sg[3r@{t7m');
define('SECURE_AUTH_KEY',  '/epNwuxeq=>#_9|4:u]Jt?][)-;h/&~AK[<F+~]bT(a#[Xl@Rcm-$Xl>?|+m|svD');
define('LOGGED_IN_KEY',    '8cm$xTN+.7k1CU+Mg$&-HBYs35|/T9R43@&knL+EIT!E*my(M|12B[t~T!?I<A<p');
define('NONCE_KEY',        'wX,5 SW-+Tfd1qZ1~vp{7`Y-t|mTf=JVQ()g(<BeWAA6XNai<2u|lqZ6u`MP*Y0X');
define('AUTH_SALT',        '$<qWlz(]X7zTI<hTkc}j.Ayz~3!WNwuOWVTX[(7.lS_Ia$|oqHaOz=rxq~ a|Ah7');
define('SECURE_AUTH_SALT', 'a-gUj:T 0_DS@nYsb[N{-b!ukiHA)p:Y5$w,]&TivzK| ilv.1&~>J!sbJD7~Mpn');
define('LOGGED_IN_SALT',   '33$G] :HWkkjh23NA:xTf-hk@!xF+3=Oy?-8iKTp53r+|tK+J=v<1>[gxH=s/z.!');
define('NONCE_SALT',       'C)*iv(UM{[cuPc6g({(=O>}Fi#0d@|}6.+Ko:+q$m(?aK8%&OR&#3rY$]<m_hO[[');

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
