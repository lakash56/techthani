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
define( 'DB_NAME', 'techthani' );

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
define( 'AUTH_KEY',         '5cY:Tz2ASRhz(ZE/+8OKk:qho)w&tt$O#3,Bh|b)+t%sk B$oV)?o)9H%@9N2OOC' );
define( 'SECURE_AUTH_KEY',  'WT95ome(hqcu@!].Y/Y<:p>64xHVr$zdjC13b ]T([-y`g1-FSKWKSN;cgsn:.Uu' );
define( 'LOGGED_IN_KEY',    '|tuj+x}bO,hM5OV=;;;@zOo_[CN<i3BXmhHrQ#F+(g3}d-S#ZPe;{pgd+6n7CVKQ' );
define( 'NONCE_KEY',        'm0|.L)ucj2;*G5lZ7mR{/a!38RZ 1/n8V;A_spkMZPQ{p+4Iwi^_kz%FB0iQQAs&' );
define( 'AUTH_SALT',        'v]8>>A_4Y8MYJ>GJ9 ^H@9tWmKk g6j|(A=pWohX# X?eFHceCs/:[6^4`SIqa]#' );
define( 'SECURE_AUTH_SALT', 'U)7@w$;UQ4o[c$4LOYvWVW:0/z>U;,+03HfWt}#)G`0w1c#M$gHwMx0tN=Ge9MR{' );
define( 'LOGGED_IN_SALT',   'kqA0Y84Gr)EF6bO4f1Iq@~&M;USP-bA2S1U^7myDJ#OrX+TP}(X!>CtXNJC?$#O:' );
define( 'NONCE_SALT',       ']jI|]*xVog/pR_2$[72]wWtbkuwwdyO-8S[_N`]B1e,=HAhu6XpvpPFsw*2SdRzy' );

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
