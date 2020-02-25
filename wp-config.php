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
define( 'DB_NAME', 'mydove_db' );

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
define( 'AUTH_KEY',         '**X;6!0ub`FT3`;Vy[&/Qk2hU9F1U;A!&s*k)~n]Ujw0]D]]Jw[RP>F2~v$=VGNM' );
define( 'SECURE_AUTH_KEY',  'G?^x,uQ9v!nKGTB%<rygBVykQu{s^7vG,/_PA5_>9B)Q=:l o!jjga`[@?eK_}c^' );
define( 'LOGGED_IN_KEY',    '-tAxIfp3#f{M~gKTn_II<}<d+{4x8p;RN;g/<oM]e<Tg$A;Q?Q,:P292+5VZ@D?Y' );
define( 'NONCE_KEY',        'TfGD ;<YHzA>3 tH*GP/Q0#5`C_!9{MlO+snYO[o2Ecz%$7Gk1AXQDrDZDUbWY>I' );
define( 'AUTH_SALT',        'SDzNt)meRfy[{,,WP~8@c!6T[r[W Z5E lMC~%u!M-+0`XJ8[J tj7}U}WVq>OzO' );
define( 'SECURE_AUTH_SALT', 'IA7^~#p*o!{iqn1uXJVK1?Qpnm;G8ci 2XT<O^[#NuuU6DMow}*nvrvt5K9C>/xZ' );
define( 'LOGGED_IN_SALT',   '|my@l8}1[c_1*.j.G}Voa9!uC#`rX#Bu:0G`p>r=*KoU|UGHRmX?sz=$PAxi1sia' );
define( 'NONCE_SALT',       'hK1r*ffl,&^dB9~Q)at.+W[B_dqNKl`@:yvJaX_+i>NN23#$/%uFt/4JHy$i8F2@' );

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
