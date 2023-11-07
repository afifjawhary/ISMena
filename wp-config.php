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
define( 'DB_NAME', 'ismena' );

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
define( 'AUTH_KEY',         'dSK/GM8bJ3zjgFQ#em7Z+[1_VZwZ~([qj |6(kXSn7ZF@M[^E?e8t6xTs=4Yh?4Z' );
define( 'SECURE_AUTH_KEY',  'X0zx!J-Ml$*}8C#v27 S0BdP=dk>NUc6J -H.%brIpJt;?#FEhFC&};Vr?.(#V>t' );
define( 'LOGGED_IN_KEY',    'UKHRTfCH)X:Q%/.ClZb:cJex:JVjB=2z_ayb[$R;l^`7);UKJDz2;H|1 XU-__zd' );
define( 'NONCE_KEY',        '%mq7=e8uu+*_eDZ#ckV*8MhLcFr{@_<&HR4RyOOd8u#)<_96=<pp:f0,vs4#mo4l' );
define( 'AUTH_SALT',        'CU~n^ (f l%2nOa=|JNkS$/aD ]zYXZe9eF3JRxL<Zh_~{xCnn!@EtKBa7%V%(y7' );
define( 'SECURE_AUTH_SALT', 'n,6aB4=5.)_vN1]Dg<<0,Av{.VUXaf0Te)jo^DPbqM)3:r@~2:t<?-BZz[uCU[m2' );
define( 'LOGGED_IN_SALT',   'E/A0hTcSC=W 7:c$RCQwFN7>kTxq$?m8ilqbcOMCEsa*g[Fr%{tTA^ bNP!.N;pw' );
define( 'NONCE_SALT',       '+>.yjk@5QRGOQg$xM{IMu(E{n9>N>  ;0t)BqG?:z#`cvETtxtPfz!BQR%lzYf@m' );

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
