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
define( 'AUTH_KEY',          'nm-,u!#dNkWG)*dl8}7a5dbG|Q6b;.ox4il}`;&g,A>>u-43Js!jR:dWE[8~$)qB' );
define( 'SECURE_AUTH_KEY',   'gh`$Z-};s{q)d;LlF&*#?vQ6+d+a;gnFitiy8v8D3d5?S=@BK1ZxegZ{-cCR.0;`' );
define( 'LOGGED_IN_KEY',     '$KI+K~_]Y731bc1e;WrqgK9nf!@nME8ox[~1=W=Xb%XP{u%=b>9W;^0M.H22h1>d' );
define( 'NONCE_KEY',         'eT:KNd[KTK#XP|<Qk}_CZ*142*ELpB#:!)du:;0Y2T=yia&K+}./ ;^;^q&(eaft' );
define( 'AUTH_SALT',         '$TV~Z<JOKy*%J/I!.%$F-)UQ$L<W!W[?RD}4pxq]3q_gV2_3l&$?0~4jx>Z%4 o^' );
define( 'SECURE_AUTH_SALT',  'Zw:1#}A:|xM?Y??uOy%~l$s_zMblQ3{)%XnK/KM/SS=&I$]Ajrpdin/yiV5v>HM{' );
define( 'LOGGED_IN_SALT',    '4CwEw|t`.Fa`V4vNv61&~ovFOcY3~%n6 C`M2_<XZuEmSH_<t-8`J);~O=`4tV0a' );
define( 'NONCE_SALT',        'mlq{B,W`_nZ/^JxX2[~9OmjuBq9R8,bR_WVz4}$GIesF0T,d8i0r Jp!3SmX,![N' );
define( 'WP_CACHE_KEY_SALT', '/d!;r2<B!CCJPg5~3/4!O]lVjywI~Y59]P (B-ULb/36 zpkN~rqS,=f-=u?`Oc ' );


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
