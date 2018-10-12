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
define('DB_NAME', 'aqa11use_wp825');

/** MySQL database username */
define('DB_USER', 'aqa11use_wp825');

/** MySQL database password */
define('DB_PASSWORD', '9@Hl(Q2sT5');

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


define('AUTH_KEY',         '$@<AKW+!z]C-=vQcX)-G{6q}I]os;?$Lc{L+4>+v9E;eHn6jQG2w-Ot6T2)D(;lv');
define('SECURE_AUTH_KEY',  '^F^0;-W$BgxBgw|+iUG-(QO[?Cl1yO[gyK>LkvL9]f{|Y}YhG(fBra`V9m:Fx^b@');
define('LOGGED_IN_KEY',    '-.?xJ$81]u-8>[@n]vl7M%a=+Tp&[L?S5a#qL?8XSD4oi!D/hJ*Mq`;3em+m_?g|');
define('NONCE_KEY',        'CC/2i|-t!=8*!u@3P]m3N%@*6L:o@ktov(TP75B:e#>_LHv02;lOy@_sjSxF`|Wr');
define('AUTH_SALT',        'UcQY&F@T?RQN$Wix9r2+mI?$a@KE?O6Raac4/7a(q&u;!8h{JIL5#,J!Cc%J/jg[');
define('SECURE_AUTH_SALT', '[Hg/@hMdj<-g+9Q_|4Ug.N^@IB]KDDj++NrjM~j3QInRA0d-uTv~Pm-+t^E4$+F|');
define('LOGGED_IN_SALT',   'f-*n7d||w0,,+,Qy:zi,S`)BeeeS%@*/,g;D6nEm;C#ZC:Q3P8P@UW-T+BcT4H^|');
define('NONCE_SALT',       'Py#MA)O,&/FI;(3wm`<*M+}d`VM#5i*>{|IOxUL7z[th#3-y^cQ%t`x`ajO{XH+?');


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
