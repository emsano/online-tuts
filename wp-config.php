<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'online-tuts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hEYeevQujCrbhYhNoI1eWF09HOZhzju9H0re2cE1poK47dJarRzsNIrqMN01cDfE' );
define( 'SECURE_AUTH_KEY',  'AjLSR0ljDxfNNXhh9rOS2oNpywWBG6VtgElVbT6yKl7kbZLATeqxHoMXo22geFcJ' );
define( 'LOGGED_IN_KEY',    'xQNJ7GAPneKSRwIUUGwttuXgAIiyND2QiP1X1fpL4mJiHmaG3g9oA6xBjv6PJLST' );
define( 'NONCE_KEY',        'WKgQIMvXp9zBWbN77IuoqDy4DGugOsfobs8MD4jZNyZGIO1Dk5HU8R8UWdWTEENn' );
define( 'AUTH_SALT',        'ZMjU0fh7iOfsjqVAebR6klutaicXiBlWs6plDedz8Dbntt36hEmbJDWBB1RPcUEq' );
define( 'SECURE_AUTH_SALT', 'gCLtnfWJz5Fu5bGsvv7nfbyTRRmIWb8yC77xpYtZre249ucoNayNJXBNYO8iyecS' );
define( 'LOGGED_IN_SALT',   'M6XBNql3gAdhZIjjo6MCl2k0TwL6endY61rQlfgnNG2k0DnEOuWc2aKOj5k6plQl' );
define( 'NONCE_SALT',       '0pqodmxhGOO649M33CG2Ht096uhzfyZMuuLAjO6a9mqJ5Wai9y6eLzt5qarVOPyG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
