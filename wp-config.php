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
define( 'DB_NAME', 'low' );

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
define( 'AUTH_KEY',         '/*X`s&[44DY,~G$9oc#:mR]M8X}C}SoV_,R%IO!IWI^WPn|*a=CI}Mdx96vYoy2g' );
define( 'SECURE_AUTH_KEY',  'r0yE_I+Iu#W,[[xRMf<Y15FM2+{dv?kyMCUEyt!ML@hK TI%S{2@<.o{W5j,Y&We' );
define( 'LOGGED_IN_KEY',    'YJMFWNL)X/Sx/[`+ $`}5V~7F22Hp*Ws@1uoF|$sX1%s=fp,l9|gUjD$E(X~TH>V' );
define( 'NONCE_KEY',        'XWZNeVD8&0XbSE#kv.%M5@qA?it[uN@Z?p}D_R+lcOLUdJ+dh}fYqOw/o@l{cKKD' );
define( 'AUTH_SALT',        '-G_MAF~Z]G8*y!F<kf:,p#,|.5-VL)!xw z_ iwHijKs@KIgozQM*-(gGAM@y$F]' );
define( 'SECURE_AUTH_SALT', 'hc.Wq+;oC=p9{)@kN7-<1cT3Gn[)-p=~YS%_:P9Bf?rV1sGq{An>5$t>~wQal)GZ' );
define( 'LOGGED_IN_SALT',   'fJQ^1L7_yod <CQh+gW&`O2AEKs8f8}74065NOm~*0%/(GHZH$p)Zq]fgffJi8<K' );
define( 'NONCE_SALT',       'OA7W#zN|4,P)TCYij2)W_XZkh$0*qR(5kEMyb$d^)m!St=C3TVWoC/GaY]V0K-A~' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
