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
define( 'DB_NAME', 'NationSounds' );

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
define( 'AUTH_KEY',         'jN*`Sg<!!yY-qsdrkSx99ozE5GM}6hAW!SR_~7!D*~=ej/`Q7*kau^A%qDZKQZWU' );
define( 'SECURE_AUTH_KEY',  '{/vX FO65;t>t*&8/gzrns~VE+xxM-uP+bLL|oAfns>;iQ=~Z*-G?n7Mk;oA{nA@' );
define( 'LOGGED_IN_KEY',    '@5Ubxmfx2w:K$/Ql{=34AkRgE|n A!q[LlE~B#WSyhe#0rZD]pzJ~1$HFG[7OoBX' );
define( 'NONCE_KEY',        'MQ=*|~4YM93q3vTcl#,S]32_H)F{nD^9QGKL$b(F<5(<`wNu44ZK]/D7GcO>|~`k' );
define( 'AUTH_SALT',        'DJy*C<^/O|*XQ.PINS-zXl4!cjwD@[k0_n%O&1 #Q0l*s-C>Wok. =7Qb$b)Nf0w' );
define( 'SECURE_AUTH_SALT', 'd`XeVqb+HmL4vsyy#d hWH`;RR&o_v!d=7=>?lTdqj=!um[7G`aoB.>Z~&3Pm#qm' );
define( 'LOGGED_IN_SALT',   'E Cz4w!CKPp*X%m +^4CA8{M~xXx2rCUt7uJU|.J!^1wtZ &S/1nxO@<#zp>;ply' );
define( 'NONCE_SALT',       'QfykqKma$38Sy;jrQG<K=oA`(CXd|q{1_4y K<Ik#`GTt7pF~Ntmkj[3Lr.9`G =' );

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
