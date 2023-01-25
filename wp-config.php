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
error_reporting(0);
ini_set('display_errors', 0);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+Pq//0&6Wg:wg9s,+V#<pv.WTogc) Hd}$hl@2&AG(**>jcJ[QZ;h_el7Fcpnk;|');
define('SECURE_AUTH_KEY',  '_llh_}rgDPKotFY<Wqy $GF8Ui.!<ba(T?8>tjz}8ok>`Q~_9:>r#^R<=D+/-}Q6');
define('LOGGED_IN_KEY',    'b2S gLl6u;x+|1H:HKily)w@nO7kDST|I=y$61d0iMDKWbIJ?w<qf;al*?@E0q/~');
define('NONCE_KEY',        '!#,Q(yK7gm ZfjL&c6&gct,0SDuY.|K|u^gn}`w&B8N7aocw;r`xwOfgi/6h~~+<');
define('AUTH_SALT',        'C(!5]T Uwu~acow(Eqkb.6B+inI%QSXS)emL|RGpRufC?V2bv(0|[cU!@=x-n72?');
define('SECURE_AUTH_SALT', 'yFLAH}9<-{m|(:FdaKA[U:rln,[DgQJZRUM*f)=<4gou8JG02OxO7+`y>Nw=*j`t');
define('LOGGED_IN_SALT',   '=`!<Z~|2Xb])2`>6d$X9 +wpQ]5rt+HUCJD:hy[>;a-!3:[38#.f*dTXkv9Dd,OD');
define('NONCE_SALT',       'Ol&>0BK1c[q*.n(W.1I^pn90khqxxfh2b]vFs^<)%ifma0|h%`wecg| 3co<j`D2');

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
