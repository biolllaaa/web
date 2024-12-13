<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37880930_wp902' );

/** Database username */
define( 'DB_USER', '37880930_1' );

/** Database password */
define( 'DB_PASSWORD', 'sS9p629-l)' );

/** Database hostname */
define( 'DB_HOST', 'sql108.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'tut7euyqihm3vzsveg5d1xqij8e1zrtanfhi6qkwamg0kompgutrhbbu0rlxlivl' );
define( 'SECURE_AUTH_KEY',  'lvdbzkn41w9n33jitfvy0r7oaxr0foww7fnocwkm0hklrlkhmipojdrcsau6cfs5' );
define( 'LOGGED_IN_KEY',    '9iuwwnm6m4s05esakn0r6cgkyf79w2qnyzobbkwwuml0t2bk515cv5w97cfbmkeb' );
define( 'NONCE_KEY',        'iheud7s1d30bbg98l09wl7w7rdmevpbhw4qvshvldxn0buzt1j6ia5dsxl0fb8ga' );
define( 'AUTH_SALT',        'cijdjhu2alwzgvq81ov9kc8zisehwfyj4klezpjvuda9xjvvutbtlyvit5jhtv0x' );
define( 'SECURE_AUTH_SALT', 'brcgfdqci9xbw6yd64inz4xvwotfh8z7x9nhpkq6reqlsymyqnjczlghmxqmvoai' );
define( 'LOGGED_IN_SALT',   'xe6xl9ulw5twpotegnnkvzmp13bboz9i8u33vi2cmbrixubzgnhwijfrbrwrcqkp' );
define( 'NONCE_SALT',       'jduqxitygd0kjx2fiobwrjksyyp1n6v5fmfb0ekj41k4qtbs3khrflzjektkt9dl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wput_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('WP_AUTO_UPDATE_CORE', true);
