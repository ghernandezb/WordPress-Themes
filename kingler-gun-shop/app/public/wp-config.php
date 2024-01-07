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
define( 'AUTH_KEY',          'd_e0rg?|/yJ/=xPM[X@VF$m@~&A[wTD4=+E(n-K<IdiQ4-!>ss.{N:9<{>7`jH;N' );
define( 'SECURE_AUTH_KEY',   '*~M{*k1R<YBHdA%/} ndsV7`:Am[qO0P?=v)O8zI00nPV.el!P!M, ZI G7ClSIF' );
define( 'LOGGED_IN_KEY',     '44%,:yz{7%x$A}(1m(V&/.%qm3(1Pa)1fKrMFQ1z>16IsrE4AL]yk9*:0rtTVcY/' );
define( 'NONCE_KEY',         '2_9A@kA7>,NMK+[lDD{jaSwsO)n$ZUVh4pjkcVnnIq#azdIUa!>m|-3,~/+{e<q|' );
define( 'AUTH_SALT',         'hTN8wlkb;B5H;P DtxT,}2q*dJ(=C/]U*1=(ud/;EvrX>[O;Nvi|a0?eJ{KEx>Bh' );
define( 'SECURE_AUTH_SALT',  'Ma?xz!0:(vf bVm>Xa<xNcgC9gtvaxC%)@XoerQ}Q$0Y-YrI)p%nG5?,XZSE}@[i' );
define( 'LOGGED_IN_SALT',    'D4-P^+TVQ65Z4E/FEJ-K UGY{@%hs4zF%S2FBFh7.uNyFh_q{IR7Lm2~iX;V}0Dd' );
define( 'NONCE_SALT',        'A{3!S_4}BKhIxQvtAJ9vu(@VIujN/rN/U<bfmi=}+=Ap3(hK86+ZMYNiTZX=-Z)T' );
define( 'WP_CACHE_KEY_SALT', 'lIi)Doa{0/5`?B@,u0J(2>G*TOT^8A-jYh Ylnd-cu@i6YsmuP9(.3!w-w}V;0K@' );


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
