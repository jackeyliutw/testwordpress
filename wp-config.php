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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         ' Meo?cZ5FNo,.7WnMYxCjrUp&ZW5N1e;U%lvYi;!BJn_&dQ2-f*=2FDS7:w<91(^' );
define( 'SECURE_AUTH_KEY',  'cQNX</YfOTo`NH@3gqqoiY%7_%xhp_!3yAU PH!Y` /4$TD.p^|){4SK$Opnispw' );
define( 'LOGGED_IN_KEY',    '@4cyc=SB(BVQ4*f1np!wE>,Bth1U$H/w#{nX&|e)nA:((bY|0ekW%**Gu`c<$6tl' );
define( 'NONCE_KEY',        '1#:W1k*(#HW<koR3oC;f@O,W{y9{:;50c`XUT_pT=a9[3l6x)!O-O0FJ%dQFq<V@' );
define( 'AUTH_SALT',        'i@9A.}:IG^Z2@XN22!o&{uAS16jUl<&KZM:Mko*^ sa+*|Vi=j&)/<LI/K%^q__)' );
define( 'SECURE_AUTH_SALT', 'Jedx3q^K7 .ClLVfribc!tZd:hIL.cP(c+V46_A,@9^qNwKEu_7jmS0?J!{#&F/f' );
define( 'LOGGED_IN_SALT',   '-DuAE>; (w@hj?!U$;Z*9Z~a?v o7 5w<NxPg#=pD5y]yw%Do>4DU8M*_,Box&&!' );
define( 'NONCE_SALT',       'XL9wr9.y))CppQe Pg/!{_QmXS09%HdM9jNL?/J=rgg/`$+Ay7]%d(2bIOIU!ats' );

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
