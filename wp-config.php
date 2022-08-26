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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't8G0H):[T@tB6JJuk?kIpICGFEczL4K]!Vw.Hvilge;U)-x#p$(-a;Xb$mxT3+QS' );
define( 'SECURE_AUTH_KEY',  'Q)&=*vyc;ec<fi)6$mR,mf/x4>$T&C G=BQ80W:E?Q3C>8LCQ2v,0/m,9IGQ9.Vt' );
define( 'LOGGED_IN_KEY',    '_T0 /@jEsM=]p* -|UqJ}~,+S0!/=D#yC|e3G1[2J0_+52}kex.j_+]Q=4D>gkj}' );
define( 'NONCE_KEY',        '+,BV9DRF;}8#4S*DiV{P2XARcp+TR2xiB}*o#V7)wPEG=q!.bu%K^K0HUY-Ho4N0' );
define( 'AUTH_SALT',        'k_<Qok/Bo_10TX@jcE-pNLGOk~]<u/XT|Nqh[l7yNLd4=| vA?h{ O%.eWEu?HAf' );
define( 'SECURE_AUTH_SALT', '3zWlRw3X64Iuz0=g4M@@J+?fvEJAeQb =~LfW(Ln+`L)0!@kj+FP+7%yXf/L`3W1' );
define( 'LOGGED_IN_SALT',   'G,YWnF;H7;pw>>{{DS8_ezt!*;W&=q&F7Og qE(Kb7/kQ>bX}Sf[aOZp%!x!yC>J' );
define( 'NONCE_SALT',       'YZD`*H3,54b$oDT1zC+T7)Q*l.Td<WoB [,8*h|}21:r!${g~KK7_UNDtj2>p%DK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
