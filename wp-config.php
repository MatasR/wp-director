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
define('DB_NAME', 'wpd');

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
define('AUTH_KEY',         'bs$kd%6L_/H22q;G@EE#uPCPUVt#Xq`jmE*i|ZH=XiU0M0[Sa6iFVbNvlgZ+dA/w');
define('SECURE_AUTH_KEY',  'rEA.bu5zmgf`qZj`$R.(|ji 4EZOgW-Om&^X%R+s5q_m&f0N3/{<F)&(sf*>:diU');
define('LOGGED_IN_KEY',    'Ypx>^|imw;FsfPu%NA6lJLXQc69yjF,1Gw:b}{kgxdeJwCRer9{T{Ge~%ZLLN[J(');
define('NONCE_KEY',        'BdFg2NeRN1.2A~g0OTz,}V_8<nZ`;VXkv`@V/uw<4+KNy^^$kZ[}Xu[tvfFQ(X-9');
define('AUTH_SALT',        'z0G|Y`1N33cK2}5{H,DBe6_~}V{p%9.AUKA$;aZ2#P9B?e|te.`z_E]7duq+ZUu9');
define('SECURE_AUTH_SALT', 'T826gk^s(>GVaa&_AqLN$6sW5U)0WP?J>)Z4FG6ZM3xt6IZL@#qHnwv=Vw0(=u>#');
define('LOGGED_IN_SALT',   'C:>;78n&N(Wy!)c&[50NOH~=V<X%7}*VL3zH*htQ3STPdD``-iU0 SF$#P]{!X^u');
define('NONCE_SALT',       'Hs3s4&[#s+zXgp3b&xq9blis%:4qk4;W,P.-U1?[w:K[+/q#1IJ5A=Z!X?!1;}Yo');

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
