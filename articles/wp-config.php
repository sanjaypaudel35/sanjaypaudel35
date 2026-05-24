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
define( 'DB_NAME', 'sanjaypd_articles' );

/** Database username */
define( 'DB_USER', 'sanjaypd_articles' );

/** Database password */
define( 'DB_PASSWORD', 'sanjaypd_articles' );

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
define( 'AUTH_KEY',         '3I#k- eo2EZe9XP@bNX$Xhh-FHTjpIl^. Ia`n*GEQ?KNMR`g Tn#Y$`k;#2Wp=@' );
define( 'SECURE_AUTH_KEY',  'JhWh3MNLzS{zK)+9V~h3tITDO*#0KAC+,DaEY]-Wp@e-g;gd}xwTQ24Ci1nKsG%&' );
define( 'LOGGED_IN_KEY',    'F#6/<24G<I3},M7-Z9;<-Bq!N Um@32<3ULO@3O|Ta3Bptha|&p!r2{!7Ku8c2:}' );
define( 'NONCE_KEY',        'A!T]Z&<VljH9qYUBd^c,tGJufnB=YP5Xy8N3x0T:pl9::4IDR7pqhni62yKLfwsi' );
define( 'AUTH_SALT',        'v7(l+txP=W$(ej{#$j#i84|Or@SW3L.uH^NkXpIfjvXZ>AyjaQ$9H^M#Ot9@wRlO' );
define( 'SECURE_AUTH_SALT', 'T=})`jZ6<eY=GK[cNL sj s+F;B}R5,coFr9-7B*p4u`Rj$+0FNq#evHXm&s)Pnz' );
define( 'LOGGED_IN_SALT',   '^<WS4*9di}Jph&-OU4]oF3l5G/0jv`;87GoMJ^fC=w-PLCoxM%h[&Xl-1urxGXTM' );
define( 'NONCE_SALT',       '$aAD)wYG9ax[?)_;/$n=hKkL7k^PT;Frw`5Y:DGm2FXH&b{L*ykI-/0iyf4wVlQY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sanjay_';

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
