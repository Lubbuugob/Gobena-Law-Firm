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
define( 'DB_NAME', 'gobena-law' );

/** MySQL database username */
define( 'DB_USER', 'gobena-law' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gobena' );

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
define( 'AUTH_KEY',         '`)zFno(@X^dUvwzyli?MDy`n`l5ke+1{*2u1BwQc|-B6:T,N5g?Xbs=r8D:4Od~l' );
define( 'SECURE_AUTH_KEY',  'iS.koGz+m5o>/%hvt%+lPyRVD}CB{a3rT&t+8;LcyIq+lLuGlKPvys}AP#q]NSJh' );
define( 'LOGGED_IN_KEY',    'c$7nCk743vf=Cl6ib]4H~)DX6[{-^2Qudp`xcFp4py-K54$HdMtBHX^$|a!vgqP:' );
define( 'NONCE_KEY',        'iC74<a.p<>r(V0-<*O:?43O8bhDquO5eT[pA.[wfbv|c~$R~KMf7 >9!r2C#= E ' );
define( 'AUTH_SALT',        ')cK%0]$#8cAMGFkA4}FwS+Y<jr/s73f;S+2b9-_l(U$j`DAf/q^J@Q6Q]*{Qv1uS' );
define( 'SECURE_AUTH_SALT', '[}%Pn |`&3[|q5{XBN4)zU@(@NTp=r`56WX4XgB5j,`Y;sVgZRM34`av[K6AOmf6' );
define( 'LOGGED_IN_SALT',   '^o GbIg!yCVW^.).kLW_*j9jd1(p* M=r/PLvl2xSO~Z>1R_);FZ,_ZZ)$7=z,^T' );
define( 'NONCE_SALT',       '7^6TFT6tI:IR?Q(,kI|@4d+)(rqnT}h1voTJECGwFraPa,MW}Mi?QPnv0p0dxu;?' );

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
