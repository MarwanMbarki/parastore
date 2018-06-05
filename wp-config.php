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
define('DB_NAME', 'parastore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%Rw4)@+kj!Yq3c]F;hJ[:_YTJIvXrJ)D?)O*6K#.vM_l$avk9zi,HxUk+2@qCC|k');
define('SECURE_AUTH_KEY',  ':_t0c%8Z9Vu[0 Z|Hc*9<A&;z-4Cue>*O^[4Z@9>`d49 P!#gp0`@= Q$wLne{!C');
define('LOGGED_IN_KEY',    'dugyaU{$*O;+wf7Ui.-P)=bt)4s:jIiE+}0{;PtUDcrH=P^ZDU,-/Y^ul)euBVM.');
define('NONCE_KEY',        'Ydy`,AsIJW1CD<U#qg=<g%.eUM=HwRpXXL1ErH{rRgh nay!ifG,,J-C5OY*t$zk');
define('AUTH_SALT',        '&`)fb?cDk(k>TN5;_e$FJYS/086Vjq8.b+I|b%vFgSu9nY#r$|Iv3R}H_2om.y1e');
define('SECURE_AUTH_SALT', '1arRe*-J!eeznXcdMjIN>Nq+2[to([]s9b,q%{1U:+|K@!j- +@+]j&!?NSBjS~U');
define('LOGGED_IN_SALT',   'A7s,mxOJs>uxc7blqI|k*&y<z=slgOCY:{4z~a-J0Fck%}f-I~@QHgxxX[CK4^_}');
define('NONCE_SALT',       '.0W<TBmYrs~d>x()<Hh9qq.ku!gGetFfni50%WzVlo)Kj.tPU4fUa-/0Z}Zw;)xe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pst_';

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
