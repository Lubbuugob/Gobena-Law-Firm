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
define( 'DB_NAME', 'Gobena-Law' );

/** MySQL database username */
define( 'DB_USER', 'Gobena-Law' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lubbuu' );

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
define( 'AUTH_KEY',         '/;>DKbz5g$FHyZO}aRHkizYue61Fo2%f{Y32*.;.{>bN`(8yH;c8 yKZLE,2u$;O' );
define( 'SECURE_AUTH_KEY',  'czA`1REBk<K/|Po~OX`z r|[w>:2/taP?*b)e&TP6JNarUftaiA]pRg3yz=uVDq}' );
define( 'LOGGED_IN_KEY',    'oi}oG|Bu5G FDos=GEO~`e,zpM7|r8~6/bMp;4ik+~)Wi~a]zbQNe$my]a~7OE$q' );
define( 'NONCE_KEY',        'z)|nu>lr,.Gvvp7^h67uJ{JNN.#||!4JDN@<*Lb|.[.rS=vqmbq?l`WGt9>#~%H~' );
define( 'AUTH_SALT',        '`gl9eq#rD%U5]h&0Y;Jf~A<]B8QcTsaK#LS6R]L?,v.vp<6TyL=~=aU3S|?Q4kFt' );
define( 'SECURE_AUTH_SALT', 'l4]SoDdYhu>+Ta~kS~]dTLB;e7&.C5s0LL&sX(e> ,u IGua[(yaWl:TRIgF?I]P' );
define( 'LOGGED_IN_SALT',   '}k@S^t=,} NnZkqc@Ve$|yGc =5Z3~X?]+Xo>hzPo@$1kGL$e%#LStMMw3zGw;Cm' );
define( 'NONCE_SALT',       'h={V7b?#(4]%k4pSb^k9j>i>WG!Fjw:_J7W!n=|@gSTMqrXJ4Cv;Vd^fX[{Db.3_' );

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
