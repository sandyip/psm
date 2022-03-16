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
define( 'DB_NAME', 'psm' );

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
define('AUTH_KEY',         '9i#&6^21G4m-Hp[DQ]PA- YQbY6Peq]nz -+.9!+1BVtSUo-wsg}c-0;,(wL6MI%');
define('SECURE_AUTH_KEY',  'p>@g[V8+1}:8bF)-QTSBm;<iJ+pQtxE||o62nK=a42HH G7m0v_X)_-KH#VbKL{.');
define('LOGGED_IN_KEY',    '!p*Pp:wYNPqzzq:Nx@ Hy]4]b]TIyC#+/bSHbAPh,b+i%(EdJvLys:wxmay}{K?L');
define('NONCE_KEY',        '$DTmp}|CbD<PMhwx~{IWeC;/`=[6jS-ywd@s08xM|0iYsAZ2zs l/Ap|E5 ;[ne+');
define('AUTH_SALT',        'RC:T=Y0i)4du#+R}AA1zBK;^eFX9C%B+pw+uu|d}Xp Kj*iwGf )u;+2AB^b+mtT');
define('SECURE_AUTH_SALT', ' xk*M9fW-<Gm=9RJAVC-w|BaE<`kkIHd}Lg!y`Bu$%5h&>]3b+<CI7s=_a=M^)Wl');
define('LOGGED_IN_SALT',   '`]upLnL[#M>ULg`Gt+6_B&E]V~K&i}9t9-3<_9R+^NKSl:S.WG%22,mX5&~}GT.C');
define('NONCE_SALT',       '^l-Bx#h=Sd_=QJvw0q`Ed5hxC&$)nX*Ks@1HLc/u@l@Lr[yctW!^;pOWad%&+yq5');

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
