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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress_password' );

/** Database hostname */
define( 'DB_HOST', 'data' );

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
define( 'AUTH_KEY',         'p[4-XH${`=|%yk5&59`H]%c1(X&_h=73N.]z?Gg2E.+P1oVh*fyF@^3}O7))s`LD' );
define( 'SECURE_AUTH_KEY',  '6)bNz@v8$j?}eHe:ew68mB]90(D_I}fUl3Q>i,*& k^D&sqqzSP]O>o0b>9mLv<z' );
define( 'LOGGED_IN_KEY',    '^j%5aLWF0eO.v[G7k}E7xRUNiTa]D{k?<i=AxehiuFfd=&]$^8_LzTcQ(59?Y-(S' );
define( 'NONCE_KEY',        '(Z{y/tcg#XN>$@SlxW$R?.d>IQCu*g,iHoqlVWw-T`q^`VmF(,.14;Rvg!hL@|Hk' );
define( 'AUTH_SALT',        ']gMJ CU6!SJT3SY;eXpi5>L+~4>82t>+sPf85:u@t(7zj]IAE_:vIzr-,&{SuECj' );
define( 'SECURE_AUTH_SALT', ']Md Lk{lzQZ5|:DX{b`!+>ke-f:W~6+wQ#nUZIzlR/MI[t3MoT,#$k@5H?|oSi>Q' );
define( 'LOGGED_IN_SALT',   'L%Sj9EkFcP]pY9L-I&NbO@br}AnOdJdQAIJf?A>yPs)=#PsnR!y]#5ERaQ(?Y7ML' );
define( 'NONCE_SALT',       'u?YN1tVM[CX $KdkNerkV0vFkv[s,4=H<((%|<84~HN)`CQ!=v|zv=dBUc[B sMS' );

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
