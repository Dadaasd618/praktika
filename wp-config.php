<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'praktika' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'S]*KmlJ?YcUz%s6(r?&koDVNRDX>`jv|4Ss|q3j8tSTvh~%I^D$-}iU#QI5K$>1^' );
define( 'SECURE_AUTH_KEY',  'z)CK]{R&OqLB9(Ywb#5CozmTClUzJHue2rJN]2q7b;Jv5Uq:aM[Fk]Hf:,/s%l &' );
define( 'LOGGED_IN_KEY',    'd@U!~2$c>COpA&hn+I^v8-GoA0<H-YN-0Mh8*YMY_7t%,H(8=lZ1fw}-x6R]IJZU' );
define( 'NONCE_KEY',        '14O#^O+Y90j_UBw6%MQHG[2sD4P]!,JFa077=>P4sD}D2Yy@WWPQ-/Hz],{$b4C(' );
define( 'AUTH_SALT',        '?Tg9 F$F!:c 4V_W^eWstkuRx?rjHA5e3S&+pA8LtBg0[qyFuKSxc;jD>q?&2Pd:' );
define( 'SECURE_AUTH_SALT', '2l7WfD<MejQ.oxVUl;%koRUc.CGKO;G*@p;b</5@iFgY/e*n^zGXght=;J%{w2$d' );
define( 'LOGGED_IN_SALT',   'N}0^rF`=uHsTC2d.Te$SYC{n+3 GGyw >D0}f&!UtDtz$  -kEO8.gW4?rL6=c|[' );
define( 'NONCE_SALT',       'Q20gr13]+p0. gT,Z[2/SQ+G8ENvUs^qj~i[-Ab[i*GCw6 r9|pWH}?|LJ$>6QR1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
