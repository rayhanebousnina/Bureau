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
define( 'DB_NAME', 'bureau' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x!M:Ix[N$9m+3xGmQ/ iCs.a]z4*|ePni^om=)wktZahw}in##@6@z+5sSieVe0M' );
define( 'SECURE_AUTH_KEY',  '3LzANCLu]pN[fHTw<WA6EnUL>K.kWRoWhED>t|V!G@1TqwkdtB@2;2`1^)=]U|sT' );
define( 'LOGGED_IN_KEY',    'r0=)I>9?/RHk7b,$s0~+s2Nh$yN+#YykbLBEu-|^gD2:@{pW>Et`Q6(aG((+~I~o' );
define( 'NONCE_KEY',        'z7nl0,:rD^5Hc1(D [Q0[Y2]E9%7*a,?0^ZAgD==u$*rH*]&I+,n{#D^}A_H,M{4' );
define( 'AUTH_SALT',        'P5yivu|kW/_z132cii)r;1xj18cUh&If>k<rL/HEpQ`*iv>tCc!SlOPv>O8Sz?)U' );
define( 'SECURE_AUTH_SALT', 'LmO-^bR-X)P#T#Yt&e/SJ[ta>.[b}x=;>R?@Iy/AY2UR9(@()Yd7%8t.Go4<^:h:' );
define( 'LOGGED_IN_SALT',   'O,SVss/(0As-h,eZ6)4C|iu@]79x/`opT4iK)sB<F<? PeX9du({WxZQu&L2j]OW' );
define( 'NONCE_SALT',       'z0E.f+5SeyBmYK}Qlxfq;9MsXX@V;<GT/:egg. 0Z|N:Z}lE&u~G32_nXN{sP?<3' );

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
define( 'FS_METHOD', 'direct' );
