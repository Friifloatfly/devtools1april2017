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
define('DB_NAME', 'Devtools1_Hines');

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
define('AUTH_KEY',         '6Qqj#y?/0XC3##y~;%||RUS6+u8o^flUcAkA{a;hbDAK2b]MxS)cbp]+Bx2Q6L1-');
define('SECURE_AUTH_KEY',  '].z%c@IMkK680Y)s4:`;L>8W_%t2T5s:Hg. )(vgO|d~:z8*EZTsx;);HnA,>!O]');
define('LOGGED_IN_KEY',    'xi%{:M5,l8HcDb 2$)AC@_Z*~fK{Hx{*9w/?%nHZ)9#E7QaamXoF7+!mEL/y@)rm');
define('NONCE_KEY',        'JN-X!wQt#xc95?)pX|AD}uw;%+>Jz=;O;30BCa3qIQk/*mAQ]Tpu9k=qV4fgMFW,');
define('AUTH_SALT',        'sXln}XV=pCXEa$dR#=bseq%&}%eG+4_AcahB->pIOo58pk<5@!Wx9U96HyBtNW-`');
define('SECURE_AUTH_SALT', 'tr)&#s@[|Tpf)W~-drh0=cN.INm>;op`K5JJueAE0#vsUyG@jc^q;$EVR|Xl-2dt');
define('LOGGED_IN_SALT',   ']/S0hGQr}v2zrfbj$p^Q-6{lMZ[~])guiq=WzKPu~g.)M`vmbER.f& +ef-TB$ib');
define('NONCE_SALT',       'GQ$0b2H2(*8]9:y_8!_P0TdM/^IT8dF!8: 0{<<Qm|ejG|aL4^W1)`!U,M|}H)zu');

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
