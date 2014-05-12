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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'n^HEpx-jbN6[?a*t^9<KzAG/?Fa@jZh{me$0+Gv2:+Cc%Q[ZH2h(hvj(Im(hO(#l');
define('SECURE_AUTH_KEY',  'V=tlo/.9&OkG5=}k (%,{`W#_ow@?wQe~p8jDp5so3vh!*=jSZw59wYtw@29EeuJ');
define('LOGGED_IN_KEY',    'j3kZ?i>JVXs<he^-+ket{P|2k*Z_esF>xd[gLzCqO8!d7Kum_Y~,%<wkLZ>>!|95');
define('NONCE_KEY',        'iY;Y#*zAWu6)P%D0>fC|l|=Y~k(]/r1*Xu~s8a-!-E;+8}yb.><-wH`)-$TF?ii3');
define('AUTH_SALT',        '%+8zaE^Cn:Nae(H^/=G 9MuXlXhr6qGIA*P 5 [k-4,y$`lxaSH1;y0juy&n{l|`');
define('SECURE_AUTH_SALT', '2P2e*bztrsV/`))|U)6FM7#28HD1i(2jkFf!<< #fE@@wx.7fPkIBP |c}_D{;9-');
define('LOGGED_IN_SALT',   '.V}&6A`c/?X1BwqJt=<Y?9{yrn5hF)j*Luok5rYsd/mmkP5KtRs}|Tos1V rCMQ@');
define('NONCE_SALT',       '.2=s){nljlU3,Ykqj+5B4H}Uz`XF2Z|[[z?@bhXxV1{,TvWv@R$FJF/ %VHriEBV');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
