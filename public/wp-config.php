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
define('AUTH_KEY',         'FKTd2biFdOnGlVQvW062qowxaAVm6OdqEWjldncHsWDq0YCVJCXwox+apJBs9nf1/gukIH+bCUOYo5xgmlj1GA==');
define('SECURE_AUTH_KEY',  'tjCny1la+Mb2IPc46kSSRFQo/7bsPdZS/vsFof7L8scOceMxjTvpspFuo2S7Cf2+71f6khoK2xzIye6u24ki6w==');
define('LOGGED_IN_KEY',    'PTOH58DorK4SsNOTGVI3gLmC2eMicYqbVDjcJBHELzEx8aWKVdmyFdsrY7wPxuoGWL4nov/WWK2O15dvjBhBWg==');
define('NONCE_KEY',        '7Mg6mbnG/H9aW3d7NHaw4/pQ5eQzX3EtKsHf+bCx4Bg76sskju1YbR++ilShS83jaOjmvawbmqbDR4K4KLrI0A==');
define('AUTH_SALT',        'W3bWXch3/9JcUGXWkFcxYvtMJSgK98dFdXRdiBn+j7SEEwFdwu4Dd9PlPoYC8OfIhjjfCWT6+Su14NbmcEJ59Q==');
define('SECURE_AUTH_SALT', 'Ogf+oBa5Jr91Cc6ul883bYgkJ3OJSOq0+vueGYHMaFNEvyaA1bGWTYOHNE7dwQjJvBE+XJhH44xTEhens7TdGg==');
define('LOGGED_IN_SALT',   'faDDIkH5rz/b29aW5YONm8faraMdXs0Lgk8/NWBfonPHHGaPMb2nE1lXU9oLBr9f0SVLQ9O2ph2K5pl4uApmRg==');
define('NONCE_SALT',       'QG52UtwKY6ISBfB/5cpDB7e7zDT8kH6iU0URa1lrREt0EI88ZnmQNaeixpCSyDKRfBbA/0cwtKvWZ1EiEst0Ww==');

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
