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
define( 'DB_NAME', 'KhushalBlog' );

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
define( 'AUTH_KEY',         '5OhbkEX!+4[SU|$/f!snL%s9hN*}c#B)y%>pfRQyQuyEE!m]0^:YB[2AT&pi1ft|' );
define( 'SECURE_AUTH_KEY',  '@xPVWioptjOeLv&mg5ouMq n^~]E#<1,=UfKA2bHnQsIdK%>jyy+[D+ =,ZY2hE7' );
define( 'LOGGED_IN_KEY',    '+GNB:r*vX=M)mMxC:^6wUXJ(wO!PZTXG@O*74F+4~0<lq[ey^D_({,?IJ _LE~8|' );
define( 'NONCE_KEY',        'E.pB;1vo~H_Umr%%Sy@D}eJVf{>~=8l hR(IrmF#vgjh<I{#+69Hd<k]Cx)e52P!' );
define( 'AUTH_SALT',        ';[!~x|dBoixBQyKL^en|L?>J=UH3C9<oKHzZz949%OD<R!CW)tf!{~0D:O;~OU#)' );
define( 'SECURE_AUTH_SALT', 'vgwzbbgfnBQ[KT@Xp;7CH2:@kjfEjw~Og&GD(lb3!(,Q8+Z_of}:%!T0r4v7B05j' );
define( 'LOGGED_IN_SALT',   'o18X:&w9,HH /Lv.L4erT2lFqTP$_o~dlfwp7*$g:<jNOYyd#e2lFG(Cqy?rcU-^' );
define( 'NONCE_SALT',       'A{|:-{3rHgP|<3-8}jw+/ RP._=SoF/!z}]uY-vUCb},zV0dDtms!^f7U+0PsmdI' );

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
