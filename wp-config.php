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
define('DB_NAME', 'cfsdb');
/* original db_name cfsdb */

/** MySQL database username */
define('DB_USER', 'anthonydb');
/* original user_name anthonydb */

/** MySQL database password */
define('DB_PASSWORD', '4QYKAb53Rms6E3pf');
/* generated password from cpanel BMwo5iMe7cU9 */
/* original password FnVCMLmdQedZqfuJ */

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6dlovP_c-`mMm>X[CGYs^WYl.b+:O+MIM}yyy*Cj@+I_3]FT-27GyxDVrYTGZpea');
define('SECURE_AUTH_KEY',  ';>D+=.x ,d3a{A?K4ovMvR]:g#([!6FVxxmj-vP{AgzUdBCE.7SkXBcjr5 KjfR[');
define('LOGGED_IN_KEY',    '+41fdnW<Y|JU}_fKkb2|iZ[ `_h;~U;?8k itd_n^Gr@NY+{8*C]l+,Y#8|x4-/]');
define('NONCE_KEY',        'P@:&U%;,U1Bg}=Ostsv-@)Li&ok|5ROtKcqQ==cgVj%[q`8TiMKm|fXUX-0r*g+-');
define('AUTH_SALT',        '-YasLGQeV.S#lmbi(b@)H4 --1(YnhQ%pWT?bmBo<-8UjUA~^BhCuy[NKw}PHb-B');
define('SECURE_AUTH_SALT', 'q?Va75Ho87/n/RQW:]/+TY<8[Q:*E)Os#M?t=HU1W;U|{AYe,QV/tkj:fNWs$ukR');
define('LOGGED_IN_SALT',   'f=DOcThjzTZq _A6++1.q`3Qx)f; s@Y_7L$6qRu_&?ah^urLM}|]DhYTh(Qz= >');
define('NONCE_SALT',       '4[{R?xEmr902U-9G:=<|/nE,&ZHb Re09|z}]k%GoOE>).?s}$+|#GpD5A>p_-8U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cfsdb_';

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
