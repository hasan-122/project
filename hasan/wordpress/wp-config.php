<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Nz;%Lwfp>iAv6rqTddG]t5O-k>SDa8&N8*=+:q+2TaBU0z*svDf70uF{X)W(ilyx' );
define( 'SECURE_AUTH_KEY',  '4_b4^.l%HXMqp9AU9^]I3V14}aiF{Yq0oZ?Q9.5}RD1kYC]2tgcnO8TvvZNSI{Kh' );
define( 'LOGGED_IN_KEY',    'RYfX!a|6s<nU5euMu)tQ_moCXjH:E3n1QzFmPSm(V]@;gr-Mtfgg~tG#@..=goQ`' );
define( 'NONCE_KEY',        '8DON$Ue~s9i=yI4_U=u40BoxtJpBo?Juf!&;6/*ju[>;3.8wm;G`4b0P?TL:0W9 ' );
define( 'AUTH_SALT',        'lZ5G,[;cVV>]1wj[bv|,7f$0fX@R=guMojWjCOiC3JCT)85U~7o8d~E~iD38*n78' );
define( 'SECURE_AUTH_SALT', 'Wx;j89)a.-3+*Lt[h_Z.(x8.z4S-9~eY+=A`FA8~3<OkPv1[D~Ni,yUaJ,HDKH+`' );
define( 'LOGGED_IN_SALT',   'WTwP+]E0SkN=%C/8a[.8Ai;:P[s?u[C~v<U<-{1e^+$T6_oUP{~rXbA|U0Ud&8Cu' );
define( 'NONCE_SALT',       '^s-eVdobwNp?H,i:[L+$8{t[#IpQgFbXE0(YAq(x%vfo.gV$&-y{VO%;]. e+i4:' );

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
