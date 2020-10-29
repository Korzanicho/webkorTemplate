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
define( 'DB_NAME', 'webkortemplate' );

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
define( 'AUTH_KEY',         'PNL|+yv42o)&sU3TOBuSu7Z@z.P2C;i}PBtw4o.0OCM*)8eD2dM~qh8|>&wZ l?l' );
define( 'SECURE_AUTH_KEY',  'o<Gz@@aVOEglP%4ZmH&boajd.$H&]!}~D$O;QI73kBqM!$5Oy Rn^YEU`yB!m|<7' );
define( 'LOGGED_IN_KEY',    '_{Q*u_IbT}$m;;6tW`n9)tVfP?.,J1^MA%(e2HE.p$6{ V~W[>Zx9a%sCjt3RxZn' );
define( 'NONCE_KEY',        'BivNC2y$M<C?sDA3HhH`7?JR7xmbRY`7iW)L@R1?,sR70N~ofm@.a}/nQ#.s>N$m' );
define( 'AUTH_SALT',        'TniCcms{zR2+uOFjI6X]d@|SR49-U[3G/p (c dT{R.h;Ex{4w[n<1.i*J!|-t5T' );
define( 'SECURE_AUTH_SALT', '%D0yCr<K#aV4dW63X`];{dYu.f~ariSAq[}@Tn8EO5=$_M<GI=([Im P}a^Q9CIw' );
define( 'LOGGED_IN_SALT',   'W<yx1i{Dw1kqN]HC%03SuqZ^1)1xEj/C:Kkn,[|,Ab~HnOi/=xmK`%$7v[Hea^em' );
define( 'NONCE_SALT',       'L=*M<Rv*$7n .y$a26$rF`SO&8]~]sXx&lB$r%_S;Gaod)ZjQB4R8hFs@F1>3F*!' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
