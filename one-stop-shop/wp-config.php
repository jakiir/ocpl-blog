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
define('DB_NAME', 'one_stop_shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tomcat');

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
define('AUTH_KEY',         'jWIo_qND%?uR)(Jwh?bI?$ xVlL>(E(7r^/]KgV?g+BS5A0mZCccTe`{K_%f+kAU');
define('SECURE_AUTH_KEY',  'a(-`e=nA^c5^ua ViMjPga*{-K/__y%pV,v^[=7dd.w Vnf53FMKZ,oR=%mTQ nd');
define('LOGGED_IN_KEY',    'B@R#6~2yXzJ8fthVbD=%~P/)5;uQmItVzb[n[t<5>{/PXAjwb3&(yJRd C,$!W60');
define('NONCE_KEY',        '|wjmo,ZET#*S+]{:m=~y+;9,*QI}phP05 :~-nqe1K&,y8so|EMS4![mthOc?{@5');
define('AUTH_SALT',        '1r7^^I)<N(w9t1q()S;w1U*NcUjg.LwhgV/`t}XkC_vO_~5`LsIvAuhoBxk EHMF');
define('SECURE_AUTH_SALT', 'Fb%x/dC4!c~?Xtosb/y6./!:#P[yi=-1L9WXs+@TWD,}U`]6A$@#A {gvv#F~H7d');
define('LOGGED_IN_SALT',   'c63 J: wu_TI;<5q7J~Ip GNo}Y<<gKra7N#/.Ly|3upv_y>Z=1yJY!A:K1uR2xL');
define('NONCE_SALT',       'cHH`!P]#?ugQGL4h}Sp:MF>PGNn=n7Gyt~Ml2{..q~`!^O#*J@R_}HG=nNY*J#U_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oss_';

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
