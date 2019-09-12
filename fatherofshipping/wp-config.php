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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp64\www\fatherofshipping\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'fatherofshipping');
/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b+Y6^/];ASmozJPNA[(i1{e>bH`M}?t+:b?{Bcc6PUfk!}~d!ShtA9.D_s3qS- c');
define('SECURE_AUTH_KEY',  'cd^R$#p%.$&0a-9LhGAGC&[K!1_DS^Fj09:B|1lF3KTc]xx}v&r>rXDNPbwgp-x)');
define('LOGGED_IN_KEY',    '`?%ObF}M(aNND^?&$]z&dz*gmGPVg/<#f_$>:x,9r1{i4[FDOT_ZJUJPz!/or2X]');
define('NONCE_KEY',        'z(TK*#_:ZgUZsJ||zMvBfUixgti@diDGkX]6!-Db@1wG61+~`+Js0_9o,8cr+skf');
define('AUTH_SALT',        '+^+0 ^@b~HP i=rVL6m;;@zdA=aqO555yc[R*17-j61Ci3xx*a?JP~#x=_I~v@7y');
define('SECURE_AUTH_SALT', 'm(1 :&*?+YhR-)@hNP[cC[$|gSgmwPbP:ngI:i|b&2=` [ 6zH4v2D}wkS>HSU@o');
define('LOGGED_IN_SALT',   'j{LCzhs[pK9rT{LX9RqyCC,;g+_Q1z0q`$LTcgx0`f0= ouoC$Hd?CI=0xmp0ef{');
define('NONCE_SALT',       'm3$(Z?^z;,kcg5vD&[P8T?h$sghomRWTBa8x[cf0@IDa{J!7a&RtmRT%&Q4_3JF4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
