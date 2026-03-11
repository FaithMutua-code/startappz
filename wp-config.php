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
define( 'AUTH_KEY',          '5<pvMAI[o|m]Awji*CnF^(xF#ab(P=9Z_EE#0%.|y&wxC^(Yw9swj=gE,7@mr#vm' );
define( 'SECURE_AUTH_KEY',   '?o#4}dW{?a)NB.o]GXnXaI1PO.(+oqH3o. ?#MC6]/(}m,V90m^]BLom?e{JZPy&' );
define( 'LOGGED_IN_KEY',     'h$!H&IT~Bpv{etU/Xm{`khOk=l}odi)peflqy:z%WqrF}iu;K_tJbfQH*]KK&rjD' );
define( 'NONCE_KEY',         'sU5G%^QSl2R4Xv]{`uZJRDn]nFGzZeUQjx>wC&ZfV%;Dy@g.}]0-J``Tbz)*+jX&' );
define( 'AUTH_SALT',         'jqO4wh@56y69O1[~cnG)6 XmV&xuRZvcpqjYp=fO`Wbx:ah}_%[3?&@.T2f))dr<' );
define( 'SECURE_AUTH_SALT',  'nN_<YAN6yCdOTwhZ6hJX5->&|w=e,}|H2PwQia<,2>)?p7@Uk@dv2,*CwD[9~BCC' );
define( 'LOGGED_IN_SALT',    'kAT][-4}E.TD-Ub1_7|)_Xh=bnm W<J}vdoriw|=1J1GweAdWF@zqe<;DI+@MPGJ' );
define( 'NONCE_SALT',        '_>?.7C5vert}I2LM[cIViY=!9C$)we#m=t]UMw64oIwQ9]*xOm>fbc?*UZOPBXEg' );
define( 'WP_CACHE_KEY_SALT', '9bmWu|iG4q{tCy6FuK5k F-:MyoSaagZ/RNJ%>3GL:cK2Ps8tgG+A_&qcTE~*S^G' );


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
