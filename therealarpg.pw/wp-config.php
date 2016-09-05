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
define('DB_NAME', 'admin_ARPG');

/** MySQL database username */
define('DB_USER', 'admin_ARPG');

/** MySQL database password */
define('DB_PASSWORD', 'Pokemon24');

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
define('AUTH_KEY',         'A&YN7;/=e<pl5#fi!.kA5S_+/0KZStSy_hL^=A(egyD*g~#gPdwZ7|QUiA_34v@)');
define('SECURE_AUTH_KEY',  'YS*A}nhpeEEO&i(AoAVGHHd;kq}8Dd{VJ|VOZL@kil>uDa:XK-Q-EOy^.<-1wwq!');
define('LOGGED_IN_KEY',    'OWg-gJgf5|Y8bcSW%88G>GR]6Xuss->9vdOW0qOmHoaSa%8|D; )j)G>HHU,8*Sc');
define('NONCE_KEY',        ',5N``BB.,,K_i.D&$WYAlms;m$t>}CqPQgl06&GM@-M^kxbz.s?*8hNEf;(&ZZ]|');
define('AUTH_SALT',        'dQl9qNo_s#T(I^[;RsoM&Pv/{-nYqM5f4i~F Go/uG@&39N`}gTnvrsL~II3/0;<');
define('SECURE_AUTH_SALT', 'N#a|YIE$B9s}} lzO^0##(hUj@^9^-HZHMY8XXx+=/od(LxJPMb3,-{{.~=pOtqY');
define('LOGGED_IN_SALT',   'p*4egbXIDWYaOnc2L1-b6,8SC!ScbX=z^m[>E}f%x?!mH.OQdg?H<|Dr&ta0}oFV');
define('NONCE_SALT',       '[R$1HHpk-.RS}x+S{SA5-9e>e-a:B#e,P7Dc0g&::uM^w4a3~-4G>dG1k5~;:kJT');

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
