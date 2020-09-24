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
define( 'DB_NAME', 'wpfront' );

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

define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sp/tV+[}PeGi|?7QUy.NpG]^1hBj7^wQ=_.zY3~,V#g}{ruIv`k`v~KD,@d0@gO3' );
define( 'SECURE_AUTH_KEY',  'm2K|TEi5sesmmV2~lahE0=^N_pqwJ 0M5EI(HJK o4w{!2flmE_avxc.lY?{#C$r' );
define( 'LOGGED_IN_KEY',    'BAdk{SJ{NcB|~!RI&VaESIoibZu0lu8C6=C0OVxfx4~aP0>k+}VVF=GdIOU72EJP' );
define( 'NONCE_KEY',        '8bo%rA$d<3%yk}?GHcUy^SI^wDnHY;pgl9eW~I4xp*L<ZcId1UQr;j6WsxGjfNd.' );
define( 'AUTH_SALT',        '`l`c$?[VUh|f#okT!>@8&#(s~!,MXjmDT]w rf/hm u~C?E_@xrM}]_-:P4|;$5q' );
define( 'SECURE_AUTH_SALT', '}%U`vz00rE-V;7Y33-tKvpKZCeAI^1~/pc}*,(0[p^zv%j~L*ES;c~h^: *rH~<P' );
define( 'LOGGED_IN_SALT',   '+cB5u9QI-;iym;CVO~M^(e 1!lQ:q h&^PE)~gZ;f/=[~$prC){]EX:,fhBw.::P' );
define( 'NONCE_SALT',       '+BMfYCc&3e&c<ry8v8L=uH[CWtF| DZXb,D]o|%spnBn/c^S4A@*-eI/#!wx0]9P' );

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
