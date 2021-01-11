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
define( 'DB_NAME', 'gobenalaw' );

/** MySQL database username */
define( 'DB_USER', 'gobenalaw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gobenalaw!&' );

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
define( 'AUTH_KEY',         'CMlZ>t:n3A$9O>*lO+e>:l;XLCJI{qGH)K9(yD-}oAjikD~JzyIm31w6?}c2%]3/' );
define( 'SECURE_AUTH_KEY',  ':n.ADnNEZ?5^4/_=4TQKqOTU>fk-RPuwUz8uAww)v31=R|GvDyw2XN!=yXtQ/ c?' );
define( 'LOGGED_IN_KEY',    '{ l[IW#_%3m~6R.Ah2kJuE1$V%w$xO9GOyD.K~K2jbeU6$BATBp;7z61<xddZVlz' );
define( 'NONCE_KEY',        '<QXLj?e2SUv$ fxf(bg.w41a[=c8>R`+r9gMQ$q]z1hFXg~*xvl/AgmRpf}UrU[F' );
define( 'AUTH_SALT',        'LmW57s?T}x5^ (6ZyVOWll.CmdfV;:HV)r*L-Z%.0!Oso2QpeLr%YV]J18<[mD; ' );
define( 'SECURE_AUTH_SALT', '6q_qs*-$AH{c+!bhN eI7GP}([g3va7//k?h.d4g,`dC0`+[y:YC8CjNkF8Psu9h' );
define( 'LOGGED_IN_SALT',   'Zh`JRYvcl4<1?BOq.]/>zK,.DvqQ;B5M:iLRV?t@_oi14^60p Mx2k|rpud**Z7e' );
define( 'NONCE_SALT',       'wUW;bf=YMo<$Eg~z^lw:iFOv/)#|Uc@w8aZHxIYH)+uqCcMB=<8#sx/2K9xZ:r/{' );

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
