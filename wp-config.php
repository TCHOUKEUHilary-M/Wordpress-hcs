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
define( 'WPCACHEHOME', 'C:\Users\acer\Desktop\xampp\htdocs\tpwordpress\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tpwordpress' );

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
define( 'AUTH_KEY',         ')Xn;/F8j#xc5`Faa~|^<hhbexn!,|xw14}th%`GGXx7& 7,Ojuh)K}d{y:J`5oMx' );
define( 'SECURE_AUTH_KEY',  ',W~L14>a&+7TE0Rb.sR9?e7kQy]mMZRwXxMG~-be,R@ufJO)}OiJ9Bbq!L&0dA^0' );
define( 'LOGGED_IN_KEY',    '.y-Mw*z{l#>7@,UsJ0WiAT<)F.qKcHa[O9pUm8?67[`GygtXHp=L6k]pe$/f2V|v' );
define( 'NONCE_KEY',        '!p.=Xyg~|8X!GWW}!}6XipxwMtjZ^+V`-HiXkrx_B_+s#[!H{x)MZ@=d,hsj%Xg4' );
define( 'AUTH_SALT',        'f5i#?ZeF?FA3Hm[6u62ohK57ni!sd1z)2fmN8N!ez7)5$c_:yDM4dbuy]F%X68PU' );
define( 'SECURE_AUTH_SALT', '/u~5.EM8#v<gpSod`vXD_gAgkX=+,0Mk{Wl),[H a9qr%=mzvCS:[S.[Sm 4W/3l' );
define( 'LOGGED_IN_SALT',   'VDg) ?6Z)Zq+Q[L=;+a?sm?::u6[f8fN8:Q75xh[>,Ku<bLjJ~vZ?rSCxq7 wD.f' );
define( 'NONCE_SALT',       ' ]lSyoHl6^:U34?Jk`+cFSTCR3D^SyutFoBaU bYF6R@<m9cF7[wF{(3yYM98yZ?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'htpwp_';

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
