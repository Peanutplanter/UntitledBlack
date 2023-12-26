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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '!Fd=NFIM%1<OLo97yw<y1N9Nnc_?:iu7kD[YN7u_e&aP;B5,ddAqqEit;fiM!lBW' );
define( 'SECURE_AUTH_KEY',   'd9$JrUi~RO/vO{ F~|$ctabIJl37C`N~i.)cdFWLoYti4Af9{+3;]B(XQCq!ZfjW' );
define( 'LOGGED_IN_KEY',     'hbp}a#,!fTW7}zmM[lay X3;RhPu$g1CT{SRb5&Gz3_^~KjL_WcT8~+HUimeJyHR' );
define( 'NONCE_KEY',         'uZ(YoMd)~l@Gu**hDc0gXs$35W9xL~>G~w4$!YZm}_}lII,)}>KkfL8f;50.Db8k' );
define( 'AUTH_SALT',         '*)u8 kI5K<;)x(OW>s=D,qRd:YQq&Yw^Gyi^AS87hPQz<;wm1PyZRWT/p=qq^}I>' );
define( 'SECURE_AUTH_SALT',  'AuBuo}{f+rZ8 ~LAClDquO-nDuyi<HD-< ?jDtEnKB`19f{ZzBCv(nu^K{uzP&6#' );
define( 'LOGGED_IN_SALT',    'SoGaeDN[O+Bh$m@jBser}=55N8-u@SuD8$r|.|N{HcnBxM<esOoFiZxm=%c3%gWi' );
define( 'NONCE_SALT',        'fhKV{DVbxHzjl:-n9qqlx{0Hg].-eFg2bNh }N~u79kKub+81}U+=Ji.TPY9Nik8' );
define( 'WP_CACHE_KEY_SALT', 'AFCtu*h.NQK3`>lB ~>A+}*a*2Kv<3~thBAw{E_R8*2H?{B-xy!6P=L&8Y?X*H<?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
