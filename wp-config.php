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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_portfolio' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Dogsdancing5!' );

/** Database hostname */
define( 'DB_HOST', 'db-portfolio.cdz2q8nqn0ki.us-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'N0LC711Ub$43ZH%jeX[%Yt>Olu&l.JIuR`AvUW8~5,s*=o9r#/,_|](4.)/!D>x}' );
define( 'SECURE_AUTH_KEY',  'vRFNBd@0-2>x5_eFL7PN!%5u(Q0Y!l_bf6cJ{jK_k1=Q>96XoQDFL$V_J2qDhflS' );
define( 'LOGGED_IN_KEY',    '/9azZ|;0Ba}i6G{]fEiCq1a+Ryb<5vyV~LT9GFiUjy|+B>dRC_kxtmKFMi&jN98[' );
define( 'NONCE_KEY',        '0uo^zm%weU6YQ%k78!A$&yxh(Tv84sa,&Uv?EUh5#r-78e-}kNj(!vZyC A$0$Vq' );
define( 'AUTH_SALT',        '?^>)p]< Nr jVW=cLZ+=UOeo&msHP-:xoQMAz#{+A-!sArx_DVB%1;-D9rYsa (M' );
define( 'SECURE_AUTH_SALT', '1#HcrbSu|S/rL[iax{NxG:gId)_%f)unD ~VCZqMZU8@d}jKPK)y:|zc1jS-Y_?b' );
define( 'LOGGED_IN_SALT',   'A$t@df^R=jkp[Js^=H8];4u%XX(xOg&m2~-!EZJRPbk:X_JGHY%C;Ax8(?i=9Rg6' );
define( 'NONCE_SALT',       '%`[%&v^9*)70n<Gd^Kc%ZV^|_oSF*ZvAd#cP:~sTz,0)T/Rt&E^gQ8Q kbLpUf~U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_wp';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
