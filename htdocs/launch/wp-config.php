<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kHw$^GBk2SF=tE,X;ky+u#EN6m;)mQUUez} zItv!Qxyd4Y>=>mN!j/z05W2[F!9');
define('SECURE_AUTH_KEY',  'DtU-82Ci-zMON={MARi -{C1V^uw1FsR#3U,F$9e+s;wbC8*@Def<*A|wy3.Q>xx');
define('LOGGED_IN_KEY',    '|XS-mYr,ole}%Chd=|YI-7SD{ej$PVGnFt?Q-^[5)?I#I5j!QuNZ[zcLB{f|Q9I=');
define('NONCE_KEY',        'g#q_58,Qh@-GPW*;0{-VR8^FQ@-!PT<KWvbJ*80Ghf-2d|R|UdQPs>vK+RX]@WaX');
define('AUTH_SALT',        '>=U-}.U^18+u.+5@EYJjtp6XPc@.(:L,jd_J6JP-VioNbX#++6A)T7{5NNa4LR8e');
define('SECURE_AUTH_SALT', '`|Dk&R>o^Vy6>v.*=d:7323=K:;Du]SpbCpm4h@htV@r_ASJE|,P[]#>:cYa&q9=');
define('LOGGED_IN_SALT',   '$AL1G}RqcL=0M,EkBpFtr]7zmK#)58|AxrM/,$7~#E)}&!f02nz*YS4`0T|i%rN@');
define('NONCE_SALT',       ')+w-^|Z4A|&1ohsY+P/U++ 1]2=L`=J! KKo_xsQx73@ow)]F0FG:1`?kbIXm 6C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
