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
define( 'DB_NAME', 's14690' );

/** Database username */
define( 'DB_USER', 's14690' );

/** Database password */
define( 'DB_PASSWORD', 'nero2343' );

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
define( 'AUTH_KEY',         'rUOIR A#4g(4C!0fe;B=mdb&SFx9smR5PJQ!IK-1)HT-xL4#|( 1c` Wi(eu^>_D' );
define( 'SECURE_AUTH_KEY',  'vp}gq%Fh>jz5I]OH0,|[([F}(ZZ<JWHq0qUUiJ-+0Y&epO)^b`0GaRs,]$e`h)e-' );
define( 'LOGGED_IN_KEY',    'x$`9Euhk)g>BSyYT/#zX~}Y<Y! !#PiYeLTzLTe;Wdb?F#-aJkiz91s1#:Hn0[-;' );
define( 'NONCE_KEY',        '%cZDw(,*kQ`sGo7:z}c%?;Wpsf<hl,!iR| vU:4::wJ]Pn [%qBGalxf1H2q/=&*' );
define( 'AUTH_SALT',        '7hg[sRhEsjD;gf0$[cejyk4)La5f=cH2`ROgZbhkBsc49cmE!~z^E`qS0PE9{R/k' );
define( 'SECURE_AUTH_SALT', 're&EJn*a-VMe/[+e+,<Ph# x#(_VMd[.u|+P>I=l=ILxi,+m5S;. n0*W;ny:ael' );
define( 'LOGGED_IN_SALT',   '~P;|T_FqEfE&vgXRZEqe8C){A38q!>5nO}4s~H*xg)}~@C0PKXj|`5`%:Jd8 S@ ' );
define( 'NONCE_SALT',       'nwdk$BCc=IH6)sEp?3|f#N-ct3?P5|E=zKYqh5bh*tJr&t,8!sg63]oA~9M&?fSx' );

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
