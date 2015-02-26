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
define('DB_NAME', 'htht');

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
define('AUTH_KEY',         'z~;OtAA[Q/H(wNgWTVaS%WwTc*,$k5]rl)FP![Yrf&)`6g&!9x(ncUaCu?&]8FA-');
define('SECURE_AUTH_KEY',  'ZU=1 nCvjz5/v1ls`#e,mSx3k44]:]fi083XAi-GF&z)Z26A|XV_-c@Vgx^zWgv-');
define('LOGGED_IN_KEY',    '_MSA^#yAZ[MLgEI/t&@NB|diTv=#G6T2^Ydej7{/o+h+`fJ(u87NAa`vlTgJFTt<');
define('NONCE_KEY',        'dkhe}]x6TUp:POemrlbgl|?oj$,BG$[siWG; vzC d+}k/J<cFrW8e6ALjgQC4eU');
define('AUTH_SALT',        'I1KAX+d|[}R+M152BE|bEi(CP+m?p@d Bd)J>-(RErb}RffTCC-0F=|GOI4qs[)k');
define('SECURE_AUTH_SALT', 'jtpwYaoer-A(Vkr0BadrQK|c}ALs:Nt]FVjI<[)l42$y$F-m,jBci+-q-Dc+7(^.');
define('LOGGED_IN_SALT',   '|?{75LCD_m:+FD=6K=++~NV%P_|+kaX1 Ia47-}ndTZW-+I$gc2T5!S@eM2F}}<D');
define('NONCE_SALT',       '0b6<w*-0z?5dg}&!}+ B}<ae+~#PaF<*}+|ltBj-^9TU=Amg_H~E}_N, TydY2g+');



define('WPLANG', 'vi');
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
