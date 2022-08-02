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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ia}MHR8O`+aHj6]}r,e>1:FbI|fh~8eDo_BPw*jOSCe#-W~J,$%Lw2KNG [J!M M' );
define( 'SECURE_AUTH_KEY',  '[{5QKX3.|L;uuqbB~0BE&)Xe6Q&KB|O2+Tq2PhYFqaUYfDr@NB*{v/Yod5KXtJd/' );
define( 'LOGGED_IN_KEY',    'WJ(ut5YS{mxj +{+Xrl9,oN?9I,nK6v#;MC5!-M Q97DYjp_#J`[Q%)J4C!1V!Aj' );
define( 'NONCE_KEY',        'H3F>%0c5R!*-MX8]RhtWN->A@P(m(U6fM3`leQo87]+(YhwcY+E9;2#c]LrrkscG' );
define( 'AUTH_SALT',        '*B>rt9gT.I3xlihS5vnb0L6U~!S;y]I]IZd/z$h}^^vn3pc8Or/P0D53Q9eNk 4R' );
define( 'SECURE_AUTH_SALT', 'A 2t<h^A]?us,Lr2:-X(F]zCz}@alSE`U>jGd+!zcU1vxfK<!*:tn~F~5~`Z,k3i' );
define( 'LOGGED_IN_SALT',   '-#C3,JZ1kyEM<uKu_pA8[JkJaCdpA`ZD6Hcd)NGBV2(c1=dMG/X`0np}?PdOU<tX' );
define( 'NONCE_SALT',       'n6EK+F1ZHTG17xSstb6vU(`ib=:.PrSqK#SChDIFIXEv%&$&LE@$ubVyhQ{/cz]i' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
