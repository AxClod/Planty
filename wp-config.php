<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'D!m^r^Er^=N,5jdIaKerU@e>@p-cHl!VG!&ZLiw2%*o/$_V``ts`K.b,6#7/V;0s' );
define( 'SECURE_AUTH_KEY',  '3E:,Z%<n0A`Zw-$j|;IxL+&2zMK4I IHuj;&rdl^;LkeeSUjXcknGQp<@9mT=upZ' );
define( 'LOGGED_IN_KEY',    '-D8-a%LXq1|T4X.3Hw[(H[(h^De:2w/K8yDLtA^k<k~=1I53[_6.wx9Bc[--RUn?' );
define( 'NONCE_KEY',        'HS[>bUwz?CyrT6o-vo6CUd(WZ1y0z`QKcJfJ(PY 7ji>0S;yf`9<:0Er?U0$+Zi~' );
define( 'AUTH_SALT',        'uJhbNR:/W*sz)q,aD~Z_^+ZRLKX:LNFQ*9p6qaK!pxl(/6Y71.0h3lf{,f-Hfvba' );
define( 'SECURE_AUTH_SALT', 'zRmY[gf&5@z~z>=:{@SiMRm,s0oNq&{s6zB_E`B}TVLt$79pOB8nok3NF.bK;drl' );
define( 'LOGGED_IN_SALT',   'rzt@q$YwQ%%$U*`E+;Z;|d^EO(Co|#BR!O, 79LhL3k/us{mFz~G?u$wr~P-R@%=' );
define( 'NONCE_SALT',       '2Kh2o-d;RDzeW~SS>G2,;ZsV3gU(&%1|X7m9rkMVk&8[|{`-&*Jt@kD*g9r/S65r' );

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
