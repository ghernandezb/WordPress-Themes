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
define( 'AUTH_KEY',          ' vF3JRjX6@c(ZBg03U^1|^%]HUWMydC!HRiQg{SP=|iFsv}mqzqyl2%skINFynTO' );
define( 'SECURE_AUTH_KEY',   '~}PEoyRYp!ZX~/0r*_w:Cx;v3 e=s%|LkBj&&NgxoBv7ge^5+BXleS:#$,PYmj_@' );
define( 'LOGGED_IN_KEY',     'Vuk]pQ?RDt-eyWOgZ9UdI,Sl^20kZg`j~$0mj|Pq,=K?oi|z6I>-nsrYVB!K{3g|' );
define( 'NONCE_KEY',         '&HtgC^zx;jEh_2>tG3!H+c$`|;3#0uv>pd+OevQh&ne(V>:z|2}rDMLz%?JL5[K.' );
define( 'AUTH_SALT',         'i+R=<v#H+L8<nTy^Xiwbc+-znr,=nCq,p#Y4P.T<}:1hyt%~hT1}8cmh^Fal>#Gu' );
define( 'SECURE_AUTH_SALT',  'eg<+K v=+sUQ.~c!h8:u87W5-:w,`O/#3koR*6*5?/bEP6-E9@iwCZ}8ESE>`^*^' );
define( 'LOGGED_IN_SALT',    '_xPgUbEB%%ez[gK5X6@.-[e;RH }9MXYkVzfbD}3qKrfA[aArs<>c+L$;p~KIBZ:' );
define( 'NONCE_SALT',        'orftH][W77xwd:Qn,CCn U/raoL%ip3s551ki2^kxAvTbn/:j`f/*vVG@%0 $tz^' );
define( 'WP_CACHE_KEY_SALT', 'LXFnipB916LMo^~>d`cBD{V=7sF:#V!uw{.{]*d+Kt3(B}]iZlE@?K tUdPT-fwP' );


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
