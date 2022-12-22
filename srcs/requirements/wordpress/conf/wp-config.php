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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'user');

/** Database password */
define('DB_PASSWORD', 'pass');

/** Database hostname */
define( 'DB_HOST', '171.22.0.2:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_CACHE', true);

define( 'WP_REDIS_HOST', 'redis' );

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
define('AUTH_KEY',         'GVDiQ)o}|[|k5Ueemfa:{faPNWe:m!MFW#ZK*Rah_mT[P]3W=--i8V,@(r&V!ufF');
define('SECURE_AUTH_KEY',  ';FDyHBx^B~m07d?eP&GmB~~LuNz8S-oda!H%vZ7k waEs*<,W125<#$S1J( kixx');
define('LOGGED_IN_KEY',    '{o23WTw&_L#gV+`GTZ[cA@qEER|-]H>,ZlVq-A~xUtyc$c/}fdeICy[l[u};yv-j');
define('NONCE_KEY',        '2K^i<MS&+Kv2YjXU-%B++S]lr|J-<E ,S.#I(~}E$rcs~pvZ?#+O_|G!^F<SIT`O');
define('AUTH_SALT',        'p?#8# )]>310kdPFw(^[s%AWaBv.ud)}(cbcsF0s-sTelKb#<M*U``@_gCm6]V-m');
define('SECURE_AUTH_SALT', 'a*hd;yPFs&o1m*a-uatx86M:Up9oO3B<*))qkX+T-wRDK6@-}1ZW|4M|RJ>R:S(n');
define('LOGGED_IN_SALT',   'Zq6/PSOum+(2ZS@-IN+Amqu:wMxPPS+}_:c1K=fs6Z[I qm}V5c6?Z]E}O3W9774');
define('NONCE_SALT',       'WlIVIg +-a=kF3pk#vcIx)6~(sx&2e-#_@eEr5^R>i:mV*CKDh;0|KBx =z1Nc`O');
define('WP_CACHE_KEY_SALT','WqGE<!|;mMoxaC|f^u?]<%#k.*rGIEG|a4oDc0._&^#*V+&cP$msYTP)L5,Scf2G');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';