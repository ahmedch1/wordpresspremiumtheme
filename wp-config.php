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
define( 'DB_NAME', 'myfirsttheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wxPIbVC~JL<?j:q/R2x[?&o`@-1/!f Ch#t,hFZF:2=6kC51EnuGD9m/aUJW@m0T' );
define( 'SECURE_AUTH_KEY',  '*8<dEMRaSo_*|sw.ND^wC?+chdR83UpniG q[cbi%9oQU2Xu;#G?=aKEAiqj%S~z' );
define( 'LOGGED_IN_KEY',    '~jc8)bcNyx04Mf@P>yA|=`!)F~7jbc]i1*{q-4Wh?~_g|e 0]sjyUP?;A~tJEKsQ' );
define( 'NONCE_KEY',        '[|%${b|K*h! r%3Crc=#DFnydb.0 d9m!:^x@Mwl0qR]0`&Q(SO8ITUcw)R(y|b$' );
define( 'AUTH_SALT',        'V#qKc=xX2Y+WB|ze8yF#[+CGu*6%LFO-{btYBl{_r#nFtwm/kj#kv%;q2g;As*Zb' );
define( 'SECURE_AUTH_SALT', ',6OgRJ#*W{0gE8!0MD8L-rD~Ho;FP->iV(.t6+xb%e)[5EN)Vv~ZiBmKa9hm867)' );
define( 'LOGGED_IN_SALT',   'rGT^bDA7O^I2GuaBDmqWKK[SJDh*?%+,g*>)EQ#ap]&4B$obIC5/63<>f/P|muIA' );
define( 'NONCE_SALT',       '`l`<xui6FUV_qxgt]a51<]w_jTITB?viCfK<r0x^~0yzHMyTkvD_crE|B4EPLXZO' );

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
