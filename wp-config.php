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
define( 'DB_NAME', 'donalibros' );

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
define( 'AUTH_KEY',         'b$K$LjFf{== y%I#zTWM{xhS4V_MQ&IrOSd#e$-Z&uB<GDzhn?Py^$6UEw(^~=.$' );
define( 'SECURE_AUTH_KEY',  '`v+,u1yE%b>qQfNAj!,!0weJnjQ^M9&l`2j%r!29j}m#2GX`2P&FZx!e|`(1>Hth' );
define( 'LOGGED_IN_KEY',    ' oQ{}BKKu.=0ppZcErQGkI6o}eq6!NFVt=KE Gda;wQ&^Ep,O-Q ^{>:I)7~6 d ' );
define( 'NONCE_KEY',        '1/7JZeZ J=Uu,2MM/OP2T,wWEh{&j.ZnGu=#O dc0a>,,,=Pf08r^@9:X&<d$tq6' );
define( 'AUTH_SALT',        'C~AySD[Z%n<,X_AeT~%C4#*)a%nQ}/u%|cfPXJGj[_n9V,A`?0#f-?ZB8y)b$:B,' );
define( 'SECURE_AUTH_SALT', '^Kku_?3rF%%p6ou}Dv_rkNy-;UNp(3T?b=zI5jk+3$7$~/4nMNwHd)2>OmDpGAOB' );
define( 'LOGGED_IN_SALT',   'pI)nN6*Kv`25W22NUAp>PG4(;[k(yh`t%!_owG(_ @6)|^3]5}!Q;>0hwdz@)Js+' );
define( 'NONCE_SALT',       '_,6>ZLKU|L6kChQtg7s6VZ(Zm.sLVy75SeGP@MV~`]`87Oi~[R^ywVHE,--VJd7p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dn';

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
