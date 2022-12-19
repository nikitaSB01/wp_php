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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'R^M719-g,HY^D3|yFS_O6<x$:(1Kz[P|+/;-)K!cZm&+h8<mMy~>iEdQ8[w=^er|' );
define( 'SECURE_AUTH_KEY',  'oP/F]WA^b-8fRzme^7T6dgN1NY.g2E$chMM19o%}3N;_B!.{$ xqqXl1HZ gQYwf' );
define( 'LOGGED_IN_KEY',    '4ZS9-mx|}2aP*}h@~6T^hI%ak{ySX2wszN~n8E1(nh7VQW.ONuLP2F[V^pM?-pKr' );
define( 'NONCE_KEY',        'xP_1[@qCK6c]@m.mNa<MXA9yatIfiw=u~rEcq[q!K_3AOe_3DlBKZP0rac;PJGP9' );
define( 'AUTH_SALT',        'B+WW|Ot18p;Ko:$-ht)[NayKi.OVW<z_nn7iWH+,76H~}K<]Z{ZydPp2DhsG9ccX' );
define( 'SECURE_AUTH_SALT', '7qdgwtt=$CVp/PUwo&gQKN!U)b@xQg:MK}!TfF|/4AoP2v4B~gIlh@ pmaG1<^s3' );
define( 'LOGGED_IN_SALT',   'D$a^vw=+4 LK.)$m-BBn2s5;_e05<$YrPc1DaIOtstUcDMfe$KqxmFsln4(&0~],' );
define( 'NONCE_SALT',       'JA?~&8atu#+&V%ywfQYK|SK];/tQToSrXZ3,U+[=-.-}f*G5QgfwD`$^9z7m3vF?' );

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
