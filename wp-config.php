<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
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
define('DB_PASSWORD', 'pau');

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
define('AUTH_KEY',         'LSN.M{F90y?Q?Km>!3qn)/h`y>3FXKQWPfkTb),dpTaB^8*I^2_ =BM?EE 8uyAN');
define('SECURE_AUTH_KEY',  '{LOeb=i%jn R-;e>3]#7.AtPJD_]zkh;o;NoGb|cP.)mt[gr10/xm-`<[7y_%|yB');
define('LOGGED_IN_KEY',    'h$B9ou=gR2pLB&,`:Q9P!Ws_Pj((=h|Grb3T-,PB0o`$#L.{@OQ}j$mc8VfleRSf');
define('NONCE_KEY',        'sgi5% {W,ekjssV7:AgUwV?De{m6j%{h,bn/~~):pE@g6?Or;sSr2fr}tm4tC;D+');
define('AUTH_SALT',        'iuDCcC5==d-wTs%csO!tiU=6wzFUd;vq&bCuSND8rcC:EgOjeVj[%c;cagn_}s.K');
define('SECURE_AUTH_SALT', 'D/E}Rg8jT3(`oeXfnx4O+ABC=xo~*VUxh!L-/T;H4M.+y$>ur/DgN`u@vu#=c/2X');
define('LOGGED_IN_SALT',   'W 6H2PD5mPS@PQ6p`s4dqx;hV UA8V%k&)JS}A2flCbS$03_uVEs<FBGA_4|;wfH');
define('NONCE_SALT',       '`B@4w@hU.;[UrD<;Vv3OY#^BMDWTHGe_2jdDE<?]1kp3)>O32{YElvE+ijXoE KB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gen_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
