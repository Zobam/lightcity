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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', '1212' );

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
define( 'AUTH_KEY',         '~C*4;i_k$Nx;Lg_C!Z+O(Pd2[pj8OTs+q)?fS7KtTRMmpr`%o)5QEbnXXVZcVK7k' );
define( 'SECURE_AUTH_KEY',  'iQ(i1ym910D4T[6H{LU667>=LTm9ziL QE$$H,N9Q,ew$ejL4yV*0[wGQ5_+I~s;' );
define( 'LOGGED_IN_KEY',    'Qn5OzUtml}adl2q%=lmv2balO6*u8 L)Z]FibTrPRuK<_@3%:?mF_kmp+LCwM&my' );
define( 'NONCE_KEY',        'vG=u+?,xppP,x*^/i YP<GRDFkFqO*jOLfw,t1]%i#jxYn>^a7j==K&U:}Zj/ZS}' );
define( 'AUTH_SALT',        'oMKztNO#gr=x5W:y@,Fp(]L0% Gip#2LRqAQ.LVZ_l%etY|#C2lc( -Q+-Sz_2P!' );
define( 'SECURE_AUTH_SALT', '_=A?/9(^EkQx[J!`VL49GGU?Z!A_np~g}K#m$%gmPWT1KFL;zex0|xYz9w$pKZY3' );
define( 'LOGGED_IN_SALT',   'sPg6A sk$+RT()(+x^(Lo<#y7Du$)bv5<c[Jr2!CE8NU(pczFHoJZ&c0x|ch Jm%' );
define( 'NONCE_SALT',       'W8Ybb<tW@3|;IGr8T1&1k$C3eDcao^H8g(_W]4htR=#oB?b,oGZ!q4V2l}$`cfU}' );

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


//ftp 
define('FS_METHOD', 'direct');