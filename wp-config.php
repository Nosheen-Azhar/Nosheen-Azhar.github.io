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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'oMT;;EM%xuyMOM?UNe9GX+g7kt2zzQsLRK< N5ge];l@.vtVWk&DZ9vt_l-0^!hM' );
define( 'SECURE_AUTH_KEY',  ' x0Hl=;<-GtSKrB2aNX%N<3=rnQ1igh6F_2eNt+k# (#csy>U4d|p.Mc_Mo;%5:5' );
define( 'LOGGED_IN_KEY',    'n@f+q#B*33A`i3%]J`8>P^2#.(7X<G>D#GU.I7/a|<5/ -K<nb{$V ]%q(R4td8k' );
define( 'NONCE_KEY',        'xAE<I&b6&6S?/7x@BTQ)E|:`2][wi+RD/}N!E]x?bupy=6k*(}`y(ODrIO,{{cta' );
define( 'AUTH_SALT',        'DK4Rn]r/g./D_%-| vC{`t.CIn  }c|W/x8Q5ssbyAFK.Erq,qxP!siq#Es >sk7' );
define( 'SECURE_AUTH_SALT', '}860*;StqSjj[|UT#^XV}o:,xM[69heE8C^a|VAy-_om~Q>vs,pF4<6,-RS)NRd9' );
define( 'LOGGED_IN_SALT',   'f)qAP(~7K-u;[Z@RsS5:Cg;!XO@xrWzod`lj2%=@ut7$q;vDsYErJhGhNeS0}R_9' );
define( 'NONCE_SALT',       'L]m7$}^-rwv;MB: L`;Xlr]^=ddPgzdu+0m&^6UjIcrET[yO.~!GUirZ-5LNghCS' );

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
