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
define( 'DB_NAME', 'vps_store' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'deno9099' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ')HtLH&,xuDhl M:rg-W`A~%)rPK1C6Bkc+UN{*[9obnK3YgSJ;hyq &Z+ t9cRy/' );
define( 'SECURE_AUTH_KEY',  '5#.-#/%R6ViY_XtmIi+UZn7t,gl.UGH!J1GtNWuVSZ$5NkCA[5V|#jlumQ2$`{pm' );
define( 'LOGGED_IN_KEY',    'M;O% @X(!nGf@7d)wj$T5n,C4@dJ[>P#|R<X=m?#4a9)OQd,(H2UU([,}U6ws*:X' );
define( 'NONCE_KEY',        'n.? 3B{BM#q QlLM8{2F|XOGq8`%0KXkva@u:TC&)$GSO@s|WD*3ri#PQ)tR- 45' );
define( 'AUTH_SALT',        'WnF5Sxy&]yG;xxz~{a^QWH2U>6mYltT_]Q&NJg59H^xtwpsT?$/[f)On~_a>q9j3' );
define( 'SECURE_AUTH_SALT', '?x&r;Ek{REHizM+2-_=beP~f{.sm=?e>}kw+lI>JzFD^!qIffOT#zK1e~]7jYoT^' );
define( 'LOGGED_IN_SALT',   '~@&c/)/k)MP}C7UpjHsxO95LP>pfl U{K/DXN63*(qtltC/VJt0A4j}^25_r(-h6' );
define( 'NONCE_SALT',       '351JD4:yFxr_up|[PR~&H9!SSBJrnsb;C[!4E]5J !Rj$~}{pP1NvJz*9P;[Sf!:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
