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
define('DB_NAME', 'stephspoDBqfntf');

/** MySQL database username */
define('DB_USER', 'stephspoDBqfntf');

/** MySQL database password */
define('DB_PASSWORD', '69tyhnWeqw');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|@kRZ8G[1~hoRdGO18!hpSZK:9_[s-hKS:5~]tahKW9G[1~aiLS5H]1-_pSaDK]2+');
define('SECURE_AUTH_KEY',  '*qxbfnTbEM7^muXfIT7^>ryfIQ3B,{y^cjM3B,y^jQYBI,0z^jrYBJ}3$>rzUc');
define('LOGGED_IN_KEY',    '|r@goU8F>0s@goRZCJ0z!ksVgCK:4@|sVdGN4C|lsVdKR4C|:-dkNV1C|:w~lOV8G');
define('NONCE_KEY',        'iS5D]1-_lSa6D#;+_mtWeL;5~#itXeHP2A.pxemPW6*<qxemPXAH;x*08!}v@gNV8');
define('AUTH_SALT',        '-hsV5C|:w~lsVdGO5~|hpSdGO19_[tZhKS;5_]xahOW9H]w~aLS9H]2+_pSaDL#2+');
define('SECURE_AUTH_SALT', '9.qxaiP2A.]t*ipLTA.{u+iqTbEL;u$fmPbEM2+.mybiEM3$.mubjMT6E<nuXfIQ3');
define('LOGGED_IN_SALT',   'B}zckFN4C|}vckNV8F>4w@goR8G[0z|owc8G:4~|sVdKR4C|:sVdGO1C|:w~hOV19');
define('NONCE_SALT',       '5#x~ipSeAH]2+ipTaDL29_]mubEL;6*]t+eLT6.{ubiLT6I{2+.jMT6E<y.muXf');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
