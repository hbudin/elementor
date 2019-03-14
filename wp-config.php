<?php
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/kadei.hr/elementor.work/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', false);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress instance is not managed by WordPress Toolkit anymore.
/**
 * The base configuration for WordPress
 * DO NOT CHANGE
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
define( 'DB_NAME', 'wp_8lt79' );

/** MySQL database username */
define( 'DB_USER', 'wp_nv9hr' );

/** MySQL database password */
define( 'DB_PASSWORD', '5y0p8CUt$N' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '57p;2[I2yur[(cECS2d21#3i57CUrS4QVm8Viu1prLQQ9#Bk;+_A-F__r_I56WQO');
define('SECURE_AUTH_KEY', 'D|t*Jm+A1PIa|+D5Njc(R43&_WQI2@qnGfn[2d]|~1h#O*C48_J:8~k:3eu[b(:i');
define('LOGGED_IN_KEY', '~v|)G7!/9pAKg2;9:Lnsq7+DvU2~X%8;C_Vx)G697!r1/9bBPJ~p6tf-@9ZI059O');
define('NONCE_KEY', '|K)v9GNBPqq5H3p|e5C)J1xq)/AG9D*60B36)g!/7lB;R%q@C3T!6k@]3PJgo8&[');
define('AUTH_SALT', '9k2r2z4D:i_XK:-j2beF!y/7;3SUW3lN*5dvXd/33iwO4]zhP5xP;7xUq3|l~eq~');
define('SECURE_AUTH_SALT', 'Eq9*&U9FG3Sb9qB544@h31Uv5wx8;]/p~f5ol#hZc52gLX16D!7ljx_Cl*sZq15M');
define('LOGGED_IN_SALT', '/6Qk|N3QE4T]6(3%d!;3@]I:8qb[G)!W8LZ|6@9x8~Wf~@S6DO:58~Cp5c%mzr-q');
define('NONCE_SALT', 'RWAJn:r8W|gj-|26X8sfn5b|*L_83f+~Ty2oe)p042Y(zCPl/c#qL@*b26#e|l46');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BiZ4628_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
