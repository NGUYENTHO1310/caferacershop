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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caferacershop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ewZq6D3Z6G$L>f>bbq14|gHL?F=[ziI)HG7l|QyUA.xbOY.wMEnH_8-M(KB>wU6b' );
define( 'SECURE_AUTH_KEY',  'qLRvMoO&G%wJvx7ZGTOyOH(R+$=9~I3Wl{,epG{p`hG-&oGZg{` S[U0iVBAIL`a' );
define( 'LOGGED_IN_KEY',    'oQ4sfGjqT}x.u0pJVOCy{ll >pw=^2]f6t6ea:@A&SANfbqKb{}E,U1C&!TY!|q{' );
define( 'NONCE_KEY',        ' x[;,.>3oYm;V3X9Szi|a1V/oWN6D{,skj!I#?lA)Qk-N ~^+djGuw0%QFw9At*,' );
define( 'AUTH_SALT',        '4;,E20X?<-+:z!)&@84TE./9eFSHFXpcN<$rc;lX!+R)q4adFw~)->(2[P;XRTyP' );
define( 'SECURE_AUTH_SALT', 'c=q?DPF! 7dRYOE2G, $x`?I# ZK8VWb#9tC7AvG5 kB=AHgV[Xm^@w5|UdmObqw' );
define( 'LOGGED_IN_SALT',   ' dP/_Eeb!jhvb@aN#JMVUk*b^pXeO!0?5@xGuJFgLBNj#@&99,[M}^4c^4Tt%i!I' );
define( 'NONCE_SALT',       'H)UDuI>GnFtWb.S@4gT$vPJIz3?$V9jW1i0z[Od,P?gssb00RFGCz78L;GsL{5r ' );

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
