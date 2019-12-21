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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'FROY{&/R 4m^vy(8+koArb(>D!n]iH 8i0V~il2KYxt0axo`T0Mes<ca%ftk6a9H' );
define( 'SECURE_AUTH_KEY',  ' Fqv.{b~v^7,#wnUwsBJR 4bWidqSs9QTA1<bCK& H>Y1$1d4W&2HBL1]#:=5K=f' );
define( 'LOGGED_IN_KEY',    'b-:s$:wi|Hn`R!!_IS#J@|B)anowB0,UeBuvwGMJUB;M-8?teRX),lV/Xz.M(XdC' );
define( 'NONCE_KEY',        'Y> cY0qq]Lgc B@p,X/6n3G(e>wq#Q{6vMkkMTuRkdK9Urb7nDt^@ND3l|md*aQ$' );
define( 'AUTH_SALT',        'm[_KuG:4g-g8eOd-;^x*!pz&G=Ax8m{FqeRclSN_&0,?I{B,u<q?@PRH:McLi9|<' );
define( 'SECURE_AUTH_SALT', 'I%v3K9Ltt4oK;)Vf#{3Z:S`Aj8f?4M@?BpW,lj1&VyJmiNwE2E_XU6s1Jq4.^7^2' );
define( 'LOGGED_IN_SALT',   'we(ZOMQ@*m(/VyLI48!Nu,H&&3vW~yh^%8<&=ws8hc`f/K{8pk13!p~r5&.6ye95' );
define( 'NONCE_SALT',       '!TFG2%)M?Yx&7{[#G{2{@Xa`J+9XrZ0(IQ)y8>`.FK`uV5P0?[PD(XEYS ]4{9sx' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
