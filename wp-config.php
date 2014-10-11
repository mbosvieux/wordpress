<?php
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
define('DB_NAME', 'politiqumod2-sandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?D~I4f`/pg]b4-|XJL5CNc4P6q,y&r?;#K`I8&+!G#q}4I;|k799 /r{`ym&:zfz');
define('SECURE_AUTH_KEY',  'L^x|B^;}o+m>S(Sg]s,N4p=;*T}]_dDN!EN|YLQN@0kQ%*_gW.;0 >P*Rd`;t0yI');
define('LOGGED_IN_KEY',    'l4@pK7|(@t~:757h4y2NPP(~A,==4r!%y.mtsL{G&U)>oRoCjAa},4#E=S|Dg;#n');
define('NONCE_KEY',        '(9fsq4y}QQ:H*4i+)RxATX/NR2Q4A&tzx=J9+!b+rC[)yDE)a+SaW1D=^JYb6QAW');
define('AUTH_SALT',        ',&`Xv-!>Y>Ao NR!/-Cs[-A2XIY^x`bVmpV7{UlX0MMuD=M7A}O_z>|(A4YP7%DI');
define('SECURE_AUTH_SALT', 'i)d%_5&i=vC!TGx<P ,tQ`0Ng76Cd:$t`fOJyvCXu^|Qf+e=_X;M+7jBk^f7IGr7');
define('LOGGED_IN_SALT',   ')$lO;oGNAsdNce^>o6s+%;k69,~.a?j?PGf+-l*V}-_?Y8+XUq(MuC-t6~6vEXdk');
define('NONCE_SALT',       '5Z2?NXVFP^Lw!6E|rUv#8LsbF%*c;Ec#T7y$1/Vo+6C|=af){|pP_T*h#Wz]]m5F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
