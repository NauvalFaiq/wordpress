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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'e@X%H] =(iO/?AHgAW%C]x,DOiy;<*<lrU$nEf*{?.q>.NF>IythWD33B_Ih~*|!' );
define( 'SECURE_AUTH_KEY',  '{o>Ymf?^TZ=}Je^(/FEK3%T/HDYfQ<82b=$Et[fu+ul~A<2xJW4n7.26#p:ET^!z' );
define( 'LOGGED_IN_KEY',    '61A+vWm0%*9D/rO(BR|wxb=<3BX,$XEmZ;PDJ]`e9:N7cX:c>ZMo6E_8Hc&$5>lh' );
define( 'NONCE_KEY',        'r0([M[WlSAH%d7>v#{CK%nhTf.MK<:>&>62{mUb]yj5,U`aH8>2x{a3I:G@q?T1}' );
define( 'AUTH_SALT',        '2GImyT.t<+;Kzom`>f+2w#D9l.quSPH5$s|gJw5LI-W(Z>{l&~AZ<u?R|$C9kUvR' );
define( 'SECURE_AUTH_SALT', '?Ccsd;MEqT8hwBu*7WySJ/*7%Q60YrpU!5}L!Aa06JiYh;OFv]TMQWz)={wgSzj4' );
define( 'LOGGED_IN_SALT',   'ZAS8D*(^2RKZ&h2dv.Hf5wE+vpFqaqM6=.ibS_70>a;9W9K],e:q|EOs:`*[p%bt' );
define( 'NONCE_SALT',       '3}v;e@<vdJP,WMe0*$;MA5.5JI4WZ,5iT4LSM9=V~Z8G^=ulmFp{.h=rq&[ztwYN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
