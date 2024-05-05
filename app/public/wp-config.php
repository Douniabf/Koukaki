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
define( 'AUTH_KEY',          'a]cMo6j7H@%(aS{hPk%WSTc*V</l}eXBUM19-t?pUIcW ]g^OHO|r:7[R9_VN7_k' );
define( 'SECURE_AUTH_KEY',   'K|ck~VbW>AcE2z]0{o`hH$gXv|SG36C=M5PYzdZcf7clQ)|?o-EY6:k>e$!-$)j:' );
define( 'LOGGED_IN_KEY',     ';FeD:Fha0{^6JR_&o_R#~2K^>E`+^,E/o]99$4l#{-1F<< arwhy:D.g4<RRttq_' );
define( 'NONCE_KEY',         'K3ea6t]@Q5=Q^@TzHO)4AOad!E0GB(U0B>a-uX9)?~Y736tf j$seyUPk[<?Tt),' );
define( 'AUTH_SALT',         'Wx6U]1QaO/)=N?LB}Yd!q@l}Qx4bJ(9!7;@`-Y]X{dS9*5IKFVPtzj9dhEW4byeE' );
define( 'SECURE_AUTH_SALT',  'Tac*:7l?XB;XZPJ8=h`8JC>G#j.8LQYk*oO3q:*!@+v{zXPe+s7Fo_mccd`(Q,P<' );
define( 'LOGGED_IN_SALT',    'wtLtwDGZy^kA>LWO|+}>.oC1|xVxu?Uek5j *E9NBFA[~Qr2|Q$)YSuqb Xa,4PA' );
define( 'NONCE_SALT',        'Enf,,h(A/KB{R)*ftcExHOk=PdUm]i1IxqFl_ryAR=typ8aP#M`,wTT^2n46I}] ' );
define( 'WP_CACHE_KEY_SALT', 'kNX=:B*Lm+S&V2#R:p:uIFLC;3Qv9LA/$UiLk@j]I^CiyOT!:$/Ki;NRLmVN7VNS' );


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
