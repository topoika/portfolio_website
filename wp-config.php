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
define( 'DB_NAME', 'wiilshop_topo' );

/** MySQL database username */
define( 'DB_USER', 'wiilshop_topo' );

/** MySQL database password */
define( 'DB_PASSWORD', '@2BpT70S[B' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qjrd0cxznw0ok6gcao1x0t5fgp6p44detmz6cut8jpev8xsxkfv4ijytqccykbdd' );
define( 'SECURE_AUTH_KEY',  'qn2x2cojikhpgxwjnogiqrkmspf4bbbegbadr214hmrwf5j8tgoeklm3buuv8i2k' );
define( 'LOGGED_IN_KEY',    'b5ddf9wde81c0zbopyajqkejpy2ddehlxsikv4zyynldjpetmhdaxun21riewfms' );
define( 'NONCE_KEY',        'aizicwrpi6sfzssycvaizqa7bqlp0z6ayh3shtvnrfhnsymq2ei0m4xgq5av6n80' );
define( 'AUTH_SALT',        's4dihugjwdr2cnw1pwf9lueas2u8kjyjqwqsrorwqx4t1rc3kmvcsiwzngayradx' );
define( 'SECURE_AUTH_SALT', 'ipgzqbhbadygrxeeckdpordssjyz6gdx2wxsrp6oafvklxixeewzvmm1blsdcwjp' );
define( 'LOGGED_IN_SALT',   '2sbgskq0q46ltep8jrkufa98f8qkwsqg16hm1jmqlvnypxafoxskovd53j2htcxl' );
define( 'NONCE_SALT',       'ejf2rlonxickzbr2yql3mtsmeku2qamixvttrlijs3ervrpighgbebvpsztuhxfj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcn_';

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
