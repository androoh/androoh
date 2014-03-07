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
define('DB_NAME', 'ed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'olvH4:%?$8zn<-svq}irG +GE?j/G +;e`ijcb@mOWJ?K1?;<hv+*YMfPen0Nj9p');
define('SECURE_AUTH_KEY',  '=Hgu=@Y-=6v ALpdi)N^dMGz$-w=F#HgoJ90+{d3Ok^a%(gcqR(0KGV;bO821dv:');
define('LOGGED_IN_KEY',    '&Fg,NyicPItZ:Gmzz7,i-I.OmRZkl](5o+r$@UgN4tK&yB:2pncCi%4eI*,eg|TL');
define('NONCE_KEY',        '/MEHAo.D%YfybxB%{jfLql=U[oo{`Z`PXI|X<rt:Tuv=c.zwP1=%HUt>QT8K(ig&');
define('AUTH_SALT',        'YvBN??6|:UKP5[8- F0I83wWR?y}4jw-pV>ccn#IzOx}|EG2.&*jfntB6 +%{-{=');
define('SECURE_AUTH_SALT', 'Wt3}AI7i3We{kem9p{1|M)EuyPXOfl.In(+DKA=[n9VOUhm[|S>K3:!gm^w;GFtf');
define('LOGGED_IN_SALT',   ';~v<Ytdk_h25BjlJxk^!+;*7b-0;n+{Mg-Cb,`v-{/TIQW iyg6INNI 6Ns[)gS<');
define('NONCE_SALT',       'QR*;-[jm=;c6QATE&YV-|trU~2Loze*q1p`-!-8:6$T=d+8Y%/^;?{pk>JWz5s{9');

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
