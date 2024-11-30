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
define( 'DB_NAME', 'womazing_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'Y(R4~.RL]&_F@6j2.rN}^|?;PA,-z/,5pzQabie=[>]W8d_}F4RQ|^F5&19=o.;C' );
define( 'SECURE_AUTH_KEY',  'qSR^E.mTK9}m(&5>pyYiy1~$vx*EZ+P&i;!G*5siJ17Puy;+D3w l{A#W9V[1}g{' );
define( 'LOGGED_IN_KEY',    'Pf g%<}6#/Mlgt*2IokcbTHG8:2_M}@`JkcS|P%e^LiBS|a=CnO;R/Lyr,TmBE8$' );
define( 'NONCE_KEY',        'G&mtut_[YBbMEIPnT1@-:zDmb4rDM-*w.FYw}whZ NQwfwpOWf?!k_V,|w)p=.58' );
define( 'AUTH_SALT',        'H<7<xHW2w?>gthS6uT&^7Z,XzCG~-O=wzIKY`?q_aHsM0tKcksQUA}KWI2 n_@Nw' );
define( 'SECURE_AUTH_SALT', '|BF)3}2|!/Lqku}lY}mS(D:deP/=-faOSg%K49^wi9w>_MEUxGR2+w>)_Hd8[GuK' );
define( 'LOGGED_IN_SALT',   'Yi)U-q]EGh. m>0/BdSqo_S?sA9mlv/VJ/^~B{x^1tDA)XX>#.m;1D2|.P=C!.M?' );
define( 'NONCE_SALT',       '1y/vp@.FmSq{`FCx5oh2qDn/njqiN*=,nB[~K`6ao<M@{$j>5g~JWpB#?.~<$~89' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
