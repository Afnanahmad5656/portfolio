<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahmad' );

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
define( 'AUTH_KEY',         'Xkk#qht2>{tGP:!w}}OcUflCW@uR,v,. _@/.qdoM4?_iP+=)imCcMc9s^~>18-Z' );
define( 'SECURE_AUTH_KEY',  'Uv|0 $d9$kP;cu&Zy:E7Ki;7Q03boD5~5F^6UCf}3_0C79CcimwHlPMc;],u3:MY' );
define( 'LOGGED_IN_KEY',    '^J4a/:R!]pyZQGPUoRf{}OZooa]{0hN>?}2r8]}?kT.zzZi@?(hO}>6rJ5l(J?`U' );
define( 'NONCE_KEY',        '%7SlIIg/pdp25KTPSAGa hW<k1Tjme~n[V{TA$H_YV<F`P~72!WsEH/&IubFze1#' );
define( 'AUTH_SALT',        '.`k? M?<LS8TmQ:VBjVN?;kOzad<`z &FQRkFR#4Z2]~K#TusgO75q_ /iZ0 Fu[' );
define( 'SECURE_AUTH_SALT', 'yI9$VQZce91Vh1@SNv]T jGpHBYiJ<c#{H{EDMr~[?(_m%@ys+jU{ZHlq!Lk[FT$' );
define( 'LOGGED_IN_SALT',   '{([AV:M%=[3<D^BUU!kJNS}sT_E34cw2F7O%%E^w92ZG=b`nJ7dR%|G]b.|!tN%v' );
define( 'NONCE_SALT',       '^:]a(b+u[WbWmd)#^-9-P)a!kC`ad>h]/fbgio2K7HKi*O)DwtS`95ei6^*daLpk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
