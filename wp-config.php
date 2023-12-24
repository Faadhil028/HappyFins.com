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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HappyFins' );

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
define( 'AUTH_KEY',         'Xan<h~Fv0]m+a6G($_InQQm#{~/_s<.|DVrg`B-:F uf{{#{fhC2j{i]mo!&,u=b' );
define( 'SECURE_AUTH_KEY',  'g#$ ;rS{DOv|z<l+bvdfa@PD18w*kZ1.2F7F3v~_EGjI>-Gcf83D1a+37)(Qs[`g' );
define( 'LOGGED_IN_KEY',    '*~@oWX,zXY#S5oudY;rT1~!1ba|a-AHo=a(i|E1j3Y)n!G-+$A %{Z/}.YgB@q30' );
define( 'NONCE_KEY',        '7,iw~6E!rd[1j7 xUR$$S,4d&Z,=U9@/~-;rO2IOq~><1WsNugx*iP-M]&X|3urn' );
define( 'AUTH_SALT',        'Hq B,_X0zEM8cZgpZ*aUEuIu5J}e(|)9FstT?BGcYf V+4(FY4RZ$<Hm)/Vy%2zx' );
define( 'SECURE_AUTH_SALT', '2_o`jQW+c3$_e*a-.1JL6e:7 0~QN{=lzmS=WVvnycuR;Yl#xYY&X~!L:CD%btp5' );
define( 'LOGGED_IN_SALT',   'Uq_EXjqXd!,aQ-U]2O8b?S9/#*NuOeqYr.oT:.ow$cFn1j~r+9DK-)-N~@2z/LE$' );
define( 'NONCE_SALT',       '|^.#3:P.)i?idw:l2@3yj=I3e!z9_Qft%Cu&4qVBdP-+s@Sn-)$BxuW1FWZ|GZE&' );

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
