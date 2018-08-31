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
define('DB_NAME', 'pr_web');

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
define('AUTH_KEY',         'g7j;Q&FK):iPj/8$&1`I(zv|,%K%#Eg;n0E:uMR>FilfBwI*.([QuN)Ak5H6a^?}');
define('SECURE_AUTH_KEY',  ' .>Z]3[7bR~l@0Cx)b?ZQe+LsTB|lp-Ce|p7p_LeJGySCRDb[}b,e`n+hL~yT&a<');
define('LOGGED_IN_KEY',    '[M:!nqqT,VC<OSas4x]S|F;dJHkm]yTkHJZ[On5YU$mk+jB4OF1;U>L@D~+%hwG=');
define('NONCE_KEY',        'ukq_CAsA3vdxKcE)| aAf;WFEu[o~XJhXWSJ`|K5xC|AE?IkL0bi[stMD,{94.)|');
define('AUTH_SALT',        '|SHHd;ZJpL%.7t%f<=/j^h.+$@}M5o:oe:%^59RNQ.Mr4N_4BRHuo<dxIH,Ng%Bn');
define('SECURE_AUTH_SALT', 'u=H|yBBM%LDe*4#xdCHxkJ`%5/,AxxxX=^Y<~*tGgqK].tB4<c&U3mF99l^@e*~;');
define('LOGGED_IN_SALT',   'Q_$G?T>1UuFI)KuN`)ZoujB:u9g#LcW#jDPB0>R}Xs0YA.OJRNw>.)->[Yn3V|u!');
define('NONCE_SALT',       'nC}+c8=k^O1nRdRM9qJSw;0gO`DDiY4L)]H-8f<eMQF~`{aGt:E@zILVY>A`-u0o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
