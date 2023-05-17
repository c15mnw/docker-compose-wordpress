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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'b~0r^ZvtbO4~3~Y(LFE6_|I(HD}?yS^syvwv?9|Oe+W!lpeFq5xGI@Z?n&!{02k_' );
define( 'SECURE_AUTH_KEY',  '0<Jk;j7lX.}m2_EaYQ%>s(+.n5#ADm{9FAqwA(>Ubew@?(OVf|=Ve&h^z?(7ZL99' );
define( 'LOGGED_IN_KEY',    '6<,9{ap4BA4NpO@NU4l8;b1B*.IWIoh6k}`x**J))lAcvN3lJ,q:Qf|pfKZ,)H$`' );
define( 'NONCE_KEY',        'Wqn-^lX*9y?T%pp84VB!oRXhrur#,L+egqH&Mzr6:I&0DPG[N3e|fNzqL;*yosA.' );
define( 'AUTH_SALT',        '|jLlUtzpY>v!(v3It_sxsdGCb<ug3{#,  eiQ &kF)dW;/KDTHbaDxl3[6za2n_Y' );
define( 'SECURE_AUTH_SALT', '#ZrLUqstv}+(nH.9YG7Ua?zoT?5eL9SJca=pQh.BHg8`/45Z$BcQ /*8$T4U6IxD' );
define( 'LOGGED_IN_SALT',   'i!/-$zaG;@nPiIr.+C*aC,WeoL|h(M43-.&wl^1(j_y%7)7>^cDtj]#u!O~t:8f)' );
define( 'NONCE_SALT',       'Q2PH!qwveS;s8_/Xfe0LD>$jWd0-@Leqm]o7S3v:S5u4}q7vcf&eh^&+t^^8n]AL' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_ENVIRONMENT_TYPE', 'local' );

define('WP_HOME','http://localhost/my-wordpress');
define('WP_SITEURL','http://localhost/my-wordpress');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
