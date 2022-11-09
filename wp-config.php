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
define( 'DB_NAME', 'jobportal' );

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
define( 'AUTH_KEY',         'B+`lu93s?+];XYD**t5!W8u 3Z-!YdT@u0J**VwyvJj)1:If`lqI6/hA]Xp_KX~B' );
define( 'SECURE_AUTH_KEY',  '{2m#WbJ}z?.|mL:H<kL)x1:7r1-:G%:yg ~Y>[mC/N.{5`5uKc~-W6DVLl_pLfln' );
define( 'LOGGED_IN_KEY',    'r$W*y:`|)(9Ka^PWd){An%`(-dI#.1AAw (t=>$-a{FGYWhfFw@xSGD{#Y)YCjvO' );
define( 'NONCE_KEY',        'NF/h[4eT#tN432NeC:]Vx_*v/xW{tM3;<x714Mhh-vp#MI Ey<DxOY22]A+/_9~8' );
define( 'AUTH_SALT',        '{0;/AnDn-Bq(VN}?HvxpHlHdNZY}#VusRQ)U7um#*Kc+j+c+CF&~u52~+>&e|MvL' );
define( 'SECURE_AUTH_SALT', 'E1]$s<a;t@=DJi2uQd1o?RA@@%pR_0F$YBv{dy_SceL%&F*TxIFpA`QSfLy~V@E2' );
define( 'LOGGED_IN_SALT',   'W]#(P>|z >VEA,--{X]r#ndhg&qtW>SjJys5rXScDSh9&/S!<C_#oZ-1z<04>V~t' );
define( 'NONCE_SALT',       'R>^.-j>D!*HkG{OS^ 7 PKBV h3sifR,$Q7XJ>3,%k!$+cjz|GXNELQ ?CQ]Yo#-' );

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
