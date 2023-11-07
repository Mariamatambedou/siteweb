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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'x=[*yEO4Q@2mdvj&aJ+&NO[YKp Iiza%x+Wgw&>iVjjZLE20A]!ADYUlL*9,nf>y' );
define( 'SECURE_AUTH_KEY',  '3!Bw5?B^i0KHF(%OOV<X @NY@~c}8W@yM8&]|3sZ:R3@Ya:ic_+;}):Sw.+.Ip)E' );
define( 'LOGGED_IN_KEY',    ',N%.9!g,m1RIK)VH0l.,Tj]Zsz1b*G:|m&*W-aa;FvR(*[m`i<o8!=aO>a`GFs_E' );
define( 'NONCE_KEY',        'Grs+T^2{k  Hkbt[#*`L@9`Vbcb27975r-D2X;#{9Gc=xALP`JeDrkgl1E=pO<?}' );
define( 'AUTH_SALT',        '.16VhpyUhawkLi|8Rj 9/qThmye3a9VpSJqOD%(f!uiQC}j{XJGUKrfAJO/~BQ8G' );
define( 'SECURE_AUTH_SALT', 'x;UC|iM#4!wP7_Mvzb>E8n.Z|w}5 YP:FM*qiRZ`BOp/h!>O#n{T+.N&/W`A%{RV' );
define( 'LOGGED_IN_SALT',   '5<wrFL//:^BXv$5Uwo8;7hWCDg!5Y9UTdG0Y!y(:6P ](B%fa2Zg %w&_#zuBX<W' );
define( 'NONCE_SALT',       'HM=hSc>~x85^-0P?4F:c|JX_2]FY>OyV3gvjbJ3Ani1j+[3>2NLguj|FTX*7>TAu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bew_';

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
