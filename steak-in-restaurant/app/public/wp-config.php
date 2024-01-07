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
define( 'AUTH_KEY',          '2ZI4uk@~|?Xq0Hwdmb:SeEX]H9Qi97*6<sHbYdI*){b@QH&ay2^R5Z#N4OHWKVbD' );
define( 'SECURE_AUTH_KEY',   '3r>=SN?Rj&#QG r<fQ(a$;W(.^p_RgbN5*~}3IPQ*oBf##gY>fClTU4y^t#oOV Q' );
define( 'LOGGED_IN_KEY',     '3[_}LzBQPj<_fnM3&euM3yXGgM,!JARmu9%ZN=4vOg>mT}?Q=]Dvt5v0a:P87CxL' );
define( 'NONCE_KEY',         'QpVp`k[|K@I+nyJEhaBidK5ayR?(hwux9|GE<Zz1.7FTvg w)EjNt3xAaDCha</A' );
define( 'AUTH_SALT',         'j`8)k=q!tAO]8,5@:@4Uz, .@>+f^+1(uM1x*raA*Hf)%I0&5*,);F<5{pn0ieWL' );
define( 'SECURE_AUTH_SALT',  'ag,&zx%IE(5t tM4&;l1TjnO`=C|^WP8Z[37i40UBN`:S$hA .|WeOas J)$`T<q' );
define( 'LOGGED_IN_SALT',    '%Re#JJ}=Z#g/RJEoe3zuX`safW{Z+YV;Z:/5WwsUon0`kf(d2a0V,0LgzwE<hYQ+' );
define( 'NONCE_SALT',        '4=RGiG4VZ!,vvq+z(<W$SV[(We`>Q=F|ZS,L^ 9(D:WCzUq@?47Cs:As(R7tL3LH' );
define( 'WP_CACHE_KEY_SALT', 'gRq-sUR~@fa<h[z-U:4^M3]bI{9A5Z$&Ut=A`a+>!U 0jhpvwX#%2,$k$@Eb.`}#' );


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
