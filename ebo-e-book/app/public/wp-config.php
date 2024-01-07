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
define( 'AUTH_KEY',          'W#*KYume]vb49A:FGV9noP+A>Pae~cJeT6o%cy}qp%H/ 85GZ|&F8<+71G?asd(@' );
define( 'SECURE_AUTH_KEY',   'Ui)28$/ZFW(hO:0|]~yV#)SZu{.RR1yhY C&Y<##4tasA+0FbxT90-:#6p+ZIzfg' );
define( 'LOGGED_IN_KEY',     'pg&lBSxhTt4atzY *cN^$3<qcm%xcpTmr70j!e%H!:CyBSpl#G@EkZ@`=uefeVU:' );
define( 'NONCE_KEY',         '224.xx:&Z4}{~,`WT0a[C9H+44R&$!$Wrbi,k1WU%LW,$z#O&`ua=;g_<[[.-wup' );
define( 'AUTH_SALT',         '6u|LqxV?Yvs61+3h9lMzH)4A8k#y&b>@_d8+/>iK!BsDVPosH,[WJ!<454DrN0Fl' );
define( 'SECURE_AUTH_SALT',  'k^ EPCyAAt2+rr$[y ZC46?$BS:[6vOl]q(gg=dy=Dkaw2)DSGkIYQ`q3-;O,[ub' );
define( 'LOGGED_IN_SALT',    'O>QJ7sm0/5%$1-{1osg&&oPf[D><0 {:_VmrpKKW^?b:(Tl Uo Y~>_bsp6$XyT^' );
define( 'NONCE_SALT',        'L7+>[r sZ9z;;L?Y#rXKD8u(m`loxo1/MGF/NndQs(# no%cw8*wr|$S=KNx_(hR' );
define( 'WP_CACHE_KEY_SALT', '74:83} F.BeXm:tQ/7j*-Q-6qb(x5:1Gxz/(N[AlTB]uN%!< lHV,*bv1oEtJ[z0' );


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
