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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog-like' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '7158fc138dd9dac53391faed912f004a133669cd28c75393' );

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
define( 'AUTH_KEY',         '.=e[Pr=bP:-)sRDrfB$Zz{d2/:zW+8=SB]S*Lo@qdp?:;wwmsN2{D}U3TDX@m/|G' );
define( 'SECURE_AUTH_KEY',  'H-CM}*hvBJ Vxg:*dJ~Go+U%Ky I:c} rWkDv,269Dqi+{Omh?]8FZ(rJ>{aI)NI' );
define( 'LOGGED_IN_KEY',    '52^gY&J0$9`wo$rbK$kd`;yxw.w#zL Hcc9[ZY!9gh[)ekp{}[f))w ::~Gbb@9-' );
define( 'NONCE_KEY',        'keQJRum5_!MX@:,_P|qrG=LmFM`/6pvQ,7T2mYia>1J=Q!|;@C.haP=35q^7rI{L' );
define( 'AUTH_SALT',        '$N6oaxtJ*j=(T?^0iTj!x0Wq*LfNMgsR2wcKErMH?k]kvp<;fT-jqQm)A1zs9*qX' );
define( 'SECURE_AUTH_SALT', 'h^kj]8iT_ENddGcUaux8#3ka)R^=Y^`)!%~!TTNp6%#FhL3XX[m^*EajJ41;}kEv' );
define( 'LOGGED_IN_SALT',   'NR z1+$qk$~n:y0PLoeRm7+p4OR`TSk9.~>{~uFxZgQv>VyJq@_Z[Pg}V$<F,n_@' );
define( 'NONCE_SALT',       '^?I:Be#2wW)PvklD1Sgdh#3Qcbzy%jsj}DE{ g:Qi9JP AUXMAAJfcT7%q<0N0}4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
