<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest2' );

/** MySQL database username */
define( 'DB_USER', 'wptest2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hqmptuyFT6hofuhU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '87x^#:0oKN+6?}-#Jsw_GaR.kXq UHCr-YI4yah![KCZP+GAU(DsTL0^jDrX(nwG' );
define( 'SECURE_AUTH_KEY',  'n<~l.0kZV3BBiGMCr>fB$vZ|3TWqw]lPE|tAw#dW)vbUFG[52Flu_@f+[b#muLey' );
define( 'LOGGED_IN_KEY',    '4Ak3|3Y,AZ7Z<wy@zj;%ix~R5 8_0RYQ6JQ :5;67HHg/(<ap[-/P=cydVheCr?s' );
define( 'NONCE_KEY',        'k1fGj?@qY ?wBn%hCIKS6xWOrCm,0U#u`elU<RmOQ`eho9mfx5[#k7V`5]8rR.gy' );
define( 'AUTH_SALT',        'pXj~ZMe:4xy;I+Hv;$eSOk 0(SbbJ1` Wm/* 0,{nfo30<4yuV p_T MQH$ia;^V' );
define( 'SECURE_AUTH_SALT', 'V/HQqVi1YEVZk,746&G=Wx@z>~~o<Az^9|Z-Q@{gF+O?{kF,hc>cRf0<W4<B.)<u' );
define( 'LOGGED_IN_SALT',   ')/q!Pomy>?wZMSLIa@Ju~-7=BD!ei%p+BQ,c,_Jv1#M*U7AKV%^6[A-]nQd~x1K5' );
define( 'NONCE_SALT',       '-5bZ=`7U0*aG`b,uCr;e3[ddg=H&dq^ *wV4`p4|sf4jUV&@$-mX?Gc$bx56#zmb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
