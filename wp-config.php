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
define('DB_NAME', "db_munual");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "root");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'tmkxymru3sbeopoyvbiykmwg2pmyvofuhazll7lkfgjh6sum9lzszntreshrwf4n');
define('SECURE_AUTH_KEY',  'mrggrmb1x2mjovwvamcfxqq0zhjchu3uw1tgr69gllaiikpdld4lyfj0nbiikm29');
define('LOGGED_IN_KEY',    'eimqvyeski3nuv8ztrjhpgpxpuobmzaub21xbo5ufwfuibajs6ysokjrd4qxuqqm');
define('NONCE_KEY',        'cznyjqpef7dqzofzji9swui5pw3rjsco8hvh7winh22xpb2i4cgnevu0u9vrndtp');
define('AUTH_SALT',        'vwcmeg5uwxpm4vvhthdi4xucm4mggluo5jkobbceumuow6y6whuyy4538darzdze');
define('SECURE_AUTH_SALT', 'swbcryjxalbuzuatvp28sfb3zi2lfipuddqm4po1jqt7ywfpkqx2vtuce4ajyp39');
define('LOGGED_IN_SALT',   'db4qimllisexuo81ty4ynbbcgz808obwljbwlhmbwijkza06zhrhalfiwy2kqmyc');
define('NONCE_SALT',       'viibhijm3q7w3nqwjv6cwksnrjixzt9jmugudmheim53mdmpariy1ftfcl2auaef');

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
