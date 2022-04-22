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
define( 'DB_NAME', 'aniko' );

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
define( 'AUTH_KEY',         '50~9nn`/%{dBbz4#l+RC`Uy%<vL+%Sp*2YiBY1(:y)9|PA7?aAv8KS5Ai9^tskU.' );
define( 'SECURE_AUTH_KEY',  'i7U8`4nsH_=0xaY X5jKQB6Grb|~(1_[ajIrI4L.&^<FyLCZSqdN-8TTn*/uwr1k' );
define( 'LOGGED_IN_KEY',    'TF![yab>K}dkHbq60Vr?Hc>~u<S9 iL|F?kR}0%>Kz4ZA@b]7Q])<#c]b?j.m(k$' );
define( 'NONCE_KEY',        'C+(-0LtlWY;RqW9D|.:Hc3/hieT;F/r[ _nM(@VPg]ci_+=>Z>?aae4&s@h6S8hT' );
define( 'AUTH_SALT',        '}9xqq92uKq{aiw:*0JUlF%%-D9&Cb@VVs?e`-]eqWEl#Bh<>~2B|mcUK^bS>M|vb' );
define( 'SECURE_AUTH_SALT', 'E/Pg1FZ}_9~8LI!zBV;Fd2Wv{dRaHWd)(;#YvYZv+nt.Y8-=LI$*<ZI`2UnlklJZ' );
define( 'LOGGED_IN_SALT',   'PsaG Mu6()3&eb!R]7O8>sKT3s>,a1n@Smd ?@*K>vCWa13#,HJ`SiI`9bKQE4*-' );
define( 'NONCE_SALT',       '6_SCqX/yDiRs5jP03lKc8vMcj6NFpWH*1%IhX2pPaY:`9VReI+C}bGj0}<-CZ0o^' );

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
