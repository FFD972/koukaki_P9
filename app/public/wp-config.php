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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/Florian/Local Sites/koukaki/app/public/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&<bHH)HjoQo)v$z+SL&*UvhO+H:~OMb?b@|IVhC+M2V,F,et<BNfJ.IV=O$@[p8[' );
define( 'SECURE_AUTH_KEY',   '6tHt4-;tej1!{$0Oy;d>e$3g 8sOI}:9.I2WzK#G] X))C >85 {mB4QGg{ z-iJ' );
define( 'LOGGED_IN_KEY',     '/Tt`hY8>.RvE|OQ-Ck(T_D=U+dzCa.3ts:@hs+~1~.f{,L5nrb>>`DT=z<vNg*O8' );
define( 'NONCE_KEY',         'abraq(1ep!]~x5 ;_6dU#uMuERZdeZ#k=Rf:xElEU@)24J*NywJ`:hV)g+O~3K/N' );
define( 'AUTH_SALT',         '.ssy%p[PCy?*nh$hpc3:X4$}taxOabXFk3kup#-QM2+Jn}+IBB4${6r~(dzQ;r$!' );
define( 'SECURE_AUTH_SALT',  '7f@=#knl:wJ!iJJy>;>NGsrm$FyXxH9G%;jfz2b]}Iyj(92-.FsU16t+&^C4P`C2' );
define( 'LOGGED_IN_SALT',    'bHA+Du?yk]uEW^DqzNo2-z,_E<0% XW?-ey=}H GRBIb@1C2UODQ%-:ZLFnF%pt%' );
define( 'NONCE_SALT',        '0Yi;w:sjK9oRw.s)kD#HvvK9>>CjGBnT2]EwgJ_^@A 4k+7)/8s<e%d{@>98.!1v' );
define( 'WP_CACHE_KEY_SALT', 'a$-2Ncjz^xhV3aqL6JI:w&<a|Ar8>a0JX-n6>[IaUdWWmm|4,j>v!>|_R}[(QO:>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
