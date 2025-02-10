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
define( 'AUTH_KEY',          '`7gnruuufVbzm?WyE[l-pOIWy^~d<} d|N?FutMWa.=.LWXDqs&T?wo*_a7/6F3)' );
define( 'SECURE_AUTH_KEY',   ' E}tW*]hkY/[[[DLM~&cQXaD~i$#[bp?v>^m;Clmh.65NZQCtg)/fi_QC?lZ+tc2' );
define( 'LOGGED_IN_KEY',     '3d4_|EV@,oT?1Uiv6,~-TYK/uaCK-=&Sa,E]FXJ+cFSgovmaux1q#Z0JCEljbq2$' );
define( 'NONCE_KEY',         '%|d.mF,]{Zj//bq0IFhxFW56HZ=zV gEEOOh{!|9i=t6+I=a.GhGv%gnWZnBkbM~' );
define( 'AUTH_SALT',         '^ep>y|m{[pZW@W7murjUQ62v[nRp32PQb2CCh>G!mjt!B0p9^WXs-~t|mc66US~U' );
define( 'SECURE_AUTH_SALT',  'lo0IeO?1ybqMJx6=C>av}kR)hrn-61G8@chV&PI{5C(Rh=vCL;A[#@QyOcRE!QQ]' );
define( 'LOGGED_IN_SALT',    '9Sk+qOf-{K]%w)D2C~3@jcWGv_<vexq^GPJgOX09Nd-Mc|XJLMwB%&qajXe31Ao[' );
define( 'NONCE_SALT',        'hw<UK-^C%MR5xv>FErPu|:#ERJU)`we}?R_URs+1N/|N5/u$1JSAfEeu;up#6r!q' );
define( 'WP_CACHE_KEY_SALT', '93pEmbzy*bE=T6RY%60OoV8g;;6mD n-nMB<Yu| 4lUTV>I5X$fb#@i>8,;5dRDh' );


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
