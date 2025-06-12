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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'opaRu8oynbYgdNrnF1WElPutens76FXZQeX94T+/ShIbP77xHL79E6JCjbi96fPWmtNhOJmFYSl2WvFDBUdjXQ==');
define('SECURE_AUTH_KEY',  'JxF0zHZ12W+UlBVSZT6yk5sfgHAIz+ToaRqvBJusUdep+cDokR+BVPzZHspa1rcz27H4mngQCToES6MseI8gUA==');
define('LOGGED_IN_KEY',    'WqDyKX1Fe/qIdFdwc9VwIcaTu7e2HC0DlhMUM7lhe5JH7COzeYXM0Zl8i3fwgXwDLhoNlTKsEtYic6RB1dL0rg==');
define('NONCE_KEY',        'XtuUTLoTqtNYnm90jQLqnDa/HQ92VI2BxpSpxsjSwG3p5eT7hkPauCbhlP+faqYzQQhIJQMvr7wiKDhbnqGW4g==');
define('AUTH_SALT',        '+TTqbV0kuJYSzu2906oLuIom5loaYU+wUkXnrGYLO67srwQ88cVpfxffk9C6xeC60i1sp1lK+04+cLqS5E1PhQ==');
define('SECURE_AUTH_SALT', '+rgCy3zYwOHVwSwTnd9FB7twdAOgZhlMbDy0MZuDlMawbmhPUrAkthrtO8nx/5CaoZcFBMT980E+ufcvPGgF0Q==');
define('LOGGED_IN_SALT',   '0Ev0ZpFgHs6j0CXPlNlqBSUfbwqSckHoR+9BUxMdKFLVa+O1hFXTQL95lGMjnIuWEKX+1p54Hc6EXVakiKC7ZA==');
define('NONCE_SALT',       '+F74RxogUYFb5ggF9JT/KWdr+5Vfg1a/vfo62BiMnRYv8cHPXU7+KEz862VQXJ5qyk1mt6PBFh+QKMdtmVlxsg==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
