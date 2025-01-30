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
define( 'DB_NAME', 'Adventist_Royal_Academy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ',PWsmJtIP9HC5]_EH(;$R/)Y-xhL+uvGWv=:n1SY]D/Y%[a_o!)LulA;>,k%8 %q' );
define( 'SECURE_AUTH_KEY',  'I;T6QcQu],Qm!;nZYYZ,aL;YGr9!t0|b;+AoSR7:1=N&S74W;,Ond+7b:VZB:ENR' );
define( 'LOGGED_IN_KEY',    'C#EtiozBA:MHp; UB3rCtwZ`mD]V13Z$qY5;Db|{RzJ;WUA+ifs`VI>000@N#J:6' );
define( 'NONCE_KEY',        '&o-l`I73-WQ)$FbucJDz_93koF[8_dM}s6-uh3r|;f0%tg?c6|Y7nF`R:|j2]KYQ' );
define( 'AUTH_SALT',        'EIaI*=7DRZ_kwjAiyt#Qoz~swS%~*BHkv]a$IWC/Ag4`=.hh8RJ4:.6co>=^Px.R' );
define( 'SECURE_AUTH_SALT', 'a/L$5m$k|Fh%ftO} SwIXI0g^/=K(Y.7-kaGL# `[(z8>({KR:ENl5->&n&2 *vM' );
define( 'LOGGED_IN_SALT',   'u5>IetEQv8rBl)&/zg 1[cE>%bw@_FJNqN3C?@mjQwUG cTw9L<H)3=sl+1({+I9' );
define( 'NONCE_SALT',       'W={xjY@m(:1@u*]|,QuT!]eF@SOo ~`0lo~Gc=>sd YAN}ol-N;TS*xJ[mq!qA:-' );

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
