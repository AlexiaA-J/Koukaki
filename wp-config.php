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
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P$H|&wNIe^tEA>$w<$5NrSSNO9Q]rRj)Omv}PXiQnyy[!{Lbr-mbHt9+?|q=XO%S' );
define( 'SECURE_AUTH_KEY',  ',y3PpLch<AEcM4xvVu7Fun~:xvxoPf-T4O{wuUT$c$lk (_kS2k!V+=W=!,5b^ !' );
define( 'LOGGED_IN_KEY',    'A3b%o4#V:%-OC;V`UfGJ=3JvJD-QPd;!C/)PGq]!%m?}#Kf]5fhOa%w1BA955N,#' );
define( 'NONCE_KEY',        '!d*j/$+a^4)Ef2f#K657``S$io8u??X<BlTjN-F.eNB)zgM%<-Rl-ot())697^#X' );
define( 'AUTH_SALT',        'zO<$$4I=*SFTK?GAdXze0R]E?if6q1R]hRq(Q2>y#8fjnC1SzU%oGiRu|A2QmwtN' );
define( 'SECURE_AUTH_SALT', '&fFm>HY:b-)kW@;: 1#LO!e(qg!T[/Bz^C)EIG|1(|_eEUAGYu^9.l,u=;^?IueD' );
define( 'LOGGED_IN_SALT',   'KJEMY00`;M5z2#cyqcZt1gq4}ISLqb<rG.jRX|gi^0 +bOg6?Z}{JRNmB|<)D6ed' );
define( 'NONCE_SALT',       ';W?AhJi7E5K}g])K]}o:%}@J q?cI ,j`I7)WT(WSD(L!y}hx^k#bMT?I=mu-D d' );

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
