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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BoardGame' );

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
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
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
define( 'AUTH_KEY',         'kedbCCzvYSAeGf9z3KfVxe6nhvbhyfw2dctiT4RHG4BzD7EY9JlM3J4ScMeYMyMO' );
define( 'SECURE_AUTH_KEY',  'mZRrp0tbwTqyVhvp0PL6Y3gkYl6V7Gj4iR5RalJ25dWXjtQ00D7NVKeztXmoBeBl' );
define( 'LOGGED_IN_KEY',    'YW5M3gp8nna90rQ9oC7rvuNavpQ3JuqEZe2Jhq8MrKvWzTDLZvrCX4sExwqyvvpH' );
define( 'NONCE_KEY',        'DzXgrF2tkaHTV4D8wexxlGvHmL0jhHRHwymCcoSLNZ84FRbCG55pN64r8WJiNdYj' );
define( 'AUTH_SALT',        'hmvFsqOCfjP5Vsdsdqqf21Do4XG2nHD2EpwZJprEaRcBk4RmsM3IKKYTqWqfndai' );
define( 'SECURE_AUTH_SALT', '0XrzgJuew3Hqknpb5tazJrS5V8GLE96pEE6Z11mmxfW0VBFVMqzl5XHOtXsJMh4G' );
define( 'LOGGED_IN_SALT',   '73pGgXHtYKLy2XjLgJAZSvSjiH2fhaxZUmhwuqRrVHepLr7RVD3p9fvMfhlzev8X' );
define( 'NONCE_SALT',       'YcgQPXmPXtdX5TZsxN49gUXnue1w45lA89n3q6X2owDeHtXhgtjfD4g399blBHnr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
