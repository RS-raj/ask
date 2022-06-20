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
define( 'DB_NAME', 'ask' );

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
define( 'AUTH_KEY',         '|{xRZg n}l|H=(D9jBE HN/*Bh_/hb{P`ln]g.Y][R^*7Z-I?| ZL1sA$W.*3wbG' );
define( 'SECURE_AUTH_KEY',  ']eL722(6Fan-N*Tg[{EAvW3E~I83ujCjK6$@Y+=sX|f_<~9Yn%/kIuS(ErT5J>3a' );
define( 'LOGGED_IN_KEY',    '2~ `>5l9}}d0Q,n>PAU1`$|Vd79._d+KPU.j$ $eg]RH%*1BB4>NXg65sEf|a!0G' );
define( 'NONCE_KEY',        'Y(uH0DRcV5_&q-<[iY#+?^S5R.(~.E(?yH>6<hOb&9r!$0rv*ugzD~kK1%<bTY4:' );
define( 'AUTH_SALT',        '<K}(%[K2IHWmUReo9a5/Rtg7/ovPG;el/7Rn^:dWk =GWv7~H955yj`aO[El0)Ms' );
define( 'SECURE_AUTH_SALT', 'Bl+tDBJB3BecSijRGxk+dxhON|GbyXc3DZ4SE}e |=qH{#)F($lY@bJU|(Tyu6SD' );
define( 'LOGGED_IN_SALT',   'Jn4q$&1[m.F%s+GB,N2QwL@*nL~8sL:V8w^LD@A;*2we,gHJA`?^vgcaGxt7y&lz' );
define( 'NONCE_SALT',       'Mp,m%Muz5S54uEwVk>f%]m)dMo#hurto<c }M!T][>/p1QmXZsy,<aOs;8)?lJ#C' );

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
