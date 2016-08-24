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
define('DB_NAME', 'handy');

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
define('AUTH_KEY',         ',ui)(0+1LMh4N{8O*eLlh+oom<DbyR%;7JY?6M`Q8D#*.RsZ[YLuqFBBJ|i~nx$/');
define('SECURE_AUTH_KEY',  'BbHS9Kq-SZS f_EUEoK$|Ra+-]!fNASO$#qSp^?NU8Mj/iy3B:}v<o^56v;?KyYF');
define('LOGGED_IN_KEY',    'Zdtd,uhA|k~]Y`R),E^b,W?i*cm52Z?m ,oO2<]fkK}r#KO5/cK!&>n 4icrin~t');
define('NONCE_KEY',        'Ju%:ieXRMgV%a={CZ`QycSIkz,B0oi{:MRo+ u}Sp`BEP#i)I~65s[L3&m?=fZ~3');
define('AUTH_SALT',        ';^4MPllk;xJTCb`Cviz N 0{5TCPd)2E6)o,Bycm9KA -l(,xD!lbH;x+~KjhC;a');
define('SECURE_AUTH_SALT', ' :[tWDE0tUl0lA YPd.x~U{O[+o3@cUuf0Ri4AdtM/@0rL>R7ANct@P!PDs}Lrv~');
define('LOGGED_IN_SALT',   'R%:/^YuPx#xs405f[mHEeLq%J6*~Q(fv$/K29~1}UB0x9~v}?2C/WYMO2%<{0-n;');
define('NONCE_SALT',       '/GWZ:V:959K4Lk5+a-q|$hy*SDx%{F|)>XJ!{:+Mt--sLFWY!0P^DhEJs3p.]z90');

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
