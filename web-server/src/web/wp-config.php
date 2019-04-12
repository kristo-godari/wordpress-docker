<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bkaNZLjH' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BmW0V_75{TZK%^u/G.mZK)pd.^8C(ZiVgkifQ~kR~W_H)0+d^&8i4B4L4VGWg/2$' );
define( 'SECURE_AUTH_KEY',  '$gboEoy^N+RZ|[~><2YuGaxa%*@v>Mp_N$.cim<)G`UaL&6Jk3 ^;bjEq`.!^b%E' );
define( 'LOGGED_IN_KEY',    'tV-IBZxF!j/ye2s]ehHSP.8Yx{VzU4SunIa3hfU6Y+*Oe9^Ls2Cg9:?tqBUv.T.w' );
define( 'NONCE_KEY',        'N}2>EJI:?Jdg>v#uSm2D(~j?<B$U/:|2/!vl++. CYm(6.jId$[}F#5d!TnbE4Ah' );
define( 'AUTH_SALT',        '/10Ne[t8>(c{LcGpA[4v,+M3@)@v<0b9K+-RuKVts+GSDiV=vB_pv.dqgoy4Gg8e' );
define( 'SECURE_AUTH_SALT', 'aUmI-0AKnjoNk~9BbQ@o:nX~HV0^5MJ_ynmo?lFs5]%/6t=d{:[NUKZJaLXRfQ3g' );
define( 'LOGGED_IN_SALT',   'Wt(+%FC3N!M&P]77q606Cs=m!FlU1ml6w}B{4dzc$o-Eu(aZV1S4Z)(QV+~3HZyb' );
define( 'NONCE_SALT',       '`=#odjC78ovB_;l[5r#NWy@r&S5q^4zk$Ugh*Q9 ~CV[$=xdo~Pyj>ZnOXtN:k=D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
