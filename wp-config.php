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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'oy;Hh=!y@l&|gc?Ttz:0PTyJO3[K;wH[{#n?~}Goz)vf31(]UL%I)0~pqLl:)Ooi' );
define( 'SECURE_AUTH_KEY',  'o!|Wm4SZXO{?e}_l_^ 67U:}Z{c|JH!jWBY#G;7}Ju.Y(]NV#BJ1N[vOhH_V0Xl#' );
define( 'LOGGED_IN_KEY',    'mDXNd|wSRRWg8(hTKcXHz4i []DhLNd=`ZU-+YYy#evp0i:{bu~-^_5(_2/Em@R_' );
define( 'NONCE_KEY',        'm]lXyR&3X7cjGkHiJsqJ92>r(^CIa/d=vgURPx[>3[^YN2?D9wjbZ<8LG1a=#_n?' );
define( 'AUTH_SALT',        ']lkIj{xSrWM$.`*?mU@*cdw&v?tl]X-s/PsX_{n#}b!3}OT}.Oq;]UCOrGck -bH' );
define( 'SECURE_AUTH_SALT', 'd{pe,``l-c@N;k$;psb5y[GIu$U~p:1~R]@Z>pu;+wlIMMyqE-U#]D|<K^tvi?Lb' );
define( 'LOGGED_IN_SALT',   'pw#=;[aC]9C^5nC=(O:xc/D+)gd7g8:r(>Io0qJDo)[UORC`]8wI2A .z&`O-4[M' );
define( 'NONCE_SALT',       '0q?WiFJr7{mn_h,R=npcFmL/tZ*k{2IXCu*5cZ1^q.i5QHjq-q[B]t{XPhJTx5eE' );

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
