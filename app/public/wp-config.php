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
define('AUTH_KEY',         'fvW7R0OnkTYMMAwHTr5nwsrmqcjz/9ANq7DU4UI1JbGHSPPgOHXMIBi1Drhzfdw4X+LAQXoGQi7M4tPXdY4G8Q==');
define('SECURE_AUTH_KEY',  'zxSv/Trc98VTZLwR7iAziYVZjzMvjHZwET3l+ucUI6B94iaXWbHidxBeLGSqKGUl7UFImKz7anOUG6aRv8JtsQ==');
define('LOGGED_IN_KEY',    'uGNboBOu48H6DSgsasyR+jvubQ3JOcRuC7KqKbPHI5j2HXs+WuSJnQGrF/h58fD5ApBOV/bvzS3sfnmfNfWHSg==');
define('NONCE_KEY',        'Xj6MN00Qlag2ZsGl6hICl2U473eXAm+igjjtMdL1RhTunpxGu1q4RnIUgeMM3UaHP9I0j/lsYeLWkbsck0T+2A==');
define('AUTH_SALT',        '1LONAeWBka72IHI6Wdb8wPX5BWVvoxJ7d5JeD41G+Qh9OS5DA/RRP/SJZW0cb00PJZBrrQIhyzmPmb3HxgRzzQ==');
define('SECURE_AUTH_SALT', 'vwgOI9RFKyyZlG9v/+9y/rpyZPWDW/mbEwHTbaom5KHw66IVqTy9Jff2rZbze2aewOu1e/4A3X7uD5Ftt7YFOg==');
define('LOGGED_IN_SALT',   '5ZDXPJvKGagNT/FMKAQ6dDxCH8I4XmvZwoNow2K+EpX9aMPJ9CoRA/QlFgSEimKWN6oCcNdVrnYjOJcqTvDjNw==');
define('NONCE_SALT',       'NmbmzjaRWUxK8lxUIAgXd5caCrm0fZ24g2Ckx5UM+7Sh/+WqXYGPv+ihH1b2QKqZfvscMlkYJ5LJxQmJ2zwkZw==');

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
