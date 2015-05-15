<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WordPressDB');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin@123');

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
define('AUTH_KEY',         '|ag)j`Rx8!Uw][#E+]jIgc}Bv@#xsE~x[|F}X17<A;N:JGJQR)j=(F3Jm8W{Izjm');
define('SECURE_AUTH_KEY',  'e?ayrE%,=QroXz|MgzTd w=DeKdR<Cdu.y_}L,=3d7{+/bCCN){/?xj?CTxa|+m<');
define('LOGGED_IN_KEY',    '._e} c1pJp#d([(-4!/YY)*GS?cvui/&rpR/38-oRi-(wVX+)x72(Ol T4YQ|M}2');
define('NONCE_KEY',        '&wvInsN2JO-:gRu{amdiv4T-#E!R$^3EcGS-AB7^4&$=2Qf+O,=m!nIGO+4Ljt2/');
define('AUTH_SALT',        'WmNK1- ux$+I-JV=2%?q*KL+bhBtSJh .2OQ`~@*|ORQM7=dv`FbH)Rr$Gze|HG$');
define('SECURE_AUTH_SALT', 'gdLqONq4k 2.Q?nl^mVVCFI+4~1pfM~|%J&nLG<PiKd/9G+rqJpz9jIYPQg-=0pj');
define('LOGGED_IN_SALT',   '4KRfCbdJy5DCp`Hdm<Pg^98NLH=?e&0V hu9+0DLlq?lUUd5ahx,$<m!_t~w+S`S');
define('NONCE_SALT',       'ge4zoY]SeKdg,7PRGn6)$qOSYi_-a&wc$`D#e<(pBNG@|s;:L61m,Y_2x![%$!fj');

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
