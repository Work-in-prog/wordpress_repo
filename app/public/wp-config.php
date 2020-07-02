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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'N5LtDb1UnFhTtN7aq7CGRTLQZ5sNVfcwdWUGWN8ZRCAaFnpPC58ZeekIh7HHjrMN0a0TTTYpUJ+jnOxZdhRjdg==');
define('SECURE_AUTH_KEY',  '3zGbK/8wBEQqGZe67Eu2EGKBAYmz9NxGr8vj68yKYKwRPRVSY+nS5kzXaAwA40fKWyG8WIQ4wYxuC5zV/y4inA==');
define('LOGGED_IN_KEY',    'i8vQWVq2FymKyk6rG1b0ao/sX/ThPZFyJvBn+BJyExYTLqYj20bo5/U8SWbqrDehbqTeRDXdA+MCYkA4NzyfDQ==');
define('NONCE_KEY',        'kv0S7Hk0jtll4XbS/czvgjPRP58v+waGRIY5MsWKOnAvvgz+ppPAPxulrNqdO7bZ3x65rJAAgdZJm7zMoWqY1g==');
define('AUTH_SALT',        'a0qSCWQQbE+Y0/G3fGmElamkwKucz7J1KpJS5vqSWRoPWJSjAIZ/LusauQhwCCT1pvOdvGidfChwWkcrEghjIA==');
define('SECURE_AUTH_SALT', 'DWQjXcq2UxTPDmld0T+mosSTkSe+VDA89eYeiFxS1FM3sE/9gwuSjWJsHfC5DOFPsgdZOhOTixK/cCgbYtpODg==');
define('LOGGED_IN_SALT',   'uWOaN1dzzeiwepK2cpsUBMdUSZXFZRlyhP1lMPar2rwCL7oDfQ/xHfZPIhXfVYvNZ8kzn00s4Iv+9Qv/7kEPBg==');
define('NONCE_SALT',       'nUUkJOYkAxYMaZ3valk5JYqeagDriPZ2mNn1H4/UdCmLPlP1RoGtJhbXvnlXSJzJqpndpni+yL61DkmWf9lQ5g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
