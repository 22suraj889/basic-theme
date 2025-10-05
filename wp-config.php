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
define( 'AUTH_KEY',          '.B7`=LvZ<tj8L;?>YfzYd*$9Z`h$ c-LSSi_7O8rHg VHG.4:5TVrrg]cMyZ&_4m' );
define( 'SECURE_AUTH_KEY',   'QkXhl]>:Vec#<#Imnx6/Qjgg(&&N&,;^QfHVbU{4=gK _3>.uZWg6hU:Si^weKx3' );
define( 'LOGGED_IN_KEY',     'j:WW`[~sSQW)%36x~<qq,A^{dkkJ)p46uBHkdJx|2J>^2U/u:!;1cB>]LECtz1:5' );
define( 'NONCE_KEY',         'Lyf$a<k)PRh9FAK7IgxN?88zP/Isrm<K_:t@Jd)>30@yVm&mNMjBWnCC3FD]KJCK' );
define( 'AUTH_SALT',         'q5!T8p<kl$n[[f#i]oV~<|TN=veC.AI4nfra(NuI(+xneu/vv~i^_]W#cvR+iEbY' );
define( 'SECURE_AUTH_SALT',  'L9UrpCbI@.8-G!eT&krDIa4F65{?],Fc@:u@`!#}`[*rn/H$v7?b*r#2en U+o$S' );
define( 'LOGGED_IN_SALT',    '{rvH;+[U?G%?2s[;. MO4-KrU:@p+l_M6T,TZ0<ZmV-&EU_=lu-8{wfoPQK}PtNO' );
define( 'NONCE_SALT',        '^70W?gm(^kh*KM#rko>rkV-Z,RmeM>W%4H%vX>+WP/$8]D]W1V>.2Nyij+LNXe48' );
define( 'WP_CACHE_KEY_SALT', 'qe=Pf_*KAPX,<U#5C5k ~vmL&t:eoNLqV)DW}aH.5mWA?SnIBS_]pQOX.>@I*6_m' );


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
