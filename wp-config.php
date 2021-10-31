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
define( 'DB_NAME', 'fiverBertani' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-3br5N}Kp(+)>_.kJMH!oVb:=P4LJ@5);_=.Sf^K)e8fb=citMv+KT!*/jCnBuc(' );
define( 'SECURE_AUTH_KEY',  'xJgQ092g^8)gX<G^>,WDri&ZC,pp;IyJ(894lj,:EY/A%w6=X2H.)x>(~jG5jjK4' );
define( 'LOGGED_IN_KEY',    '91*p ;(pGa={.8hJ)E>t29^(.[@[#!&Lmrm;#=B1CZ?Z/Ydlg.Z] ~<An^_n!5EY' );
define( 'NONCE_KEY',        'U|D$0/>z</PP(Q&7l/Q_09fl6HnMhozES}(0I2Ja#OG|`Jp&!|]LvGbws<Kt.<Id' );
define( 'AUTH_SALT',        'pUeN)~[+Y&A0&x46|i[f.&1xP}u=IhPf;)=pWMn*JB|Hh1I~^La4)RDEI9Zx}Hqx' );
define( 'SECURE_AUTH_SALT', 'O9/SMKnE6rw-i `?/]oG*%%d;p=7;D>f[Z<{w*s(yv^PGSKl46Zrv#% *7dO[`uC' );
define( 'LOGGED_IN_SALT',   'QJ54K[?D8& pI(BgDZEi?#(0|GWP8|WHQKi<F4eMsI[6|T4TwFq9>@)I44.e5a72' );
define( 'NONCE_SALT',       '`/u#xY-CIq3)GW,#v^n@5X>tQ$|/Dh9g0<w]g3;r8vP@mAs#c:>mit8]#UNZ^AIl' );

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
