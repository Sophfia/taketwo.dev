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
define('DB_NAME', 'taketwoDBtv6h3');

/** MySQL database username */
define('DB_USER', 'taketwoDBtv6h3');

/** MySQL database password */
define('DB_PASSWORD', 'TEPB5KYmhN');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'PATiS5+ti1_:1#4[48|s|rw!z}B,7yjjUQjAT.Tm6j$M^3jEX]auHq<b;e+S_5tD');
define('SECURE_AUTH_KEY',  '1!V:@!kNN4,nI,@0jBybEy{Y>BrBUP+;ixLuIf2iHa]6emx9HSt+<PXi]6Hmx.S');
define('LOGGED_IN_KEY',    '<j6m*Mb2i+L+2Xm2LxHX]Dp_S_1ap9P*;eSh1Gw|V~:dwDS_1o4R@0Zs5h-GV!4o!');
define('NONCE_KEY',        'P^IUf,Ajq$LTe.;AeqxAHTq$.LTfm6Imy*;6Hmx*HPai]6Damu6EPt*<Pai19LS');
define('AUTH_SALT',        'Q3c3FjuMy.PqEr$IX.3yET+]ix2IuLX.2m#Pe]9l6Lt.aq6L~;Wl1Gt_S~;Wl1H5');
define('SECURE_AUTH_SALT', '8-O-5hsG@}Zo0Fk|Rd[gwFg}7vBQs}g>Jv!vMb,Er$Mz,Qr7I${X{Am<MX,3f7A*;');
define('LOGGED_IN_SALT',   '3^P<AuLuP2yP;9*S*]e6Ht;et9x#ShetLa#5l-GV_Zo:Dp~KZ#1gvCc>8g0Gs!JZ|');
define('NONCE_SALT',       'eHiAP+{Xm9PS~;ap5Lq.Pe]9m+DS~:Zp5Ot_#e]9l-Od|8k-GKZ~:Zp8O-[CR@:Vo');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
