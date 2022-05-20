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
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', '1234' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '4vxfH#H%mNR!GY[-e+TM%Q><F*Y)e4tH<5hV_DGiTf+gvHW*I@N4aVfn^Lm93?X,' );
define( 'SECURE_AUTH_KEY',  'sDmrRL_g)MIv?4AT{#eyNxNL91L@6`X-&W`O*L<e{G6OEc|VS)I}L<O0JwDP3|[@' );
define( 'LOGGED_IN_KEY',    'nVO{<F6i^>_BY}TWp.*A;_YD`)SCLDt%Qt*Z<4vzhIx>GP[QN_2GX7 O*(mVPW!l' );
define( 'NONCE_KEY',        'o(Hu6?;bRu![ID2eU?9L$JHc1PKC=2&jck_,]V^qgQF2gF#|<TUqAE! `TlZ|N3e' );
define( 'AUTH_SALT',        '+AEi839PB[,{$^vw5]_PYLNfpaa[`O^#sCTS<n[NvMx$8mGO.kL-Ss@W$~g=gdM|' );
define( 'SECURE_AUTH_SALT', '6Lb]gL]&FK3_op(W ^@nhb;5GCC}/P=0[@*hf79S/1DgkbIwwk2^J-IeDsAQ$`{X' );
define( 'LOGGED_IN_SALT',   'NNe8heMFFu*N4K-o4`5-PDj_`[# EGc5wRZ#z0W)i4>/E0vm_|*  zi--#DpnvZk' );
define( 'NONCE_SALT',       'Ua(q,9!_%d:!PSIU0(;5! m*jV`IP,v/Pt<Q?r-RrdEWVpn{=R^<:+!45+t(d|zn' );

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
require_once(ABSPATH . 'wp-settings.php');
