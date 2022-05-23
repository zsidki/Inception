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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'zsidki' );

/** Database password */
define( 'DB_PASSWORD', 'zsidki1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '2l,!&Q1`WHdu<oK&^!SaT(0JSx7$47}(6LLBE}Ir3qvjSxGS{D3qEbJDk@8o2EU$' );
define( 'SECURE_AUTH_KEY',  'D^0eoi}+wW5,r-j-{o02W9jNu}U-csVd`(IN`~1 %dk<Y$+(*lD}f{f!tJ9(P&91' );
define( 'LOGGED_IN_KEY',    '4m.6L,7^n#D9dwq&#`0d}|eVf$Km#L%U]-/x(:<.+e2_X,X9vJs/dia)IgQO0A_p' );
define( 'NONCE_KEY',        '%GoA8K6ceoT[MJduT0q0R7}KL3YJXt+Ki,+d]1K07phZH$IT|my;u5CDhid O6(d' );
define( 'AUTH_SALT',        '%i|}dhSqP:4!Is@^s8KA99L?o%]f`):$}6s7}/A7W@awOH.A1+C#*!UtCZ5DqXW&' );
define( 'SECURE_AUTH_SALT', '!e2b.rzg)w~>iP7Z7}r:X*a%#t[XO<0y3J%^dwj#u/w%[GBQ>W+%m5/Nc3l@  D~' );
define( 'LOGGED_IN_SALT',   '?*r=2$BoN;:m6MD9O>ZtJjR&< f?2Mfi9KEh7E2ZH^yB7-{A?GuZ*Jf~d=YCHXW,' );
define( 'NONCE_SALT',       'mL1!Q%@:8ThJ -XI5&3sFKi :+7gdl#&J07A9t;DM*M/B[XkW>&|v[j3kuuRmRV#' );

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