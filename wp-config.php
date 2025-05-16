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
 * * Localized language
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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'dtI*]j@`gVpYUUTUq$~jZ:dPAQv#_rRM8LFpBSJy7&:Di$LL1Zv[mlAS%Su&OciR' );
define( 'SECURE_AUTH_KEY',   '*ir510>Ch~I^!.~f[BpD=0DSZCh>78^b<L{j%x&WHI/OaMq%|HDWgd(5 eZG}6gz' );
define( 'LOGGED_IN_KEY',     'pSksrg7A!M2;8b@Fdx_LC]tj+SRK>=Nv40-lf#>;KNDK<w0AsSryjm2vjYVr:qPf' );
define( 'NONCE_KEY',         'x$Qr}3C757k@P/QGWdyz=+DN)eW|A+pw9N*<U5VUJp<fa0oXxm:e|P->#rC>xDhE' );
define( 'AUTH_SALT',         '(eKpfp*bn5V}R_,bQb$%Lq@o5E;-X5=GSg&ef.!SXt8zSz)cIUK~m*%YN`C-It4~' );
define( 'SECURE_AUTH_SALT',  'Pvly*m7[F2#kBz#dD5g,HQvrN&}.x)O?`f4}`_KLyn(ZO#i/7MIl<.xev[/5wa5u' );
define( 'LOGGED_IN_SALT',    ',0[{,Qyo9p>-qU^By/x6hX%ke8[%QUb$Y]eT#~9KA8i.T12H@#~1$:6EUs+theTb' );
define( 'NONCE_SALT',        'LixSbP+B.Nbn%G}+w;~[_&;-l_#$Dv6zc`3$YFB2Psqu%8Q9B242+cq 6u=JL3m{' );
define( 'WP_CACHE_KEY_SALT', '/-z](:daD:h;9.[:BQ~D,$$x:O,sMv$9lceQb0m&uVF.=dxGm*q#Tz{@ZOgF>B54' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', true );
}
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
