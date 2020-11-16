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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet2OpenClassrooms' );

/** MySQL database username */
define( 'DB_USER', 'oreliauk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Uvaclo.1997' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`C;{+Ht|h3$BH9V)l20%W/V;KtQ@;;,})>07+84oG[b;?YVP&XJA,QS}Dq[Hw__ ' );
define( 'SECURE_AUTH_KEY',  'J40n2OIDD}auzT;^fiq[S@a7,V/_;JXE`aTMSGAiyG:}4,h%.E9R`V+NQ?Z SG|e' );
define( 'LOGGED_IN_KEY',    'f$A?e9z4.5d7w>?o@+[OhamBHhci%bd|^ )wf>przXoH/a@[d%mt)9;zv(J/P9>k' );
define( 'NONCE_KEY',        '8I)r$M#{_2,i<1]?{QoYv6y]O?;7r>+uD=c af _!ylrRYUnD5rIoUzpfZ /Wqy#' );
define( 'AUTH_SALT',        'z;hkkv3o/05-t)TxbD_8q;ViRM,{Cy85`>B+Ar)1jvb-I.Nl2(@&@bD5@bcb26>E' );
define( 'SECURE_AUTH_SALT', 'U{y,3M1YhpN19nlaCW1P#K;Cu)@_A((QPwChjMo2povQ}j}:]]jE{&+lzD{wAKy=' );
define( 'LOGGED_IN_SALT',   '1JlC+`svhA~c5eDQvVwZ>+lHaQ= TLLzlVX9vGWbxlKfnk2[q92C(IT3V8_i6[mq' );
define( 'NONCE_SALT',       '-eZa~c(~@F4uXFXvh#te4=w:pD~)GcDl<9hr9_m!+EyO.I*yA/C6kQBx59Axt5kA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
