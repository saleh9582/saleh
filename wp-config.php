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
define( 'DB_NAME', 'saleh' );

/** MySQL database username */
define( 'DB_USER', 'saleh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'saleh' );

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
define( 'AUTH_KEY',         ']$eeb@k^#U,WO $z0<t$=e*6C&yy+(OOgzt27t/^cFz{;o?+&lxrBEV4t77Ma`+;' );
define( 'SECURE_AUTH_KEY',  '&@P/VHAd<vjV:T?3l~ITprD6Ed6LP-IQs_!)FFCR)wQQJ3g3MzVu^9XG}X0do`9y' );
define( 'LOGGED_IN_KEY',    'G./dNd!d@>5QdAeYJ;6;)ELEhYUXhJ 0vv,$q#EC*-cTO7c5sX k2sA@1IM{K(!I' );
define( 'NONCE_KEY',        '|1iP+X-pcE+C2m0RB>r03rv47Bx@J= uq6SXu/4ew.}m:hiaEY.3hEC(lbnZFq[M' );
define( 'AUTH_SALT',        'tz>qm+z-*-HZ26L4<#XwTOQ#LW&aJ(+XNi>PNul2bl3y dni<UK_]sH1rRa{j1)V' );
define( 'SECURE_AUTH_SALT', '[<3{L#=dlFW%@/)i.Qldnp l#gMo%D#m}G3?9>vhS;# 5|+Sw#+@|pUZ&*(E<53|' );
define( 'LOGGED_IN_SALT',   'K5I=[DPHBV8>[E^86lp^*6yi>CM_FecXc@U3u(j[I,cEAg}Yf6y5je|NvK>8T61&' );
define( 'NONCE_SALT',       'Tb-I6zDfhGrjkZq;@^WL6$:_7 D.-G,$F36eyz)v,sh)/.j}}N!@qp2F=:^/+,`x' );

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

set_time_limit(300);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
