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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_bat' );

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
define( 'AUTH_KEY',         'I@j6Wvd%{4bz=(~dT0{N*zDr.@3~A`z6+$aO*~/7H_{-/$Gvk,#G<UM}cO^U57y&' );
define( 'SECURE_AUTH_KEY',  '@{_m4ftD?[=el@e<sz}UOESpv$A0({YxmJ_hP?aW3>i)N5408uF{PKQ=_zqFWNMy' );
define( 'LOGGED_IN_KEY',    'J#1]}4W~P__`o+CnSERHRlP4A9pH!UE2E3K1=TIN=FlC%(rPf1U4hr/s?Ku$CvB/' );
define( 'NONCE_KEY',        'c>rpHtaW=YoW2NXixes#*0Mk>J-X>nF!U=70[GcX`IPG44%a*K@~GL$(@2[ri$6?' );
define( 'AUTH_SALT',        'I?R^xB1xv9o]4k5aVe(j1ANShs(75!6.<IsRSyB~~T:^,<g+DL[VFZ=])G`KK-[t' );
define( 'SECURE_AUTH_SALT', '_b@Wn]y6?T~]-v&buGf04+;6FHbqG+8[{OZ}$ST`=)u*rP4IccM{caW(t14D!||f' );
define( 'LOGGED_IN_SALT',   '>/w{v#RzY?~E[ ,ecE<(O`Q4z(~jWb;/B,6-Hn-TU-6YkrT,k@VBhE.bO]ZB5F.2' );
define( 'NONCE_SALT',       '-xr6K@~cklTg*3K]fA^,?;}]FODW[K-4eTMC)Ed]?py4[r-b[pj|yp=C D}M|U50' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
