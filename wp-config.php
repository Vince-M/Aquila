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
define('AUTH_KEY',         'lNL5u/LSa+UUGh92rRsxC6D6vwJcoIh/vgAKXFgUfAyJX62tPZb/63qTrpQhZk9qlZzKtGWlsxEvHmUTv/VKaw==');
define('SECURE_AUTH_KEY',  'rU+QBDfvAQSHyh+/6Ma1OEPaSM4V4ocJuKR4XZfkfk2BD4QsE74lJiWrXFKWHDOUCWcLX2+p4Arw41pFCnnKqA==');
define('LOGGED_IN_KEY',    'hM/2iumrLK/4z+QcxzsgVAfKl44Z0cUavs9UX/cKIexV9u7ysAVugtX5OOvIWQOzOwb16EnjHQkiplN20xAtkw==');
define('NONCE_KEY',        'UjMYfgF1BovhhmDfjMermR/i2mmVbnZogf+BFSL5qh1kYx/8zTuxZr5NWwxRs2anRE6QKYYYaKwJ6UMx4OdqzQ==');
define('AUTH_SALT',        '19TsOEYSQOgy4Qe1l4W4VpRzVMMf0hgf9YTpCH1t/twKot5N5cGXoltql1UaN0f5QB1YrOVZoxGzMBpUS9t9Hw==');
define('SECURE_AUTH_SALT', 'IuMEE9RbYDVJEadIgFbxawDJvhG/NOpFMWj8y/LCgurgeZlfSXlw0WV2IKiLoSsRDSNtA2WcF77/b7uB2JmjEQ==');
define('LOGGED_IN_SALT',   'fdmCY8rRdtt6uS91P4xh9+CvszQAoEe+60O+n2d0nQaF5SGgCttQ/vpwJ/1BJ+FnzcIyt1jz4EFvpYaXYE9LSg==');
define('NONCE_SALT',       '1OnXwBkd8Ogi6XgC7l2uPwBvLcb1DpWhZ9M+RUZEKj2zpwa7K8Fsd8XfJDNNWVntPJeQlkY1J0QgQC+MpxE1iw==');

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
