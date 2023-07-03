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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '}TH+qqUM<J0>Y%MD-wC+Q.]Np-6g{Pl_;f]_EpE*jT>yT<cm_oi&C}rE,5&blyxV' );
define( 'SECURE_AUTH_KEY',  '_a[uU5}m,n3C@4dV~ITQHj4K9M@`{26dA{KR[!GyE)[cRKt[48T ex7lPJKKvt!_' );
define( 'LOGGED_IN_KEY',    'l4r2UtV5Y_Xe.2pRtI6,%:7q|@4Y!A3UDm{Cx3`gL|miJ*O>GVkzh&qVt0=W_>Y.' );
define( 'NONCE_KEY',        'NV)pW:+B~35aa[$Y2DIF1S(DWoQjV6I=Su8jigZJe4z4~I7Lyote`&[<IeDXe-%0' );
define( 'AUTH_SALT',        'PGklA(m2rt|))uqTAzRj|cIL:IR`4{uq<oxo#_=cHqm&n`FJJ?D}5ojUI3o*.IyE' );
define( 'SECURE_AUTH_SALT', '^+|8:kRZZK3pPK0B 8A^$jnZH0WrE0D(2)EEc7KP`w&4]0;y>[.Ig!$o1)oORG^q' );
define( 'LOGGED_IN_SALT',   ']s+FOh~N8EDVGO6E+#;(>f-^{ 6SFM*B6=Q{`NH #^9?qoV>nV3. [AGjC }B-`5' );
define( 'NONCE_SALT',       'qFK}?uXUD#d({i.khT(=Cp<)>dluNMv9Qezmow-6&5A$/{f]x-&S(H }w`O]qsH#' );

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
