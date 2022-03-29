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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'e16%2d>3},0_PW]|@HHH+V*R!*yL]B|E@bm7GWUMoV0_S$:b{3}ysZzkX]}&QK>6' );
define( 'SECURE_AUTH_KEY',  'q3ti2jCx*L:{;ij8,z%hq(ymDxy|Me)!Z>V`blKaWX<Z#ebH=EA-RY3b$, (|Mwx' );
define( 'LOGGED_IN_KEY',    'GRTpyb^1Y99Rgdl7V-Dm/~+6mva$,n]Y*_(@g~t[p|To9p{Zf:~qr*4cHLn-b:~D' );
define( 'NONCE_KEY',        'LCSkeK1Z>y#*WfplX*pjInsYG0|!#?`<>/?;{a>oS#FoFH$#SwC@PM)k{Q#HGAN`' );
define( 'AUTH_SALT',        'd1^K5;=%dZZ5z,^&353(bQp3Gqnx{i$z;FT9? Nh1kp)W.g/n,jAR]];gT?{+V!E' );
define( 'SECURE_AUTH_SALT', '+(|Z654+8,@9 vHCZJSbX,Xzgk=rlo/{3INIgKcZ hM0>JDJv24(_f.`QLVMns/#' );
define( 'LOGGED_IN_SALT',   'V}P*vm%:,h,N~s85I!fc@9L]052SG%$keF89`rbz2hN9cYn9Il&xF){m2qmGduvJ' );
define( 'NONCE_SALT',       '<:TX}pWw:_5Gg{Dqn;>)i*Wls )7L.P$p_81:5(%yPP(DUF:f!:6St-:/=7+eAhj' );

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
