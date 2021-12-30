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
define( 'DB_NAME', 'wp_y4aey' );

/** MySQL database username */
define( 'DB_USER', 'wp_h9wkf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nw3Es6iuGq&6s7$r' );

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
define('AUTH_KEY', ';w1~3Y+hrky5|730UJQ09e[WU6V]/lK+nC|4;ZrI@:P!OwBeADaFC-_j/M:XcUFR');
define('SECURE_AUTH_KEY', '-)c927mKK|49ph]8IDX)AAK3o65O#DfPyS+I7gW)4[~)zyX*w&[:k@yCj0CyRiNx');
define('LOGGED_IN_KEY', 'hIP6%-dTWO0%JZR14f52_pugfyl6%*8A08;hqr[)11#BXi@Um4*P33;1Q8]d+m25');
define('NONCE_KEY', '4W-LyQb9~|!6#W8FGkBw3z5tlbX11qYQFm&6l&6rqW](#FEN2#7@9#_8N3V1%~V8');
define('AUTH_SALT', 'Aky01@b0f/C~(K6]s[clV4RS0/M+3y6&(K88_7DBJ7dDsYFJT#O:yMS_|/1_0)_g');
define('SECURE_AUTH_SALT', '8Tl7%(dEMN)9L(Q25425)z8~(p4E8W~1U0@pI)oJb@vv|0lGMHLbqh(Z0(J)+557');
define('LOGGED_IN_SALT', 'yfQ1466;8DVg+GZA:D7zt9-d47rwv&:x-%APY8577*C;Ladvm0l22yY2-MURDH73');
define('NONCE_SALT', '1ak|]7f%rMd;dSU6@1FU#9~jGbH_2i@9|%#O_iX80oHe2hBh38-zQ:7Tas4Y87:s');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wWiXV87s_';


define('WP_ALLOW_MULTISITE', true);
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
