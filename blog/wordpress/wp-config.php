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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Popala27?');
define('FS_METHOD', 'direct');
/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '_q?]E*r7h&}aiLE6D^Y@fo0*7ys:3i[tK`>IT5Yf$G;=8xcYi_:lHpAbe(Eg,il*');
define('SECURE_AUTH_KEY',  '=gNP!R}?)F.3YTk3EDkY1Y;Zn)@g7@Rv:oJ_ N-:u6:d-)s?9/Un)9^-4n 2THFZ');
define('LOGGED_IN_KEY',    'rL.T5A!-+y(6SFFi2k{lPKPg[qm9oKtF3tUh@0o4|+|[AWlB+g&+1m~huJj}%/-R');
define('NONCE_KEY',        'U{f.xzH6>Y.b}zoWq]g?a<k<FF6MhIH/G_x{Jmm0r[RQ=2__$x#Lv^iS|fKZ1b|a');
define('AUTH_SALT',        '$iglOzE}|$#:c%1I0u~OivQn8B.RbQsTP*:gy]KkLV]X!qx,7}7TN:9fD29}orr>');
define('SECURE_AUTH_SALT', 'I$AU}R/+$O-/Ji>!,}36:l/YIEdi|^me5f%&HN!f(kyV}h#X]WgX [^.G|Nnu5_5');
define('LOGGED_IN_SALT',   'R}B<|?~7e q0lO>SD8-Ay 3|Q##u4Q+0,N$|AK^A~V7}0Sf{F?$O (T >EVZ1;ze');
define('NONCE_SALT',       ':wgIpw(_!4HD0ujqJ(*aiJY0/h5!)C>w|!dSi/kb>-wQ.O^_W/7!rg|`9&Kp%YsP');

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
