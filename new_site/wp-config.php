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
define('DB_NAME', 'wp_palestra');

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
define('AUTH_KEY',         '5+wT<o3{}H54_!y_.Q4?J|&;{70PPFr.a{^u{nk,_ f%CAg>ixHx|8^BKXPs!^Zs');
define('SECURE_AUTH_KEY',  'rt+t#CU`XdY-nUF!h24c%:R,>u86?M>|(B}]IYRVP3PT/O]18}3n:H;RgVS5U&NM');
define('LOGGED_IN_KEY',    '07,Rm7/<xcOQw_@3~~CN7ao2cl8iJ.E_(:8JXVS3 di|_7I>Dh7;sp9aY?ryE6|)');
define('NONCE_KEY',        '?_k5x1*Bk,AWFq$U`JnP&ZC>)dB#o}k$)h{*c%qmYQTn44xcrbImgPexb>>%Q[&F');
define('AUTH_SALT',        'zOonFY9h#4C3!pH/=JL5;%j)+WB3(43|j#)wAgOUB*p7$THczpexHHtbQm~/sdGe');
define('SECURE_AUTH_SALT', '5[k*Q7rsg_d|$/~ /ijK6[JwAMH%;g4|,]JK|b-T$Y+aAIFwL@I{$IV[y#jbr-2i');
define('LOGGED_IN_SALT',   'gOVrX)TdbNf)wRv4BcIraPSraA.s,%C6ex.?_D{_}>isXG785GF.LrzvPG0LYWaH');
define('NONCE_SALT',       'vKR=j8Dgj:pQSoEGzaV(.^X+8*w 0@5]&T{jd9nvgs7]NZw]yuv%<?If5_v2iBIe');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
