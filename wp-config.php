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
define('DB_NAME', 'devtools1meydan');

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
define('AUTH_KEY',         ',]8sD[K tkp!N#ujb367>&SHY/}S$UK@Ox &8Ezs2,4g`y6T,OuG0anx,XFG;.xk');
define('SECURE_AUTH_KEY',  'Zk hb/d<dR57{_y,;-v?$P6k7WY^5Ozr2IzjUHP{?!Z<#KrK@S|2qyIMI.R]0=|$');
define('LOGGED_IN_KEY',    'd0U|E|wa~svr|W!r=]ug]te<a<lqd.e8oi5_-Omjo_r^>J0YEI{l,DQR^0;X#xfv');
define('NONCE_KEY',        'H tU6Y]k%SIye,ePy@HF;7jg*fwd>%8GvjsI^*8%]DOr7@,;/6LE[nK8TevfzUJJ');
define('AUTH_SALT',        '*ue|,fwj_PHapYDk4OPgmpaQh;AJp2_Iazh9b1Uvf0st7 v.ozGrokA-p2,=-;>/');
define('SECURE_AUTH_SALT', 'Id`_pp}(85Pg,O0tu?^BPw,Zl4/}T} `<.@+[h;kEK!.[u5#Sw({d* spc&PQEck');
define('LOGGED_IN_SALT',   'a1PlAJ|7<#wn*hfk6g4ol hsG1+tI<{WD>!Y}m;#PC]x$s@^VMa~mtpRS&v#Z-p!');
define('NONCE_SALT',       '%g +3&]B}h7lSE7h v4;lhSVu9;G`Z2%v!.VL!5o>wtuDmf7HBL$9KBs|80*qMtH');

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
