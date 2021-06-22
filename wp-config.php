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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ICL' );

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
define( 'AUTH_KEY',         'IAkTzdfqAohfrGhD7iorA6J0Geopqc0w92efkShZ5FB5kXONzvJnvaoYK9ZAWBzf' );
define( 'SECURE_AUTH_KEY',  'RcgGI3uF42g2qz5Wq2PUim7VoZpUiWYE6a0oPZ8ExHH31SxhlYQudelqQSpsujjo' );
define( 'LOGGED_IN_KEY',    'Jl9Qh2023LIqsvKCH6i4HKb1Awnb5RMgjXfTMEde1v7RVToHGO8kI38GJKgeQuzS' );
define( 'NONCE_KEY',        'xQjQ4J9XVbnEYZX55kEsNp6msMNiWmfpHLVnVqVzsCsx2ouR0X7co9ve9JSpQf47' );
define( 'AUTH_SALT',        'utddOFjW6T1QkAkCGCLIDrVZaI8j5S4ca1Dq4TAwVvq6cHXDiljtD2lyLSAygBst' );
define( 'SECURE_AUTH_SALT', 'yB8NLx3yozOPZPp4E8x5U6xcn5M5z1S0RHX2mbQPosXkCj4Lfhu0B1fW9k04K93J' );
define( 'LOGGED_IN_SALT',   'PxqRvXEE6PmZ3B8QMtc2cQgoKnUSfymbsMGfr4rYSV9AYhiJMabaXwXNdO472Jko' );
define( 'NONCE_SALT',       'kh9q4Tbd0HFjuUt24FIywI8AiDuJ6wvhWhR5ivpYoSWQeBFxRZqvGAv91jjF8njs' );

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
