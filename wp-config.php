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
define( 'AUTH_KEY',          '&Lr)uuwnn4mTo0QK}=}]||z4/53PI| N1bv]57dju#Ob5Z16g@A0Mb.(~A6z]-/6' );
define( 'SECURE_AUTH_KEY',   's*_jPF;HyFRY)sYYAO0zi%s]Ud.!m/(RaP1A-S4Nn;bm<oX>S%fLb2jj<7,(^dW ' );
define( 'LOGGED_IN_KEY',     '>peszZ=JH&[@uj lp/I3k8rk?ygZ:hsKj>/Yx;pdCHoho5|OW6$w^ZTSr4]F84(4' );
define( 'NONCE_KEY',         'Z$zWsbCnP1>>8vS&}*cXH}|JHnAp[PH ?Q$5UQMQP8]WuHE`|sRjuH^0;e{6?c/G' );
define( 'AUTH_SALT',         'JT,EF)[pVeT#+ h`j{LY~Dy|*cS $YOlB< ugz`?{K^&j(&S^){F_`0M@DFKCY^#' );
define( 'SECURE_AUTH_SALT',  '=}zdNZ<::]OEW<({a+9IFzRMzQ/!xv|%r-y2}Bh]I`y*nvpt.zMA&69&ZoN;RM.V' );
define( 'LOGGED_IN_SALT',    'v~R^, }(vIJtGVf7kH|O(J{ iI=goR5K-q=))MzyIay$tGFR|YbHeCKs9<+h!X&X' );
define( 'NONCE_SALT',        '.{:<Lk%5f$ @k(4_F/B@Y1AU mD{TWo^W=1b=JFXcrTM=$6mZ&5ElU>2b}3ZKpyx' );
define( 'WP_CACHE_KEY_SALT', 'nImi5y(EVr%^)2@4Wjusp)eDl6`9,IQ&XPzO?$v#ZhQO.$BJ{CYE:d/Y,kw))S,p' );


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
