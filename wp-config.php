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
define( 'DB_NAME', 'wp_kmcbv' );

/** MySQL database username */
define( 'DB_USER', 'wp_w7knz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NZ3z6ugAu$BhLV8~' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '|#P)_[@#ws:dJ!tz9/I+m(C]a3np*7%F!B5%XZ9+yY#G&xF2xa*ej3890OGfBB1!');
define('SECURE_AUTH_KEY', 'b1H14:pK7-W3ll2_OMz110;Z)jSL((S:sD-w5yYj0ajG7-f7S3M!DY~)0642b9oR');
define('LOGGED_IN_KEY', '/mZx2N0PM-Y0A_u#H]fwH]884PDZ)wrg31%wB%1|&Ddp31w51)U+H1t--5Z2C~~m');
define('NONCE_KEY', 'k3ZwV7lQjswLWMYB(6Gw3*+P!(T8/|-~6A/|&w7*1uNSECE#hai#%A];(*g6+OY7');
define('AUTH_SALT', '7:+pWp5b)%FKWf84m62s%1lL/Xv[+F1FIc4U*5N0|0-:xz8;8p/PNwdI[5U3Aw(!');
define('SECURE_AUTH_SALT', 'FVO7BLX@78]]M8R5)@29t76:X[2i[4c1hu5%I|/%QES+1;c#ebmL_x15F39cBBp&');
define('LOGGED_IN_SALT', ']+)w/7GB%8y7VY6l070#IL8X2d45-Nb29P&!3xgo)I0P&y*!/mR7iS78kd/0i]Vb');
define('NONCE_SALT', '1h9EH]V_[jaXD[s:8@*-GI~4gV5J2&l2%y-Ev_n]6zZS~1NcxQhj7x4zn:PNee:O');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pMCuu3ZX_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
