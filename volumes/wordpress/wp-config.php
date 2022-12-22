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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'G#/dk`$#*@{hwk>nu8ti;=t`_$[pLy-M}g4X_ecIxE).@O5%E`1YOj7SW[j=v_3n' );
define( 'SECURE_AUTH_KEY',   'DtgpJ9.vT]{uo[=<,O18m!?37!a4@&Gu[!7*[N(R+[!R*JEnnOUj,%IuwAla~E_`' );
define( 'LOGGED_IN_KEY',     'h{9>vT_(gQ}PpMD(]Is5=_.{1*iuU<eH^f|}|Tl8It$PeEkk`z,H1Tv.&Se3?bv{' );
define( 'NONCE_KEY',         'wUC?p>Vyh)qb~so$Icgku;M/O}{6ib,! }I}j&w)Q9@mNQiKcEOaLnbih YiX/<8' );
define( 'AUTH_SALT',         'EZ/7-6sO m3VtXs1GA5Is?+g<=WK~kFf2l^u$%Q56mVsFwUSApRI-bcoabAR(Y54' );
define( 'SECURE_AUTH_SALT',  'mO3^/}AJyxV[}#wMW)6WB1a(7>FVMb4.;=.5UYYsq*L~ahl3Xw`L{p*yh8O]pyBT' );
define( 'LOGGED_IN_SALT',    '*s_>EH8$A3WS1x6y8[}?LdW)[D5jA5;;`t80.jx-$W]:71npxMq.sFL&Gx`y6|KY' );
define( 'NONCE_SALT',        'RLSHZOF HbKmUVh5Mx-_.>PNXDH~b)$^NH16dmjy3QM&hVFXLo|TxULbdm7sRE.}' );
define( 'WP_CACHE_KEY_SALT', 'vmV}NL:@{wgP G>kgu<h[$Az{xZhZ7S4cykiV&nW][osV2^7JriqNe|39g(jH:Wd' );


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

define( 'WP_REDIS_HOST', 'redis' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
