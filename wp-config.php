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
define( 'DB_NAME', 'new_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dasher' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cave83Sand' );

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
define( 'AUTH_KEY',         '1f,d-t&tWk35$KjqgjS-c<LSF_oOuEP3X:*og[{ID|d?z}9;U?if/*khPAtvHJD>' );
define( 'SECURE_AUTH_KEY',  'D[._Mz*1588Zedd{3}+0R*5_155>-,21AS!e ~d48UNx3b918fBV]&mRS@0Z(R&E' );
define( 'LOGGED_IN_KEY',    'll$8]I&@7Q)P.~|9G;Zig>#+}%-vQD!Vr^pYc CZE*.)J]M-D&eozrV+ohI>!d!&' );
define( 'NONCE_KEY',        'STZ/|_UY&r p&UtL6WS8jM)cC~_{:[^#wfeVu9v^rUdVBc&KP7oOb5XxpA([MaBK' );
define( 'AUTH_SALT',        'f[3PS:ss@O5^U~^M3suseg]2$lx2~8Z)3Ab3cA;&GJXiZA{JV8-WBAIM4`-t.wlP' );
define( 'SECURE_AUTH_SALT', '@MQ*:/({/a?luGKZ)Q-2y. X]s~rL:qByaSfF4[u],FHzeoG5ZAJV8_#&[u}.L7;' );
define( 'LOGGED_IN_SALT',   '1A8L@C/fbZv]]^HU$$L^zGv&AvZhX{[-x)2] #5NFjDx/r?fgM$<<k[_I)&eX10d' );
define( 'NONCE_SALT',       '<N}a/ADRU^K?FYgx?V6~sivwNDW(r>jN;ZC&~X*;[Vd9%=IFcRSm(keiulvK &2Z' );

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
