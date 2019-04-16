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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jtp' );

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
define( 'AUTH_KEY',         'c]:8I.Mr@dD}#g)/LN@v2jgqz?fQvgHW36W!DSK<7c{&b}u*+<vt$HwC^x%n3Qk)' );
define( 'SECURE_AUTH_KEY',  'aBNI0#+g<Qb=,?3mIN1kI2Z,/#UaS+y;F~<C[H)w2bSwUejScH1^rpyQe/n4?,~2' );
define( 'LOGGED_IN_KEY',    ' ^y020^4ogzcOgVj7(f^%X>~<quS/E-T|qq1Jj6f(c6RvbU0OWM6u=,iyCO}D~Ze' );
define( 'NONCE_KEY',        '<jRCF;q&/o`)fR[L[]5}0QU/63YZ}|EQZX?NnLoIc%3RE66@vDqE!IjrwG4`QLn[' );
define( 'AUTH_SALT',        'a 4o`Cau6dfglIk?lG3U[c9.^^R)nAYhem{v.D UhNt*s(Y|ULA=sX-[io*y`?M7' );
define( 'SECURE_AUTH_SALT', '5PrAf$~ SDh%W+):a|&q@DUoP92k!D+N`R#Vw$H?ES}RvN_`hh.-8+|h=POGIE`E' );
define( 'LOGGED_IN_SALT',   '3oe$WC:(;@P%H;N<_6pDOi0q^O;dBUV<c4NI<YS*Ue9baF&@Ng6NIk&H9sC9.B)h' );
define( 'NONCE_SALT',       '4[tPzSr6+4-SH4za_YXiE}m,m1h;AThY9O,v?*1/ff2*mZz}yzQ^gM^ *N+=Xfm4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
