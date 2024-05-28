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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project_1_db' );

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
define( 'AUTH_KEY',         '~{gW{;c}H=3FD/Q6FKHsWaIjT$N^mZ)+;J1 `x>Emnd+3VK0XgevkbjK@|j$Rk}B' );
define( 'SECURE_AUTH_KEY',  '(iO7OTl[pnuak@O{v2f;HzR/*4dRR9rrV$Mx`YN)q:p@%A4h@+8yC-^k.m}2#^rc' );
define( 'LOGGED_IN_KEY',    'roPk%-tEF;{O0Z&S6YIz*5*SZ,r;C@(k(djGF#KZASyiB4q^-5Lh}IEh^GvF`f8=' );
define( 'NONCE_KEY',        'o>k4)jk-S6u.k:Kk%N-$4/ktmw h!F?dTS_uH+(DbERqXqiAG,Ol}VsuL7&^%N4]' );
define( 'AUTH_SALT',        '8b[bXgfoZ[iy[bF=qSHf%K)kiCmb#XaV-81$>WTiRQ%7#lL:R`+gPiyEL9s%6-1A' );
define( 'SECURE_AUTH_SALT', 'VRJcDc*9O?^UYM|sz,Ea?bHMlfz&!2@qt,,fRHT5p7D,D(@n*~4wt8hO(.=5Nm1x' );
define( 'LOGGED_IN_SALT',   '1*o5L4GQFyOCPm|Lq[<Y QksWm.H<Ae=Sgo @d?xLyix)Ph??Yu;Y;UIuWPkwk}b' );
define( 'NONCE_SALT',       'uLoxxr1`C<4|#aA23x~N)DG&IV$ FTS/.GvS V2t4?iP7S!(HLu)M#(7BAs&-^&>' );

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
