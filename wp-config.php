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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'mPzD&wIrd_VFNnQhKA/xFK3Fy:zp_:o I!EpX@zQij0vA-Tt1%)WOZRNc4}_Y;*h' );
define( 'SECURE_AUTH_KEY',  'Ia&b?5w$L*<QU.ijW2l?NS%>`0X>@D%]WGA0]BKCKNkY]cZf([&FG}wD<CnAdEP3' );
define( 'LOGGED_IN_KEY',    'l[yDOC~Hb4s|P;&ee/^y2-X4l9:]G%YZ_} o $eQ;Vbp>r#;:/z;Qrzr8,JSw:`Q' );
define( 'NONCE_KEY',        'XZt1,R.xjr^F<8@qCT-qE|a6$uK$B~_N2JS w~THrkRzN_r}Z}CHy7r O@U./C|j' );
define( 'AUTH_SALT',        'vO{@+/l?FTgD^(nIT8tG [x~m oUf.iDDuZ>@*k&JoG7m3[M%h]H-0tM*Wurx`<W' );
define( 'SECURE_AUTH_SALT', 'OX>qKkx$n6Y#( ,Xx7!lYNnc~L18}*F.aJmD|=L_yJ<>aRPOyP|cgU$#{pf.+IQa' );
define( 'LOGGED_IN_SALT',   'iyq ~U1l<J#)u.tUVAn?6|Ctk+_5-FD^Ia{.9fodT=_![JoP7pu/M*,}eZ]lrivu' );
define( 'NONCE_SALT',       '@?>%L8RNJtP)*((pcy2=F@1#asor>IKOGaY@2lxx4YE(xnP~2/^M]jL)jDm<&2Ma' );

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
