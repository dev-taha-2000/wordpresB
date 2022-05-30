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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worpress' );

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
define( 'AUTH_KEY',         ' S+7<G/^Ng3#moTOsDXKy.*c^b;}_ac+.=HXQSdoU8K5|W=[/qB-gR[`VW3#Vb=c' );
define( 'SECURE_AUTH_KEY',  '5M[[Vy8ERM4i{yv=#^@=%jsZ3zFxlmg2%<2@.d`&;8b%+Qxf}mcm:PyZTJGnbPSK' );
define( 'LOGGED_IN_KEY',    'bez&&`,}uabee8*t.M}#b]%^Dm{>vT^K=*8SA<[k2Y-[hT@aK!:P%Q16/!)0IL44' );
define( 'NONCE_KEY',        '{K.%3ny/@CYsrVe/Rmn 1g_aQ$347Fc*v<pNE~=5%mM4X]TiHb<qV]_z#4??Zf]B' );
define( 'AUTH_SALT',        'Ewb17|B.aLhUYkR.~6k8%kn?#&zBrR?L e%{uirsCy{; Se1[I#?:Fa<g.u)Lq!o' );
define( 'SECURE_AUTH_SALT', 'V::dMLeXbbJoqO=A6_/,E:QOSqbXH<>>@ k|IuBP PKN*r6vdmyWV?Sjd^L5}ULX' );
define( 'LOGGED_IN_SALT',   'rQkOJq34Vr[w n(MX6p8w;m2zZ%n+< /^d~=APT.eJ59E|oCs{zM&$=Z4~upO/m4' );
define( 'NONCE_SALT',       'pKfvk_zi<o!(s)xTjIe3(*32>+0be]R3hz*usF~$6fgUB~v[q@/V5+Q%he<7Ck~R' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
