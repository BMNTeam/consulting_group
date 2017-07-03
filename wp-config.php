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
define('DB_NAME', 'rosetta_consulting');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'rROz+F`iZ7,v3Lwd>^O&OJFtd/ToV@paKj+y4|b9!xb1{>([wWpM8wP[ZV+k5;ax');
define('SECURE_AUTH_KEY',  '>;|^F*l|+ml3lhCBIFl6O[[Xyp3C0;V~Fy N+_=I^Ub`,_#pf-i_7DJ[O{2*zh2m');
define('LOGGED_IN_KEY',    '@g2UYLA4-,ZpqgDhqXu%rVd<(Ur<]EBAnMs8:HxQq!-^&)P3}3E,sIy6tGk4:|#x');
define('NONCE_KEY',        'Z*JWq]cP?FkmM9H[Aqk+#W`5)b#BWi)_](MmV}+vmAPrrrqy2_}ik}NV+76X-!Mx');
define('AUTH_SALT',        '*<#aR!%1a:/6Ug5hNBn/y)%gNsUR4aTxi*:0%~J?AU7k3Sne|jW[L50]l7lJB&z|');
define('SECURE_AUTH_SALT', 'P9U:oe#a)AYZuXJ@H.s}<]iD*FB7+^Grr=V!hl!<L.LqL9^vd@}YIj?k8v?43bIP');
define('LOGGED_IN_SALT',   '(F SmI$P=Pul:<4#g?%N~y+4/ZYuez0!N~x]ZE-ls:oRDKK4~?aE(JNJQE&nbgJ(');
define('NONCE_SALT',       'BWagoC!bd[xaRvg}>$Fdh;$(%T>D+Kgh4WEW#{>a,U1WGIj]F0DIQ2y3HA (kvK6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rosetta_';

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
