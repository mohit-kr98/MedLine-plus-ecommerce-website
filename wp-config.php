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
define( 'DB_NAME', 'Test' );

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
define( 'AUTH_KEY',         '${=_|L:.awBo)2!Hs+xt#QAqzp:AkgBvQ}cdN!9^HRJ[20-=:OX:G*}.G,?9kk+<' );
define( 'SECURE_AUTH_KEY',  '%ePsBO[4{!jPBTA?@[-+Ylu+CU#/&^*/hfEw)1*]EY!3RQ76BY5Bg!c7EzK%d_0u' );
define( 'LOGGED_IN_KEY',    'Zd&x/<.ET{*Y#?<BSO#s2DeeeBQK$n!OJ(dCl4&}Jz%D^`QX)YIjAjQ3*I$w6Y51' );
define( 'NONCE_KEY',        '|Ha8LI!>yI{p~L=~w[!Lk%j&du&kkyB*Q}G[`s>``}-^)y|=W=x)5*T_^z=,Qo_L' );
define( 'AUTH_SALT',        'd9?;6kz.^UEN$qa21Z|$i(nt%IVAS:t)PQxt/keQsl-p*X~g]J4I=9fLVS# AZ)$' );
define( 'SECURE_AUTH_SALT', 'b:_LM-%#b(,NJ!awa(>j:/X7OoU0L$kJoOHK (lNoPgEB|q2hkj;bKY^{MYP>QCd' );
define( 'LOGGED_IN_SALT',   'U$,Fs]8)[EYPl/0UMS-2d#3asn!G9/7R<N@Kup44aL- y2aDlyV`z~q+~)Glm5;E' );
define( 'NONCE_SALT',       ';zQf>KYbKGjMWgXGYe9DO)S&DMj_(>-|AB{XiI,s>lu,+l_jw?M@Ar}Mf-4~3(;`' );

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
