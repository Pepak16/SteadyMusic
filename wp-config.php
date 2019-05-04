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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'steady_music' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'santana01p' );

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
define( 'AUTH_KEY',         ',%7-]=qQm8(Un 1#OYQV6o;R>aq!i2G{2H|SmYkE/V]/w=1&>&!F+6Q~4to  | ~' );
define( 'SECURE_AUTH_KEY',  'tDV4yFrn-U2qVl/FQ`q@EkWJ1tB(+b1g7VWHZ5f%CCAeEF/*8b_U2lh;viF-Pr5?' );
define( 'LOGGED_IN_KEY',    '5H)]=2W9xYg6pUN]3$AX{hIE3xdY!av&=`8KKe d|&{xYXT#m=l8ru^YSIPZ~SSW' );
define( 'NONCE_KEY',        'bjXAV/b$]6JjXp l~:0ezF.ace48L|{x`#]rj;G$| XOq^ov~>;yHr3556<YI}kg' );
define( 'AUTH_SALT',        '${5mlmL>Dxz`h~l5LR^r%i+Z7J(hh-b*I`K:mPF9@ngp,pRg$[R:Y:+o)H!^PKq0' );
define( 'SECURE_AUTH_SALT', '^:BICmv=#rKGYl2U:p=!Z?3PfYXqr9<-R&+=Ex,dd5M6gd$@ml~zk|ChJ[M=]oI2' );
define( 'LOGGED_IN_SALT',   '<{E?Ws-!))}iCiB~C8>@xe7MAT+ZJ}p4[&_cHfh}ZYPnP%5w.CyF@4RJXr5@:#_`' );
define( 'NONCE_SALT',       '/=Kf:,zD#e{{TdZoE|q[zs^2hiF Zw$ZaZqGt:?w(A;vMn]*ve7suv}Lw9N4O.1W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

