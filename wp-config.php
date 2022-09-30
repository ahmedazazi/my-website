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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PqRs|pF414}3{su,Eq{lk/hPLx( :INXi()]qP,p|(}Tl}=Ib9Dt*.m+Zc]4[yAi' );
define( 'SECURE_AUTH_KEY',  'd(|jSU!0v>@/@-J>b,R%&(rq8V4M9LMJ/P>d)QsQ`Auh_QWlHXn.>w6=}<2*F.Kl' );
define( 'LOGGED_IN_KEY',    ':94Rs9CuPWzihQ% 5G4:y$9s`=<Z~vI0b8S)1+q2p)gqogUlwRLW[6Rvx@xznNw4' );
define( 'NONCE_KEY',        'n<bptd]6CEO2!E/EQr)YdKbEh]hu~%o^T~+7X`!I5g2VS-ZEXtWGU6RB1OJ5,v]~' );
define( 'AUTH_SALT',        '[&x?:Sms-WQ 7zlE4x8hP8WNCM2haG_7OF}a$Ai7;loE!gLx|I_cU.$:z%(R__YE' );
define( 'SECURE_AUTH_SALT', 'b!Uc.~M0T982#:;rlEwj/KtUE}[~Ar0*Wk>QV?!?@3FSO{JpgS%(H!$<jk!O5y+t' );
define( 'LOGGED_IN_SALT',   'z`W?S7@r[qUwy6R71~]K8Z<R6mZ:Ob4OTfx~ Ca#mMd{Q1wh%D6X0O5j}tE_+jNV' );
define( 'NONCE_SALT',       'ansQ2r:sHX,~c=_zBED/!_Q(^p=KMaYFo4ZsWyw62kMJ}1#22Q1OHq;T V+||x{^' );

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
