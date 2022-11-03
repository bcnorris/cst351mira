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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'g(kN;}s1eMgP{h[HT]6?+jdlg]4@!>u[-CH`z9@4qc,C]gWYV:L$r#i-EZL$5XZz' );
define( 'SECURE_AUTH_KEY',  '2@)X39RE*Xrrwhz0i!sar;l1_I%N9RX!)kCST,V?.0hlDR7P]iN1x$@u$&[:!^if' );
define( 'LOGGED_IN_KEY',    '6fA{X/2f`rN`sA,qr7kE]D~XJ~0s7u#7am8h!A3~lH4CwPG4?TjWvbGxL&Jr1@ok' );
define( 'NONCE_KEY',        'DxhOh4]$(NTg!^RYVLm#(312% Q9p5rGD::bIp_c)/HG0yA0,)pB?qMEAn$I6xaO' );
define( 'AUTH_SALT',        '93I|G_Ko?b[r1r7akn!&?fJ{m_24-)3GLu^&bg]g}JYlGKO/Wqls/F_8Y_kK*}f?' );
define( 'SECURE_AUTH_SALT', 'JR=lto?)wq6T!wYX ;AVR47H],!5NyInaCmh`5nEuuvW)/n@!J}X,1P^5+=YM|^F' );
define( 'LOGGED_IN_SALT',   '|}*FvU2:U{>]3t:wL;~8p^vCKZUGQyh0n+3r3VWAp#)37W8ww-*jmpq~59iLB={h' );
define( 'NONCE_SALT',       'BTmbo6k=KIA$Mz]2.SLZ}Mk4N%=8B[)NR+weF;[K_>g[<;trBzSPhf/:[:Ht~%!!' );

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
