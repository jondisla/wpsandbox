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
define( 'DB_NAME', 'wpsandbox' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         't@@3U$A7Qt| &av&a4+8T_f+eH&X7|br|!N$!HUBi8hfTTruX#oKAToT^zfFsR,u' );
define( 'SECURE_AUTH_KEY',  '1Uz3S!(06}5yr2~%CG(1,y6}o*=}o]]6:G Rz1w m!!<I|$}W*!?Ai(XJJzktmd0' );
define( 'LOGGED_IN_KEY',    '1O9n9{GHr7lm>@?}$Iu^6/!TLiO%#L$&@@r-xcYu2WQ()V!o+$7XUf|RPsh rGlo' );
define( 'NONCE_KEY',        '^$%UKU2PYcwo,7D!_4?Ca&t!-jiUvA4%*q:[CG#i(yfnZ! i0K=pOB8^E3,&!-X:' );
define( 'AUTH_SALT',        'yu`#i=gvjhW4#sn/H%iW9};6H(Hin`MJGL;g}P1$*n|3v6dWx?kf)Pc<XiCh>dKx' );
define( 'SECURE_AUTH_SALT', 'G)aq I9I}faxuj&4_TFZk?:_c@5f=*Jzm?J]$|_lw+Wv29ALbBxAVV<o:P-M5V8*' );
define( 'LOGGED_IN_SALT',   'dLuC%(( `],eIM|wJ+zUR~*o5XJ;rU5SOvf@}e3xZ;Ot(+1BpC:Sl-PZ@(G`yC;W' );
define( 'NONCE_SALT',       'm8]OQIU1@CF}4#J5*2&-mX$AW]`wpnQDi?sxP[+ @d?sdx( :r6tE|/c1JL1B5Xt' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
