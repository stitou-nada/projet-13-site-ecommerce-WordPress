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
define( 'DB_USER', 'nada' );

/** Database password */
define( 'DB_PASSWORD', 'nadaSTITOU' );

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
define( 'AUTH_KEY',         '<!a*@9f5P6MG=#oP8g-{?Q*$_||{N== 2Egc+ D]FCn=mGfT0/m.ZRx*e;P/TDCo' );
define( 'SECURE_AUTH_KEY',  ' ;ODoO(fg|LCpqK.U{1ewLVJK:~|!K/^u`O;=|{LCy-G_+Bz^(`.4$T]t]qgqM%o' );
define( 'LOGGED_IN_KEY',    'Al}mk?lsWaM!i`49Q0NlPb&CxKV3EZ+lWQOpfk.YjJAQwRIimv0%u3K6^b#VW5|P' );
define( 'NONCE_KEY',        '~?znzLGO~$v}^AYL*#[k!sGTuXvjekAC9qZ0jztwJrfDQR$nrZ3$cJ)|A,xaY |9' );
define( 'AUTH_SALT',        'aDloY>eP5=_r|PdY`ib, 2wn@J_7+PNGRh;dQwE(%DvPP BH9yU=3.dZs5/z2}3i' );
define( 'SECURE_AUTH_SALT', 'Vs_Yo0]SMb*t_KcIs~BrsZEt6o32G> zXt(+1EY 8X;eo$/G7;TMLL%CtRco1$OK' );
define( 'LOGGED_IN_SALT',   'HT>a ixYM2TDHeMu3Z1S7v]A6$:O*8id>z^p?x~XA(ce!(0O> 75U L;dW0pj|yK' );
define( 'NONCE_SALT',       '%X}t1MhGGa>*Hj3`__d#</f,[bK(^R4OvFmU7mr?G;]dB)O]Q]]3l;?|)PU|J2i.' );

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
/** importer */
@ini_set( 'upload_max_filesize' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
