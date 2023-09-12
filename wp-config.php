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
define( 'DB_NAME', 'sandy_db' );

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
define( 'AUTH_KEY',         '~Q_w>7gr;_xEgl],6gL@hahl}JCpR.^ :@ B<42^7ktRmw7gH;](q`}n{:<YDLS[' );
define( 'SECURE_AUTH_KEY',  '].%G(q9DS5^whVch5ss2x0to[!ywUx4~15ZT1.`Dsv]+G;cwG7~PSf)%j^{*!g;v' );
define( 'LOGGED_IN_KEY',    'B6$E]9]6{qVQ#|!jcn*F~9&i-kZXo(}A[KCvF&JvW50=rxLlMIem0HHo}f-tu-PF' );
define( 'NONCE_KEY',        'nqkwV^e7Xau,g;CA%+!8@hXHyEgTvsYzxndVXT+h!7,m?E~W(C$>D!Eyw[L]|jyg' );
define( 'AUTH_SALT',        'FJUt{FaQNV(lF(:Ja:T]=4t0WQ=1c~-y#V8{ti_*HAAp{MN1p6juk,nv/E*Dg{JK' );
define( 'SECURE_AUTH_SALT', 'r_4/8Weo6G/]rm>~Y CaR??zuuE(a9<ON[q;TT?gzSRUDKA+%f/,rFOQ_m]Tz!_K' );
define( 'LOGGED_IN_SALT',   'vvksyL3s!NnIS.[eD&VUQ cVuIxHw#,^5tbekJIt-x[HN82hz?M%;).8MFaA9g*9' );
define( 'NONCE_SALT',       'k+H6N/$(utt%)u0S)3Dfo)7S~q7(_zq.Xo9:fC4=3Y&Sd s:5E:=So!Nu+CaT4Xq' );

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
