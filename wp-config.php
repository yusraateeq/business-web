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
define( 'DB_NAME', 'business-web' );

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
define( 'AUTH_KEY',         'VO^hL^AuOlx^eErkk| ~SeP<txW=E<3}Ovcr]vo?E;k0$)]$J[|i77! #D,3pHo1' );
define( 'SECURE_AUTH_KEY',  'zU*9b)p%enl$35?ww:3we#.R&^fe^q 5#gn3g+EWiu9bNHH,>yux`^p@.m+QkFva' );
define( 'LOGGED_IN_KEY',    'rSUj/y^1BGy-&Gf>S4&<h7]T5W`07O}b~Xgt^T6^l>@]GHD~_r((fS6r3qCH>F}(' );
define( 'NONCE_KEY',        'l[,&qW=9_-TEBZL0$.si/cQ!h&$hWXO0)+|c{@_OQ6W}6O7J:b:n[r0JsZ&(o++v' );
define( 'AUTH_SALT',        '{8/t,$%^f[x^@IK{/#oKAQG_J[L%(a<.9xbyecSbLi}:D%FRWC4$35jT|5&,!MiF' );
define( 'SECURE_AUTH_SALT', 'xq0SpgeD+WB;y|!W?4H=jQ7/l+c!]6o,sRs_9GrvfOUI/[Q9adl)}hKnUob>MtK:' );
define( 'LOGGED_IN_SALT',   '[=#}y*#=$_Irm&u=-HAud3d$8hW1e_QH!R.V2}X7S:uUr{tX|1LwY0D`dra$G28e' );
define( 'NONCE_SALT',       'Ml#sh-H{,3j|H]_qYq.uA@saME+<i3y:@(!E&#mGNN](R=sIj?@/Zm.+i-eR2do>' );

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
