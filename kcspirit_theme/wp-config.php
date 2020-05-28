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
define( 'DB_NAME', 'soulcoma_hellodifferent' );

/** MySQL database username */
define( 'DB_USER', 'soulcoma_hellodifferent' );

/** MySQL database password */
define( 'DB_PASSWORD', '$rmaU$grNl]@' );

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
define( 'AUTH_KEY',         ')sE53VMv1}h-^Haw#)@p^S9!SK@#vGQI.]Qu(aU.pZ LnK4`K$HawQI8d QV>MR7' );
define( 'SECURE_AUTH_KEY',  'EKyzdX:OQ g3 8Jo6kB`aCd8+E^2~$xji_HY%<U1M$:)wB$]gf<r@5el35`Y 5ee' );
define( 'LOGGED_IN_KEY',    '1oxVNhOwO^h(AKt><[^K<g#0E&>4fG&xRV#&=66hTEnXJt~`&?<o$:/Bp9N-,v~F' );
define( 'NONCE_KEY',        '].!.X83c@7w44M.`C)/kT[(K(fo?A!Tx*gxhm8m?c +13o`+O#8DT5+xr8isQMM$' );
define( 'AUTH_SALT',        'UkHG~m!Qn1]In9|ae15(#naV`;c(Jvbg:z5;<cd7j-9I4}]g~.VyWr^0vrBCw52>' );
define( 'SECURE_AUTH_SALT', 'HGS*Ewg9oD@QBByHgb.DzyDD,q<Ql-P-#+X}@ 1S:?KXN(~8`H_;ncB!i=d2vn9h' );
define( 'LOGGED_IN_SALT',   '+kT!5y>5E}`$p_0W#_[o8BK)FYjd*ytZ__OHe8~+S)/u,]IUu:j%aPmdoVp$3sO4' );
define( 'NONCE_SALT',       '1U@/&jK4N!|mfe#Y,0Q`E?5q0!k^p{ICNtIL(f@hQz<naf{1}pYM*/N3DqplOrb9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hd_wp_';

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
define('WPCF7_AUTOP', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
