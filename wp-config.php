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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newword_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'hzuoqNJ_^E6j6bz _xmcQ[KTBi`pLIz3o:3Xx9wj==uzOU#[}B`1%`$}ZqukXBvH' );
define( 'SECURE_AUTH_KEY',  'yJh9xb2s1H}zk~k;Q[3r0H^*.U~OWY0`o6]Vh8#s1k7ZuOK _RE^/WlzE5A6s,2c' );
define( 'LOGGED_IN_KEY',    'M(t:AqKaR;5F9yiQaNE^PKxF pq]5d>9xhr,Y$S0c807u31+R0tEW)V{_kM$l[fl' );
define( 'NONCE_KEY',        ' [;Oc~VSGN0QsPUMwgYC!b`bmPKsa{_1oUZ}L#[X>~z D_<|Ix*>f^q4]#6m2&NC' );
define( 'AUTH_SALT',        ')T{,BQ|+Lh9`i?p@p{c3F`ufj-%so9{Z&./W6)6fLU+K`}.}P+Q#Fbi~#df#b4gN' );
define( 'SECURE_AUTH_SALT', 'Y7=]>Xt*nG9_tV{=y1_sR&Z[S/&D_3XjtP=[m3.fnU-PwQ~lQhr,Sw7<<4:GsK^ ' );
define( 'LOGGED_IN_SALT',   'lm9zJ)#&b~tngU|}PdV?6zK&,}WvW$<*Ddk*7r9v]{<3>.Tb9#JVHglZH;/RKA<I' );
define( 'NONCE_SALT',       '>ZE_tFxW,dj~Q>uqvfc9bFNb3u%E@Q;YFnlQ=aa 7yxd~[:oF=P}_fcU.MMw7S%[' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
