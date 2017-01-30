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
define('DB_NAME', 'test_coding_ninjas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12vv90yy');

/** MySQL hostname */
define('DB_HOST', '172.17.0.1');

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
define('AUTH_KEY',         'C[cd^xKwq0EeVSVo?F:I57n`V}}{~y*j#x5o=q!)^aa}9LbzNtxs?_Wg[4U[U`2*');
define('SECURE_AUTH_KEY',  '|<&VUdVGDobM1gU.*g11`KMqhBX|2!K/oiGJ`JCb[jgs!IW;C4SQtwg2>];ukanh');
define('LOGGED_IN_KEY',    'Z}5yLOOC6k~o{vh)qs!i*AX:>9+G/w_.g5*>;~@OB6flo]bdMWCj-hi nyq$dJ|2');
define('NONCE_KEY',        '6K{hhZCWGO fhd6uVpXWdPMN9+ofU0$yuR;?_Sh`k_%=6N,(n-&uk~VjLx^{=WJW');
define('AUTH_SALT',        'mG%t%Ww+T7!{OsepiXnk1D YF DbvYAcLycH;suAbX(p<d#l(^EI:g~du$K5:.fb');
define('SECURE_AUTH_SALT', '%.rSF;@71v K2Q9(YAd}`Ny[MusG3rh5J2A.j[|xy#C`0D+e!9YP/vM8Fhu1tfEC');
define('LOGGED_IN_SALT',   '-vR6i,IGn>+AzLubhjeToa&F!?(oazBY~jRb~*R;GMe>bYfGd!Fgo1>rHE5uXI} ');
define('NONCE_SALT',       'RIFt+~yzYItvo(w,yDF@sFGRN,hir TRCv=JQUM$m_#S(u/NwvnM09;W4:fn+!F@');

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

