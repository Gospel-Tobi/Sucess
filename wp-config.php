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
define( 'DB_NAME', 'Successtools' );

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
define( 'AUTH_KEY',         'FzcJs4*$y{+dz!z&|<Eq,|SJQo*7=2/CuE<_P~=4526NU ^c$>>oW[!)3*t-I -N' );
define( 'SECURE_AUTH_KEY',  '= rH;j=z*:KK]ymN2d[:{R/v82U)&>>st#o`lpwq7dVFVZjdYnSf.^_69|E{dg1x' );
define( 'LOGGED_IN_KEY',    'H4<}jE*}%dcpFz<BIT_>|],]BU{H1!0!Ev1Y]n:tJc7-HK,)^Tu8+2cZ_DR-|XUD' );
define( 'NONCE_KEY',        'Yv3@JMv5[Xs>CgLF~oPwx#Tvex1!E/P{dAbu%6yqXO8xg&t<k8 lpG(76+@4l>46' );
define( 'AUTH_SALT',        'v H-Py{YZ:^PP-u;lSma6r{3h4+,TbYpY7>E:RqXM&J[K+xs2qjcR0g{p?H!{F{r' );
define( 'SECURE_AUTH_SALT', '=Fyqo!x)fs?HF~Z3zl0G_{_eL(%hKaV[+q=ZX+9APv)be}8b.RkB}29pX+lV&J3e' );
define( 'LOGGED_IN_SALT',   'gP{@zz.o{vuzq3yc`P`RqNGU;H,[2+XZxm.sStY0zUPsB$[a7YDdMC0olB`+Ee(y' );
define( 'NONCE_SALT',       'uG`Hu_,?4SM9w2.{QgcD>YOg:[lBl/:.hvQl&/EB;]!21eLU{W&s-bT<rUJeUd%,' );

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
