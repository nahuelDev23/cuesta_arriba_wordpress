<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' A<y+TbWJ?UEO2@)U}w8l,7_kXGw&$b2Tj,O/J5k8s+*]H+3!Fg:v`>I&RV/B#J9' );
define( 'SECURE_AUTH_KEY',  'DXPoD|wmP%Onb?^QE)=8d@f+=RsV]_Gq`Ek;~ bQ<]4M1aEDRL.{(l|Oz5hK3/{u' );
define( 'LOGGED_IN_KEY',    'nhfQJ+D?4C:IiRsC{IGD.t6,%2y:-!FHVq3V]Aga/bJqB7o~BW}.@r>EX&[M,]Md' );
define( 'NONCE_KEY',        ':m#k(4d=~I#m<?#.k&[:+.*L<C^TTBZG:&aO.uAjw?k+B79%jI(VW4f8mmH+p5Mx' );
define( 'AUTH_SALT',        'XgN?wE13?5=W^I3?{-;:.R$$S]We8lRDkk[`I4[-N=qxax2}>P}k9UfB}xkpZDg?' );
define( 'SECURE_AUTH_SALT', 'hrz_dv{RVy{Y7P_1N38.dA1/pgQ,mk~d7Ue#*TsRT2QNgyQkfISaWT[uqDcxDeFr' );
define( 'LOGGED_IN_SALT',   ']w=^5uj)();3yB%dm(y4ig&99RVs%/%AQai+0hWXyUZemBpY&8x,-Q*ZX,]nle5z' );
define( 'NONCE_SALT',       '`S)QTo{~haD!K }y*<2;d,t1}M.t~&afH p0^sNgWM`{<ZUgP9& Tw+8l$!,R#0?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
