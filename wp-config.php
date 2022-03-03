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
define( 'DB_NAME', 'shaheer_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'shaheer_ecommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shaheer1999' );

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
define( 'AUTH_KEY',         'yn,:o2)5zURk(v u;IS3lt#`kxX#3V1L,!WmnyK)fNnuUi2/kHkSWd/B.&IQsb+K' );
define( 'SECURE_AUTH_KEY',  ']^~X0@Y3)H1d7$oiIyrfn!/$j9TcSNPO+.=v+CdCy;FS~PD}Ed2__TK8ENxaw|)I' );
define( 'LOGGED_IN_KEY',    'gZy=.&+zFz4~hk)5Jp2c@HoI:i{_QbveIsv]aAx0K}$?A/h)J:A1F>m]y5$589`+' );
define( 'NONCE_KEY',        'T%>dy,-I},|(GgF*J:@E}$IQ;v4Rm*`WdeEwaekmc8@9S9<4J2v8fm|]jN@YBW^B' );
define( 'AUTH_SALT',        '6GY97?37%`%9,{9eBY=_+1{Q,*+#Vq6f!Z~Ourmr6J@NtdLZqEj5@8^$w6KxENB,' );
define( 'SECURE_AUTH_SALT', 'Q993t`E )Py7GVtZ>,4J2iUp#1S~[sqVets,d;Ba.loF.pTb+I%CcvyNC$x4KP`|' );
define( 'LOGGED_IN_SALT',   'Nt~dNo$;h3t6;$$A#7)]m`v}QR&dnG5N8 f+QLhZal5 @`+67J x81j]ZhEb,*/B' );
define( 'NONCE_SALT',       '`<b!,Kn2CRT}MDecv 6(Q.>Kg=qZRu.QWVMW!Gi0t_f(qT@SAD$htCX`F*K8(g!>' );

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
