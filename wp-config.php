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
define( 'DB_NAME', 'coalitiontest' );

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
define( 'AUTH_KEY',         ':-Hc!3zp%2i,Q[kc**$]$TCY$TaQ=A,}wjX|VtWIuc>?$VzXDvw:0)#PZcp^!dQS' );
define( 'SECURE_AUTH_KEY',  'CFc@E%6YIm<qJX2Y_KN#><=.;>Fr5H>c :gYQgZIR/f#0qR*_.KwYYJl4ho4GvW(' );
define( 'LOGGED_IN_KEY',    '~S~X,N&7Tnp4YTZ:],?lEd=Q{XN^B,cDIYq|~:=Udd~<rn$ip`HFYZyV#By2^/wM' );
define( 'NONCE_KEY',        'j>)+^|3fjO)O;;<]p> DAF0YW!@QjdUnpDx^d9dKt|Vj}ZQ_g41G&}_h)Ae28c-T' );
define( 'AUTH_SALT',        'Ov6!&|vYlMO0Ci`@_CtXJ,N+nS-NdkTrA`0!!?|p$pqDj]WE&>PR;C<-.iw_vKRg' );
define( 'SECURE_AUTH_SALT', 'TIEq5j|hTCe#pugeS0QO6%d2P{U``Hd!O#nRP^zMYb|j$(hI@OD&l(wFS,E Fe_P' );
define( 'LOGGED_IN_SALT',   '?egV7C8fr@9?mZTCYNoequ{vfkgl>wrzS*<2oiooZ: lmPid!J|L%jPc}<)y-29N' );
define( 'NONCE_SALT',       '~c@M@#0?<qP2lKtQ?<y9KsPE4~)f!)1kGwcb}DjWSbO<IMf;*{;oq/?8 jl]/25a' );

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
