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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         'MAWEls-zY@W@M_R)e$(!;B*ZjS[K]0@D+?)L*;H`g:}G:(05JZ#i(da+!Uh._;1o' );
define( 'SECURE_AUTH_KEY',  '*~ eXa^pz gD]tW9)gE3,.7f_v2ctc3RzCU>1)3>8B!YpPnRCAPyDjr>[K=E3=4e' );
define( 'LOGGED_IN_KEY',    '115dp{J]1Y@gm]ruF~;ahB0^dK= ukmi|.R1+gD$YMn[sVM((TQa_+EyYR5[Wt}v' );
define( 'NONCE_KEY',        'Ac33fhOpeT)~@tPOt(;7jr|LN;(`b!y4u9DgH6b#FdyPDyR(r?c^U:*u2-}M(I0d' );
define( 'AUTH_SALT',        'mt57ZM3>TJzQsW2(UYFa_Z2B:&g^|EdiRtg3Pac`qSH@(N9T-SygDF&nDhIc}-Q6' );
define( 'SECURE_AUTH_SALT', 'B{,ot}=P]f4$U98eX,|i!xTtj2D2*Egwv>}j_p$q6;ZCr4,u[/ZfOE{o< :~73ip' );
define( 'LOGGED_IN_SALT',   '*VI_q4[By=u/8UnF%k]SMs5^{hDb.kNcEL,g9aB:qqsCWz,eE%_~FoQTeFVM;hFj' );
define( 'NONCE_SALT',       'SazS61^rd0ej0`7%)bOA@^yQ~OZ0+1|ShDd<lY.0F^o3}jBH`bTk]EVXCND.JEGV' );

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
