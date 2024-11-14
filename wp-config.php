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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u997496973/domains/dazling.in/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u997496973_daz_ling' );

/** Database username */
define( 'DB_USER', 'u997496973_new_dazling' );

/** Database password */
define( 'DB_PASSWORD', 'Dazling@#12345' );

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
define( 'AUTH_KEY',         'd]+^4@|,J-( 3MH.3#-w!<.=CkZ|Ihm:=Og&<NCs9`>Y8a-`RaR}Y3vX`]*i .px' );
define( 'SECURE_AUTH_KEY',  '=iV[<oXr R-f1 01( I&,(rIT>3Z-]N/m!?`.=WeeJOHr@)`6yxw)L%.!dC?sCFV' );
define( 'LOGGED_IN_KEY',    '*R pGet6|%=/>mL?24y|o(I`S})=H>DwOxbXq:}Y^Z;JTvQAA+}2NkN{{wQsd_.[' );
define( 'NONCE_KEY',        'y eDo,j=9P<$V-XD*F4[^-To,URd%}V+!gc~iB1l9Jc6w{2/%;b$/(Ts[2d|N%0X' );
define( 'AUTH_SALT',        'M}-u9x*LQtqx;p*Nmg,(Rgf$}Z&?ZMU{o/W/zL%?iS4vmUZ*GL/kR*]QPn^{V&kA' );
define( 'SECURE_AUTH_SALT', 'N r:6>#(DHdcEVic+`]!-,TvOS=DU~8#&|Ydpeqn9S-Q~c= Hk.2jxArb]vkBmx$' );
define( 'LOGGED_IN_SALT',   '$6l;lS5,-s67v4*oGwekja<m?eZX/X7}mtDAjg*)_vZEF@IsyL7q?JKj4],v]eNz' );
define( 'NONCE_SALT',       'aiuRa!8AErkuB:W#9!U2JMwnRC9:zUba+~sAjxv>OT61Cm@rdk{jo.+tx}Y+~eD!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
