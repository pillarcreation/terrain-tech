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
define('DB_NAME', 'pillarcreatio_3_terrain-technical-services');

/** MySQL database username */
define('DB_USER', 'pilla_paul');

/** MySQL database password */
define('DB_PASSWORD', 'webtech123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** adding upload path **/





/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!PE-U5u-]I|en]NMJ}0d-[YL2z)TSUQR|mAhCT&z7/?r~<<}UOutM_3|E]MTBs.N');
define('SECURE_AUTH_KEY',  '@O/[,jPsGD!s%SKv!X~#V8f9eYpbY=hX/ LW>^6|[+p??)&5bVDY!N.;|S8z5.Go');
define('LOGGED_IN_KEY',    'T[EEidSRv5Mkh!92gY[HB7c8d(YdYA+GDW/+6 !L37O(qZ#aI;L;.3H7:.6/2*y@');
define('NONCE_KEY',        '?I_M~|g:7Q0LUMHD{H,~+ n&alFN|<M;7yz*-F9[7:18]tND7-IQtC0Ugngy~7?Q');
define('AUTH_SALT',        'Og8kUU:w2sDF=4Xf$S8.~mlXS9enllmeD;^t0S8e6O2EDDEW0)gd+nj<Q+FRwgs2');
define('SECURE_AUTH_SALT', 'bhk6U[1z-- TYfSsQ+O FJ 0&1][xN/fmn0>]A6X4-e2DSw4`jog9f}[7PY>9Db|');
define('LOGGED_IN_SALT',   '2#+Z(LD]UIcgFn91MZUjIc5YxBr[X5Q^+XXQA? .fX-}*8-;V5>nTi,wyWC.Cbt7');
define('NONCE_SALT',       'D8+:F lwFX0wgi*nBXr,~@+*NlJ*#-1-?-^E}L>$i%JvC<@&T84>=YDY->*LiO[Q');

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
