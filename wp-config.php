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
define('DB_NAME', 'other');

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
define('AUTH_KEY',         'jQNu|1lyd;{QrgdnxQCTvO*E)PZdEtS+LHUN_eWor|;@Aw]()+|&Jk_S3U/U/;Sj');
define('SECURE_AUTH_KEY',  'M-CT4wOhz-d]~NZAMl>.dJJs0zJ)zbsm7s^jbu-0^Aphc`,aJ7<GHzcg#sRbyMO4');
define('LOGGED_IN_KEY',    'nTZ+7ND_I]=I~IF0$H{Scy,:+-u 5T.SVbh.FGOy,J%-.hl_I[&,K|TQL!I-e=z@');
define('NONCE_KEY',        '1RT#]9mH/rhu:Zv!^Nh^)Gqd/+L1{.nGP/]wsc#?GIa =!(gJn?7b6yf G9(}3{=');
define('AUTH_SALT',        'E<TNbKwyG.n<`Azy;9?7x+:LBe1HtLOq}36wi-h#1xH(tO+[qk2k4Czs}?g`m^nq');
define('SECURE_AUTH_SALT', '=y:.bta.b+2GFVx!VYKyPK)QFH(/S pp4e[#:70!YY3ydc.|b,aBv-6@|+9s}-(|');
define('LOGGED_IN_SALT',   'N?net>i&eM<,0b1e+m!gXL$UtL}4&(xI:#cjVIXuY5agC>?Q6zSSv/zgHj6QzJ&!');
define('NONCE_SALT',       '  =q(;[s(6m7?)6LE#)4(d_<Sc-eq#{<*<19+G:u`|BsUvr*h5l+1PPE]}+06 *<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ed3141';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
