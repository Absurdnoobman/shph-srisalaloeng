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
define( 'DB_NAME', 'shph-srisalaloeng-dev' );

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
define( 'AUTH_KEY',         'Cjb0lPNNcd.Ve(5ea#N$|}xJY/S1-&i]=lZ,2nXkfE,<8q%Kjiixvg%_GOp+c=j[' );
define( 'SECURE_AUTH_KEY',  '{9l Lg6SX2bZ)pNK3k&dA0kN`;y;3.1.>::a{9^)gi?rE$EQ>l~~)&CA5S/D`>}<' );
define( 'LOGGED_IN_KEY',    'LR|qNmh>m=f5%ss3OHCgS&#6>>mGUe7)o,;U.]TSDP[E<ACj>oHl#Lbwa1Kk& I(' );
define( 'NONCE_KEY',        '0~:;@b1Dy6jXZ~J<=#?~^{{~-8rk5#mv@0|i1/*)h{PHHH0+j1@5?mV<S<(6k|V?' );
define( 'AUTH_SALT',        'RPY4/ja (<PPcGx7<c^v-#_mHvX88(*ix4[Z(dP.f<]ZQ<ZwT>R]v,l<2KCe(!}@' );
define( 'SECURE_AUTH_SALT', 'y6X8QOmh|iTuK~Mh4r5U]+e(W+`vUoxiqm+Z+:C54y:}]@7etqraQdTQ:dEa5(mZ' );
define( 'LOGGED_IN_SALT',   'Q3jL6QO9hGsW% m%hs!Ah)s8-i+GD]TG;G{?$jN$_Tg#9Q-&BM,HrmWH~3L7rgEl' );
define( 'NONCE_SALT',       ')qI;*XT*npcOOt27T(%9`62UGU,5&YWlH<GZ>?oON-4-gUn(Xa[XnAEFZDgaqadB' );

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
