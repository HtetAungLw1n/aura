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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aura' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define('WP_HOME', 'http://192.168.100.25');
    define('WP_SITEURL', 'http://192.168.100.25');
}



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
define( 'AUTH_KEY',         'TuElFgddbUSx8ucj3CH6Cl2Ep629ru3L0W0PijdyZEBeRojt47PyJJPgT4iF6KlN' );
define( 'SECURE_AUTH_KEY',  'uIn8p9gppJmESrgmF2SJnQEprLWJD5c4RTVckzLUvGYcn1iEXt2jcSqGqQoCeyuJ' );
define( 'LOGGED_IN_KEY',    'rmgua5soyrZQe3DUhj1ZdSu30HgKMA1Pk9Dfs3qRYzWJxkMp7RfAqLgZ417KEVT7' );
define( 'NONCE_KEY',        '6HK0WxdhbAH6TqGeoxAxAas8bhMYn59mFwi9D8aApSHyyZuZSLY6y3dMePCZd4sc' );
define( 'AUTH_SALT',        'MRyS7EOmQnMVj3XaX0Jt7k14oZ5LrMWBpnayc08sRyYXYq5FAvm5zFQUE6K1sUoU' );
define( 'SECURE_AUTH_SALT', 'onHtttJ3pR6zbeLRCXLEkJmhgqOpA5ppkhDVZiF5iwddzkU8qxr8Mz7kzuEskjyn' );
define( 'LOGGED_IN_SALT',   'a3xpQwRKfDmbVuKGxOyGhwGMXxrX1mdQjB8SJ9bhKg4kf49aWPMwyiOwJ4EQDlEY' );
define( 'NONCE_SALT',       '52KDOanji2dcJEEZfhzcONlHkdcOetGaWSpU5ItZcqYIAQQHdwHPXsg9Rl8pGgi7' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';