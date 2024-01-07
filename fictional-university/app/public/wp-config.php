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
define( 'AUTH_KEY',          'ML/2l&nW9}^<(e($`M9P-U(;%/43YgTM.{f4g|ZmkB+7^bj{Igt?QLhR)/.q.@J{' );
define( 'SECURE_AUTH_KEY',   'l f_:k&:<2R-/%(> 3vdz55cvGV4xRA=T[&S:=-BL,LJ:}je>Z-MAWw9`biKX+5?' );
define( 'LOGGED_IN_KEY',     'j1N(~y[nPS3@Co+$h!t ,ymsn#wJc]m}>:UC`;e0lk%?;aJeO!JDX2N4u[jx$(i$' );
define( 'NONCE_KEY',         '_f=&oU!{H D?lo[/*D-m_;RIqE_SzwW#.g#M{gKGRIA}pAca|baF_x)ONfQulLP0' );
define( 'AUTH_SALT',         '0Zl#6myO<0o8!G>:7zJAgV(,Ov})38F`tMb `#Y7e}YkII89F}&yWyD0BGESlE=p' );
define( 'SECURE_AUTH_SALT',  'R)yQU&LO;wca>T%!%+Dv[Qb@W^mUGIGn2+R8b3OU>NxMkr2=rJ`hrlt44]l84ACn' );
define( 'LOGGED_IN_SALT',    'WAb)4rof6;y!<JA&mimi[A9C}wu1CCT3Kt5()2vD3M4;NCD+bom JQ}<@Q,zMui=' );
define( 'NONCE_SALT',        'q}`;s:uzgIj8OL(K*g1XJyHbJ&?_C2-nBi:./KKLrMFj?e!+Ej|m5x7YV9}n$f24' );
define( 'WP_CACHE_KEY_SALT', '}{o=hz3AtHUVJr~kw`b|cMx@jwwwG<vlDNjkR9gv%7vg-ieJh}0!#L5`gzV_8D-;' );


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
