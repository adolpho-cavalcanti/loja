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
define('DB_NAME', 'loja');

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
define('AUTH_KEY',         '&F0SE>.+OZNS.vgf_Ue2rMs-fv<u&.1%-(wegB3eJ#GB(p)g$x43(=DC?9 1B>ch');
define('SECURE_AUTH_KEY',  '&H(p6o-Im1EJ+m>Nu.[2I{f-7;.J-(I3E1Y!sSsoX]Mvp6.^zA4hAhbIi`9&VN]a');
define('LOGGED_IN_KEY',    '0I/@Yt/+~~aLr~-m`E5p6,DVjkQ2.2$#d$Dz_=d&58][H{W0$f*gn{jNnkki3B<Z');
define('NONCE_KEY',        'gcVHl.l;4?]a5B_%AjpOEuyIbSZ-NM$oeN]9JE{E@D>OZBw-4*UjsE-%Nb|8Itvz');
define('AUTH_SALT',        'SiwH%#x [NxM<0d;0t$nzTFWxK0/8xLgs%ei%SF2(63i(00&r{~OXt7dQd/Ne~Ev');
define('SECURE_AUTH_SALT', '/d5#1.:/NE>ozJzj5$_%vo1n5$2ba01O]}CM)@L+_7U@q9k-EOxs-5=ee83WVSY_');
define('LOGGED_IN_SALT',   'y63WS2fE>dQsGg]fRiW_0c[_U/]?kH12WD77Tc0:h7CxMQ!p%[ghmABKjz_F>i2:');
define('NONCE_SALT',       '1e52YDL3]3(+LKXs0p(p`)>~/>%:Kl1<vW~^<<Zm3_Q2cmx#Xh`;pN14w%n6e,*S');

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
