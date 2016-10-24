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
define('DB_NAME', 'u536192151_eira');

/** MySQL database username */
define('DB_USER', 'u536192151_eira');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         '+yrt_WNJ*Cz`!mV~}HZlQKn+YMj/#+d60>?EE?&)H v16!JW3a~y*]P3mit~4f=9');
define('SECURE_AUTH_KEY',  'rd2Nz]r2VQfar!&+(1h QuAp8^HS-1m =|Z7LptQAOzKC&8[/I,)w{(yu?Uogn/i');
define('LOGGED_IN_KEY',    '>h&LZ:oy7Fov-;jI5rsV#a[z`A65Bsl|J]]q8ObEF@6`O-rbu|!bL(e9TcT7:=I1');
define('NONCE_KEY',        'E!&*mMAH`v^8|gqC,mmh1g*iG7Det4;N#8Cl|ru{e:),SeRkEzGT:EQx&p|,vR-p');
define('AUTH_SALT',        '}XwO=zW-nR5fFww-%Bh]bT)?JKnJ7;,<~dw(zB$NZBqxd -p)LK5-tJ%i7OlR|sY');
define('SECURE_AUTH_SALT', '%dt]bv#c{g$QS!&pI3FRb,Xbv9bOC1G`f1!idrT&gL6^}6`xwXXPavy5fL^BRw|c');
define('LOGGED_IN_SALT',   '3)<[+N(TM+)pR{*;OylHwNyG0wT*1Hrnk}M350B|9|@tDI0IU1u|GpeDD4;q)qX2');
define('NONCE_SALT',       'n6DqQ7pJanY:VK,/w+-+?ePvChm]n*ADYNb.0o=3`GwW|9X>eY$-cW;~,DktKN)C');

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
