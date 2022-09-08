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
define( 'DB_NAME', 'mushydel_wp820' );

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
define( 'AUTH_KEY',         'H.{cRyR|>[E#S5dfw]hdKzf?tCo&Fb*tD5F<J<&yY!|qjW06V{v4hdLn1ge4PwK/' );
define( 'SECURE_AUTH_KEY',  'QZC9+UfMtGz5:0$]jWQ1!/e?K6byr%`.d9t+YXYR<hMx1i81A>QD$-o;=_`]{XEM' );
define( 'LOGGED_IN_KEY',    '|S{,EPs%{nU~-@:=y4Cljfw2j]mu9yg#U=]i+0#lD- p72idTdU5Q8iI3Ni}=>Kg' );
define( 'NONCE_KEY',        'lLDzTaUb]J0%G2ZD$LC2/n9grO9ZY&Qt.{Z>Ln?77Zs0u%M9N3mV~|.mczUKBi)Z' );
define( 'AUTH_SALT',        'z|XM22,4@+bMhHRDgQHxvXggsI,C)JM}7Bi#uYpdq@[?9wnR?_H{~H>r74c6w1+n' );
define( 'SECURE_AUTH_SALT', '?</ hm%,GxjNsGsv`eL5Ly+T;BdWU_`c|;JD,GK4C?p=Q6kq]+{FV=6S.n#-t`a_' );
define( 'LOGGED_IN_SALT',   ';/~58As|GBk[_+Rbu^4WF=qDSO-@F @x|:|#OPN~z^9WiLA_2{f@Dh[u1E)VaQdz' );
define( 'NONCE_SALT',       'FrdTmO_-@KVm%,=V55?AuQRp,dwCv.leM9d7bPe8_qkZNT2<WF+!R>Sc~Qbo: Io' );

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
