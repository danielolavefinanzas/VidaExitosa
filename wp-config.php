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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intento2' );

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
define( 'AUTH_KEY',         'clcfM:F-]B7N+jGtk!ms{OIg2!k0LdE2UWlSL}_~%r|hy^G*&ktN~({1|JK8Fbu>' );
define( 'SECURE_AUTH_KEY',  ' -kWOU&:U7$Rrw=-.U3@;9#x3agDo7HRJFH20,uW$q09:S0Wdf(:)|={?GMCB!c2' );
define( 'LOGGED_IN_KEY',    'k:KMRD#sWd};pM/5D8u#?)v)`$z2ANBiJa{BB[zUR[sA)]r!Z7~K8kFTd,i=qS$?' );
define( 'NONCE_KEY',        'zSMy9mao%^ >ym8CdU_/Rl+(?H1182jA+F^7@.b~fm*8aEvCs5wdms_x+vE(xA3U' );
define( 'AUTH_SALT',        'U%k!|V!:DI6AQqCJ7#asRW^1sm-HNNdN^zGyu4ON1hRG yEr3Pr1/C(_y-l10fHk' );
define( 'SECURE_AUTH_SALT', 'S5+N^U:X&#MuOA{e!ZMmXZ^sR+={=w:KbS88&;a3D;[Nw=W9gd[{d%UTVe;mEi5J' );
define( 'LOGGED_IN_SALT',   'sO3aff9j4*<kS@-!v!9XrDY)FIgD#]2]Mpq`0=T=3E @OJ8XMxfcNz?M|NzumXbl' );
define( 'NONCE_SALT',       'Y>,wek|MZIunK:}UCc/A@JAAm/+n*+ce%y),4m{*b;%9`Lbq2E#Y_ p<M1oT+34a' );

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
