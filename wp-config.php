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
define( 'DB_NAME', 'chumkyinternational' );

/** Database username */
define( 'DB_USER', 'chockeIn_t' );

/** Database password */
define( 'DB_PASSWORD', 'BlXjCJFM*T*tuKmR' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3377' );

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
define( 'AUTH_KEY',         '?ea@<cmnhEG`&8]=OtSf[6Fg~^.Pf5f7MJk,`3n.[,78NK=`z,h0eXlwd$V4z[*Q' );
define( 'SECURE_AUTH_KEY',  '@KHv!KO{OqfMh-Y]sLZV 1Rmuoed;O(msAD:KGkc1^^WbrEze,U8`]O}9ZRX]|,p' );
define( 'LOGGED_IN_KEY',    'Bjj%7I^>_ @ |b%Z(q6<IGByxFoq,p#Bq):r|Khe=4$beUVpK*>];4;?,baXj}rw' );
define( 'NONCE_KEY',        '88jr[{kV3P;]%</}`&Zm`]-;#pR?vl#:tgTTd3ViFToY?#fj%f4w%Bzin2!Lt!`Z' );
define( 'AUTH_SALT',        '##K7llKbA3GHY%]R^2B=Bx~]r7FfZB9G:IdML#zoSa}g(+oh#r}VAs|(L.]Ig[9N' );
define( 'SECURE_AUTH_SALT', 'iZ18iceIsm{6kExl;IYS}gJ?6h~;gp`9:z/=3m]Tsac0_bp+|E{Dk-Q(HcjmhUS[' );
define( 'LOGGED_IN_SALT',   '7gt.K-hnD/jO=V<UU,cY.ab{8x.)jQZ0ZzP*x*@ iJcrR9h,T2w(x*P<a0qu#[)H' );
define( 'NONCE_SALT',       '^HgNmjwQAwH5{!DDU 99fA9dl*:ISK5j|=Ts1zK$@P&G>jS/HT:1dYC14XKJr2T:' );

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
