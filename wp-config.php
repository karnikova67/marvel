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
define('DB_NAME', 'marvel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b H I= 1==0H]JNDHukZny*U(+1D+V1VScz*85Dob<EgPNc ,AkZ}~of2n1{%Fs]');
define('SECURE_AUTH_KEY',  'M*5Q{HzH}ay5ws+q+<P;iC!G3t,k?cb6y-q3Qe4E#yM)E]N@U2#R[Bz*S4 JXW; ');
define('LOGGED_IN_KEY',    'B*exkMZX<;)vf0VFR<QSe*EkxRmx_E2u9MOT1iC+Qz 08x6>D7C%ZLk2KfE%+y@:');
define('NONCE_KEY',        '2O<0no}ip+FnLb.bBVzj.mSQ(!*FBraP?470f8g*P9ZoF-B[WHIefHF|-Awq6^l{');
define('AUTH_SALT',        '-,-uaOT[*Tm/Km0#A.ol[Zlmw/<zGeimqCd}ydn(~>F$PZ=%6:w}K5 qT#xs>5?S');
define('SECURE_AUTH_SALT', 'O(Ny5/RkCdl]]L*S&sxPv5zMV][F;94^h$W[yI=_ViW>%tJ~]1gc.+T# e4{=HS3');
define('LOGGED_IN_SALT',   'e.#a ,#2/eVIx~LMA]>On_u|`1DHLZa#YHQ+>t4ai?W u[ucKLCp;{|IB[,D?_SO');
define('NONCE_SALT',       '+U7soqn,y ,B=W[wXb!:ADpj49fA-s_Tlf3x8pe`#w~~0*[y6tCcv^4mm,j$3BvK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
