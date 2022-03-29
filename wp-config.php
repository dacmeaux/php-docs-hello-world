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
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', '^9MRJnBq*Okr' );

/** Database hostname */
define( 'DB_HOST', 'dcomeauxmysqlserver.mysql.database.azure.com' );

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
define('AUTH_KEY',         'C-v.-HOd7XvVi{}%K)R$Y4&_A{^fBBT;ljix-1i.|(1o84/uxC }5)$C&68u4(ei');
define('SECURE_AUTH_KEY',  '6-i<wPIq%OnHQf-#4{#!]q4cQuNaOdSm|@ppw$%C+#]lHQ!A0z54^X#lVo>Q=`hf');
define('LOGGED_IN_KEY',    'ju&W[[OKhU-l>!ZD4_sX<w)TLz_I-&AHdXg1R&f9Xxznsfw`~|/8p<@DBbtq|Auq');
define('NONCE_KEY',        'w9+SOa[d2v8d6-|fBn<UbRc&% {QX(-V3Lt|.`AhV+q@OLCh51G%2;,t+*+iPYB5');
define('AUTH_SALT',        '8Ltzg;>(_ xvGL:qq^u{*IcwLEdAIOkN!und])%CU~ [{_U#AvD@|0NR oS^~5 :');
define('SECURE_AUTH_SALT', 'wGs;<43F+=%3C+,lMAFlnM%,L0yipX-v]YX-qK-_q~!~C]Nqg`Ix7&OuWZX*%+ ^');
define('LOGGED_IN_SALT',   'iAzM7fq`K;<DS<CvO6=ZU[3CS^WXBF$<`02k!K{!-ZqCyR|$u^}*Un/yYal/*o G');
define('NONCE_SALT',       '&3p-T24}z=2qof*H7xQ5tl%-2afA8RXmN]e^BV_j+N 8#$bz;AkP5_4qmoE(nj(8');

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
