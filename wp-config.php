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
define('AUTH_KEY',         'L[ )72W*$TDW=iJ5RzG+|W8u|LZ8=Dv4;*~-3</^OkNxVtpzxD:`Y0TD}s0RO*kJ');
define('SECURE_AUTH_KEY',  'xSNj*>dHzAV{-a-ceIWQnEQQ+Pf?Yq96NxUTB|`b$3-JrOSmFAB:<bS|=(L|:5E~');
define('LOGGED_IN_KEY',    'Q;eNNmd~qLyD<*kw(e/v}ic?Yh, -oe kG)|[6*9&1BTU@?(n=K(*G.-3l2UEF]x');
define('NONCE_KEY',        'x)H}|S;-3f8_|]}`?KZF,@x05F4t9E2bQqJcLO` %pi6FBm3xG%w^~^)zV5M<8B[');
define('AUTH_SALT',        'U6_YnzwThv4H{G]-T{ooV-TJ##3S8SDN-0<9@$Fvgp4SbTW7o{257q+U1:]@N;](');
define('SECURE_AUTH_SALT', 'AR{57.w*g+/uCXQrMDe#XlX*-`d@j-vJQ(wAZ;o>{]wwKYPK+M9wC1!Gsd.#i(#c');
define('LOGGED_IN_SALT',   ' g>E+:Z5%9S9QXj2$D4sz)g(f#z-|ZKeY%p6&*QLIq5{7*RIy@DbdjY`eR|4=*<n');
define('NONCE_SALT',       '6-pq|A$O[Tj(fOd.bQM~.k D-9MRSzl-W=e.e&b3 X8%*zFB]$R!JL`Z*VVEF_18');

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
