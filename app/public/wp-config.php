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
define( 'AUTH_KEY',          '5;78FSq{4eIxZy)Uv5~1mN%:iDQZ57K4RxIXcn~yz%`Mf;8R){dwtNs:qUC%nsaL' );
define( 'SECURE_AUTH_KEY',   '`xLaIe4XS13Y=ii~qK@`*fe]oPetr~?bm#z]AK+!8]95<M~t684l7Z1]Q{rd~9QJ' );
define( 'LOGGED_IN_KEY',     'qM`VL Tjw;MVyU/tEt|+9b8=*ar{kH5Rb`EVRCBe3O V9k(ju>z.-Y~E4K.K9`Kj' );
define( 'NONCE_KEY',         'U%wL9I{+T9&_RP:<LJ2>4YhkQ?iXU]${}m+:0!f@>cN2vL)$4Ad#E<mi}l9a |J/' );
define( 'AUTH_SALT',         'V{69,3bcAO1H-kJ0Amryl A^#)*,[_QrU*Lhs-l7fD4Y+b]0FQ+!X5;Jgb8fnD{U' );
define( 'SECURE_AUTH_SALT',  'rXNb?U4`-6r,9W6pQbm9gWvoGTWSEqVs1mr%wfyo-z5gw_WmjX~`~_oR;k0iY)y&' );
define( 'LOGGED_IN_SALT',    'kPGaiRiuM0*HF.|1KnRbQ:=MR_CABY*MF5C+=7>5<j].g;`s*JQ@NN8t&47^iz,W' );
define( 'NONCE_SALT',        '1;-N}M6@Hhv*d~h|PE=C+,7&{]lyq2I>*h65W2J|}o/>kTV5@mDZ&7%K+(Hd1.s0' );
define( 'WP_CACHE_KEY_SALT', 'n}yC~gg.&|W$1s .u7H_(FU@j80ZP5x<&|&$ Kh)PeYA{a4f}cS<5`gUBk`<=ng|' );


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
