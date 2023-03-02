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
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'roverm123' );

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
define( 'AUTH_KEY',         '>)qsrEL3#RdtVI/ZhYVivrN#2r53Nq1<bJ*Wh/w}1E9twC[AF5g-n(XC3M%MwH#;' );
define( 'SECURE_AUTH_KEY',  'Fl?#k(VPI!t(3Hn.S<Ur/G~SNM6@FcR+SC8fKx2FbP389_Bx_4qV^6gc2S3:gX@ ' );
define( 'LOGGED_IN_KEY',    '[97xqN3K`YRiiDhIuwbQWI1_ &?;K*KcaM8VGE1@W:vk[TdUMfy;gQ4m+jpnu-_$' );
define( 'NONCE_KEY',        ':<oDqW-&GbaDsI%*Pdkwu/0>N4:XSV: [AvC6$:A_r|^/[5vn10!G-_QfkFr!H4T' );
define( 'AUTH_SALT',        '}p G?hO7s?47rA/pz>@w|08nkuEz!tdiC]~jm?fM6TZ~qY-1C Zz=qU<f;Rp5(z$' );
define( 'SECURE_AUTH_SALT', '1Fu<mUi4@by-3=WPy4R9#9{kJxq)%Iid YaCH$Ngt#I08>bZ{c16vKriGboj>iZW' );
define( 'LOGGED_IN_SALT',   'oH1(Q>[RqBR+vIFvdJFGhN+Kj0DCLszIGCIT3g~2Lj@gd?+:-B54xo#w[HkxOx(p' );
define( 'NONCE_SALT',       '?h,V@wb&@-3K,ey2-bq>!KotoV1bDDYr$_linkL#Pr|,_*o05BNDy<ZFbFh_J9!h' );

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
