<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define('DB_NAME', 'wordpressdbaa');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Tmatt2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dTSuVGRz|30ZPZ><`>gzqoyj|YxW=E,:GFx1J+^S%Yoz#Ko~8_/pOA/jr~?x+U<C');
define('SECURE_AUTH_KEY',  't!s(1T/&ye>YO+x7RHHUq)?<E5+x+wZKYopp6+[F?%mw,q-)!Ff*|M8NS@{_+-q-');
define('LOGGED_IN_KEY',    'ZTL&+7?re!ElKuD7m##W-+1y{exx+dzC@+<vD;7[&ImMVv0{Er/RkX:|3DY,Tscq');
define('NONCE_KEY',        'pKt2Id636~N8ghX{JW@2E82`b8yW+kv|1uS.>+ EXKpELE~>yCC+!JOC2U6)XnTt');
define('AUTH_SALT',        '+F^`dhK$@-(Jnq*/g5S@=@X3M:h#{&@S[zX<8Jr>S@~>ykX_N4SMs], 3WFoO|,B');
define('SECURE_AUTH_SALT', '1/zy+KaTird]q^614>J.pdsY4ZyQYb{IXo}>fV4M6udSZ;j%b*/VXe~*y%`Q|n8v');
define('LOGGED_IN_SALT',   '`Vhlj|XaZM*5%^T)obb2Z-vva;u<0 1dG&Q>Ru4.uT([Kk<01fi,>,7(/7KEEVYc');
define('NONCE_SALT',       '|38fK-(c|1.;GcDDk-|mmO|NEE4^2(oyl83=I};eI$([(T!8n@`Fe!sx#hZ3I&-J');


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
/*
#define('WP_ALLOW_MULTISITE', true);
#define('MULTISITE', true);
#define('SUBDOMAIN_INSTALL', false);
#define('DOMAIN_CURRENT_SITE', 'adelaideacupuncture.com.au');
#define('PATH_CURRENT_SITE', '/');
#define('SITE_ID_CURRENT_SITE', 1);
#define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
