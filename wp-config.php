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
define( 'DB_NAME', 'wordprowns' );

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
define( 'AUTH_KEY',         'l:yVjp6QcGFy:IpxAIQct/-cP]Pp`69&L1F+6%Ra:J6GT=o8S6f vuXU~/8!%}qd' );
define( 'SECURE_AUTH_KEY',  '_F2g)^|KTP8.6&!rIU-$=~}ArijR%6.Q4yx;+,<F1yO>t:=<KfOn0Ujd+kml#ppt' );
define( 'LOGGED_IN_KEY',    '~6,7+.K9(J(rm]i!oiHovE{AB;Wy~{:%I?y[c*;bv#8-#e]UxNsO`+WOY)0O(G$s' );
define( 'NONCE_KEY',        '#9u6J=QM?7hMeNQc$al6HCFlHi_Z/oz*dm5[g(XL7p&A$A0I~r,N+-;Ie.Va30a#' );
define( 'AUTH_SALT',        'DDV O7Bd$b3PN@_s8%9n0x]_F)eU*.r|yYNt:6Kk1w`gbp{Z~H|/GWEv%)IuM16[' );
define( 'SECURE_AUTH_SALT', 'UY/Y=p9|j8grSO^~5f&#@+4tl-?ZS6b.kb4}udMZP{?A68U9@_ycM!s{n#Hh&s$C' );
define( 'LOGGED_IN_SALT',   'A[WeRu6|C8D^+AS}Yg>|Fqn-mP{2asmGR2UGg^Z@ :TMwe1&37kn5wJu#[;-/{$L' );
define( 'NONCE_SALT',       'T%;oFsR`/HezURQwE<ZZrpj_fp>bs42?2poK*Fj/uMY[B7WahvM-mNQ28(){lo1#' );

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

set_time_limit(300);
