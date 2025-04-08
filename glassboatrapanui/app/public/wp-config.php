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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',Ch=.!]Q=[3r{!BKC4DA#,BxU[A-N,Mn6`BwkhI?l2[/T)(:DQro4wLr%&Z45?s@' );
define( 'SECURE_AUTH_KEY',   'd$%yYsxR-mC%$J}a?[;S-AAfOlEVV67!pe+LN2lx8/whpllE0p8+Z*Nza:6v.}N)' );
define( 'LOGGED_IN_KEY',     'Pi%GN^#pZa-ZY4MX@y!H.IjXt^>>A4^*Mdg1<$n>#fhlm4P5c3S|((yenYVm}uq%' );
define( 'NONCE_KEY',         'Q]Z^(QxUWRE:qFHODgAYD 3jNgwm@iq+AKnL#<:W$iy,>(][sY0:8RDwTOty)MCE' );
define( 'AUTH_SALT',         'N2=]Z;zW;j2JM8B?;Mvixkhs~&!o<1~F+*`uc5d;<Q!|+Ca5p^<{YK^<Cjf4>$uu' );
define( 'SECURE_AUTH_SALT',  'K>b(mK]QeZdLD7`{.^.K#3L0N5HS`&NQ2;%Z4b]v#pUz*A ZS!o}13KXy@+STs#v' );
define( 'LOGGED_IN_SALT',    'kXSqxVBb<}#^s`<4t0u#Ut0Un,t/BS.LTkLwN*-1E!^Hk&jPzrw#|EJyAr,gT::w' );
define( 'NONCE_SALT',        ']Mb9z]S3B;T1_[R(8#gFi#T:*B`.A3vbrvv=rU}s:j8_#[:~jyNAH;H.y!VPm8xD' );
define( 'WP_CACHE_KEY_SALT', 'kcMAim9Elwj!3ZN$T3;m#:l4[]e4B+6#G5%C),j+[7sHgKa15oAH~cB7{w({`Z,n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
