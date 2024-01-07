<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'M{42{Pl6=c8W@o06kBl?X6L%i,yx:PZNv@2y;qD9vO4:sAtph1P&FC,^m-U3XN%i' );
define( 'SECURE_AUTH_KEY',   '?EySNe+>)l(kq:*0;%(Dxmo]bRQB>k<#2X$ChXd.w@rG}OHwb!l(;RMu`!-N|(cy' );
define( 'LOGGED_IN_KEY',     'xVtRy?C3K,3A.y7(<q8$.*70T?8J_:uJsFBJfykdc|6PnKt+DYw3S7Yr](66N+Oc' );
define( 'NONCE_KEY',         'Z*>w-T:]V6]wN%(?@#7t_a*U@[s*hka>Tf$h9p*dS<Y2|`O%@l[9(RR!BPEV^OKk' );
define( 'AUTH_SALT',         'L_K>={mdX~hk>N~B89:)2tttDl`zD,CLZ#O?_p|/F/W9tZ8;|: kLbb/W2m)a25d' );
define( 'SECURE_AUTH_SALT',  'z.z{G=>LSMDGI*?{(#xZJU&P{^rr&G:+WR|}$a:;KUv=4q#zCiQ9so@/lv2<Z6:|' );
define( 'LOGGED_IN_SALT',    ':4UpAOKw|n8u$)VH}iN1?@>vE1EkF6S#Nzk]OXDh97wnrGcP@j9/bWr!277m~|P!' );
define( 'NONCE_SALT',        '=0w?08dv*4R+g!a6WsY}#@/q;w 68r(sMs>/oqu:9%T$A^edSu+oFKs@_{x.Z2^E' );
define( 'WP_CACHE_KEY_SALT', '-c.Eiu?Wxt1Op23:Iq)M%+je`e~5-lgxxH5HiJ_UZZ6mBejzvJ1D|7+H+nswFJ;-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
