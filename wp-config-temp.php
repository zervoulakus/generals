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
define('AUTH_KEY',         'm@ui8|wh{/Md=KY-]=> DuGKXir#QI|XOLjiTKy~[B8hdvPnbD$M|o7%E<~A!}g0');
define('SECURE_AUTH_KEY',  'Mgs]Zu;2J*OpA!Uj{ 6_bl`Qe|k3.S_;QR`w*XdGTn}5vwHhri~-Eum&bn`gQ0BL');
define('LOGGED_IN_KEY',    'Che+>`m5U`giv4Et@Jw#^0sYfvXvVyykyd%AF5T^ImGL5Zlx(cjOK*)r=s|},zXW');
define('NONCE_KEY',        ',PxW_kI#LqnCcgV%@=h9O,D]w3Tc/~/Of,B V{:}?1?%t1@V2)lV+Kt;&w;AY--*');
define('AUTH_SALT',        '[kz1_i-y7H`Aq+L3@-UBowXLUvadzbD&jQF47%dn!StD,f6=#E4NNF:csdHE?I|3');
define('SECURE_AUTH_SALT', '{N$9*oFSfs9Mx=H|c-Q(XU}eokD4yiaPR|?kf<ll|G;E+?cTT6M!FA?:KCV^$vS1');
define('LOGGED_IN_SALT',   '*!8 z`x8^`)W*Ljt+Ba}T`Q;z6F$%iPF=PjR+,u_z<Wa%ydQIIl.hn+Qje5`>GpE');
define('NONCE_SALT',       '_8nL{<4zUhG4PPeQm8r|d^R`6d@NjkHI`e~N;McmYhZ`}#4[FCV=:NlS9@<E&5IH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
