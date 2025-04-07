<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yakshin_76954' );

/** Database username */
define( 'DB_USER', 'yakshin_76954' );

/** Database password */
define( 'DB_PASSWORD', 'de19a992256c7cfabf9a' );

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
define( 'AUTH_KEY',         'XOS=fDW;Y=E5a,E}b8FDN*}>tMI[x:L5}6cVdD(G6l?!5Y@vGoMxJ`K06;)O]N6c' );
define( 'SECURE_AUTH_KEY',  'oo;EhRXE;AJgrCFaClB.drR;lfxsXi_Y+X;oOK6g^R2K~D0jK?0n)LMnFgpUN*Hy' );
define( 'LOGGED_IN_KEY',    'T{Z/jJPt<4@Xdv=>1n%ZCa1.jZNua&Ml$K`?{yBu<8|.#62Th4/*;_;]25h+fe(X' );
define( 'NONCE_KEY',        '>|8]~3pFuDo7I&=2O[{2fU/?6SGE|3PVYasVQGj:*aAT,c9VVzpuMcs/a`M##1X%' );
define( 'AUTH_SALT',        'd^1k6^+_i|#zsKTv-L1wEKeYd!l,@;%skj955h6aR1APPpe*M>8>CE(KT`8[}AV6' );
define( 'SECURE_AUTH_SALT', 'A9m; G3+Dzl6dc:Q3< sjz(ud|ePJiH^Q/BxTXbOZD!:h0zy*H&St8W6s{uA1dQf' );
define( 'LOGGED_IN_SALT',   '9QKWf$,z},(.Oq:JJJc5o6b=Q?.uzn99VF:N6YCk+&|;S:{7q7J+4]LB!Z}Q  p8' );
define( 'NONCE_SALT',       '#N9A20T;WUMK4ZIK$B}mv1OVxf;%al+KK*|Gf.WDwjOoecrYmqb>@|4O=|6;@.zp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_hJeIZ_';


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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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