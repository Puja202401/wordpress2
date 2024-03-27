<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'barcadlyservices' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':)rvc{A_KRJh$IR!VT49wJt^#^sRJQ$Fk@${;t_KT3w=@58yW=m{-)~(Y+i|cp_X' );
define( 'SECURE_AUTH_KEY',  '~tWkZamV&/~O?O-^cGZ`nm.Qe:+EI>t2)_qsY;)m,-?$LtHg?/`;/_w88?;yw+1w' );
define( 'LOGGED_IN_KEY',    ';eHz!h|89(K(tpgSEqa+VR<uh~][;7G=g|W1&g[]E?z`Wep%Z}]X$ZlRnBBvk;ia' );
define( 'NONCE_KEY',        'AyBgm5y@*frg(/,91CvLUGlSbnUt,v=}uXd7<pJkv`ZkZZD~;M1DSiP?C<359}h ' );
define( 'AUTH_SALT',        'cfWNo#_m<`_TI`hL%&VV-PuHm*FE<GByp&k!Q9M@kPm+[d88x{?hV/w/ 3S?QT<l' );
define( 'SECURE_AUTH_SALT', 'eDKrHAaN}rpVk3/v9U8k#|);+dZXBlq6,?_X8saO$@N;V2r>:7 NzAzmUdd9u8Ke' );
define( 'LOGGED_IN_SALT',   'uV-@n5!tt,+%m=1EY?}ln?Qq-zt&^znCU4n9pYeY:U(%Xg%yTq&GBQrBq^@_o)XD' );
define( 'NONCE_SALT',       'xCgQ,D=I-=#Ijh`xI^Qy t)loxmWqpH; rECINf8a?;qgZ!1LfbTOq[pO.:(PpA/' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
