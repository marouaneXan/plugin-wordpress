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
define( 'DB_NAME', 'contact' );

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
define( 'AUTH_KEY',         ':5reww|YNdE)-|!jc_m<2<e<!y,JWggG:$g$aEb&dAj1:&3R2Uoa{= 4S-_T=B7}' );
define( 'SECURE_AUTH_KEY',  'o{m/c]AK3P*qX[JTTap:z=LRe^,<?TJALo!V{$iz6W3Do9N2}x1;:?KmuMET|7*4' );
define( 'LOGGED_IN_KEY',    '{^le)cmIOSjmOjVNib2P&COx}eV9LS#EHGb_F5*ybRGbqnQsnz%Hi23gOi3o*p1c' );
define( 'NONCE_KEY',        'T!?=&^ecT=^g),884H9{oj4rF%<E:9>O;Mk=%Gr=(yswfPAp*ldNhz(RSNEqz7bb' );
define( 'AUTH_SALT',        'xv^0P-H@b6rJq(tC/M@FpPS$oJpvZt}Sypz:1aw,QJjxa%Lg# d;7*Bg8$zQ`=Ye' );
define( 'SECURE_AUTH_SALT', '-M~)69EbFTsxP{1Sry=F0-r$jdE5Y4AuAEuVj==,%ZuJ*j[;oT*f6d]TL:zIM7lF' );
define( 'LOGGED_IN_SALT',   'ri|l|-K4;=#|a>|C8GSlhp!~+1~VJd/5Qs|T+kVttVVMS-1d17tpTDjqNJd/82@-' );
define( 'NONCE_SALT',       '|9Ad~ssqL{gno-mYg !<;Bc8^@4[fMa$ehiWfom#l|Y/C1tckW/*j>9]L)}VyoJ>' );

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
