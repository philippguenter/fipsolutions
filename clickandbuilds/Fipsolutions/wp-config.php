<?php

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/16/d739161825/htdocs/clickandbuilds/Fipsolutions/wp-content/plugins/wp-super-cache/' );
define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db739192761' );

/** MySQL database username */
define( 'DB_USER', 'dbo739192761' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bmRzVDsUbPOcOaCOoUcK' );

/** MySQL hostname */
define( 'DB_HOST', 'db739192761.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8/|O@i[K&0*|KR#To2sDg!*52duoM]B`>tjd1y-pH~<z-gWdoxxMN>%&}F<T_-,U');
define('SECURE_AUTH_KEY',  'm-a/E#:=A*JuNK5Sx_#?g-H#efIz``Y|)f0[PGt&fUXHY71v|7gs)7G57G,jOw2(');
define('LOGGED_IN_KEY',    'JFuo7#do-Lu3,4;?Bj3y=+6M:--n+e}tGB,3??a`natfL%7go{DK!gmlI{+wdK2|');
define('NONCE_KEY',        'W^;z3W{{aJ7G,+Dw<VYL]1KursSym? 8_T(k$5C|CppG|S6i f:M3Ow^j&/37ssk');
define('AUTH_SALT',        'al!COVf:R}khn=%}u@5^6$UO}`a_vu,M[U-i2J9s:-WUxCy]:H/}GEU+a~npqic3');
define('SECURE_AUTH_SALT', '3jxES {ZP3 zWWYn4Rs;{Yb/SVxs@g$t+|)FaE7p!ojKUVb<mws$m%]Lv+V2cS+N');
define('LOGGED_IN_SALT',   'th=b6m*[?VVAaof^T,`tOB.gEJ2:I%ao@>I)Yn{=qa]&-REN@?]+]BK_aAuN=%16');
define('NONCE_SALT',       ';RFwY,z)@*R1b-}H$Ba&V((@JXr!b65v<_$}4eq9BnC i@k=5GN@ZwH?lt+MS8:g');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bqHBpHTF';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
