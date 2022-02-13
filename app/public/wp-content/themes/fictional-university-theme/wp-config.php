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
define('DB_NAME', 'wordpress-35314406');

/** MySQL database username */
define('DB_USER', 'wordpress-35314406');

/** MySQL database password */
define('DB_PASSWORD', '9de5fe3c85db');

/** MySQL hostname */
define('DB_HOST', 'shareddb-a.hosting.stackcp.net');

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
define('AUTH_KEY',         'MG9Rf3JnXB9R451cI15HSRHHUF4Q5hHf');
define('SECURE_AUTH_KEY',  'VZz+bqrVPtBhN6tKoRi1pwXnKnWd9o//');
define('LOGGED_IN_KEY',    'RBgws20VwOUdG5lFuTgo8R9qqUgTNSbF');
define('NONCE_KEY',        'd+em7wkcC52W91Z5d/7oGqa6u+0Kvhd7');
define('AUTH_SALT',        'B5MhSEsxV2TYwQE0oZX54pwXHNJJ2uxP');
define('SECURE_AUTH_SALT', 'LTao8HRsYPplFqoUOMA9sX2pjsleNhPC');
define('LOGGED_IN_SALT',   '0Tyn/gDHEJ6ge/Q16825AumzzYiJlzxl');
define('NONCE_SALT',       'iENEPeusTZNhC+cVXtTC/7RgTC5OoD9d');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '54_';

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
