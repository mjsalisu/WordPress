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
define( 'DB_NAME', 'pickwise' );

/** Database username */
define( 'DB_USER', 'PickWise' );

/** Database password */
define( 'DB_PASSWORD', 'PickWise' );

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
define( 'AUTH_KEY',         'A.u7!wLF6rg_VVMg#)VgK`a8J#)>p2I)W(:3hKO&o),e||dddPN|kdG]OR&1y)0n' );
define( 'SECURE_AUTH_KEY',  'aV/fknW|qUH*?5_Xw_nOX^>2B=l1%gojVcZq(.[BZf4l17,b-LDOMR+!>4(`OPOb' );
define( 'LOGGED_IN_KEY',    'xIYYx<$I/*Z3_3!!f] q<z~!9GfdwU#{@n,^BU!O=JQElODUh>DvoNBZP|mw[}yW' );
define( 'NONCE_KEY',        'PXh*jiYBM]1$P=iK;juoXEd7z>  i+vOJA*9Oh38)9P8;~[}6b,Uje&dInNjq~qn' );
define( 'AUTH_SALT',        '1^1,-,8m&n.= [[7aFIWw:L&{s*Mh*[~Dg%lvCf-z&VutMj4RX5t}LRjrckHa+j@' );
define( 'SECURE_AUTH_SALT', 'OOk;Hm/YTlMsTt;@,sBA-9HYSXvm3DE4u;rGoxuZ?Ha]:c42l{K#&@W`Q;]&-iVR' );
define( 'LOGGED_IN_SALT',   'Iv<:^2X5:r%!u(9 7.a4 TV7L*rrjX5dMtM%%mVee[LDpWA.>W:U@p||x}O<R(![' );
define( 'NONCE_SALT',       'Ms1.VPK6yeEw{e0^jD-7s!GlvH?r]`!<b1G_dYFP%qdz12*en%ovGNU(&bm@#`_%' );

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
