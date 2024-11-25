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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'xl$J>(OcHq)~!z#3-Hl:CXS@|QMp4r w InF&!2wWOZtY{U4T-TptOdEIXa!?.jU' );
define( 'SECURE_AUTH_KEY',   'H$S9nE;2Q*iCO6`:W%O@S1F/Z)C}&%vO_Znnc>6B6;Zx1sEL8#l.7t&/C~E2o_#~' );
define( 'LOGGED_IN_KEY',     '$G>tu2U1s56?I Uvj}zRnF;`(jaH}(fZ.VahdA!pKOa0u/3O+X}:^bhQLM)OJd*T' );
define( 'NONCE_KEY',         '$9/MBq1m`x%rd^U]ofmHir#g*?spS:K}d7[a)uDx`Bv1D/5>/?&rdD4cffoaPZ.7' );
define( 'AUTH_SALT',         '+<g>4Mv&}RG^/{T!}?reS|p,||U~.^H#W(w(Dn=]&axO_U~|EI3lx8$%eS*Ixf0(' );
define( 'SECURE_AUTH_SALT',  'c4W{YqA@3L.D*xIe|TdK;!p3*rzXQ$g5MEP~k-8^3<Mi<8-40enldUXQi`8s]7|?' );
define( 'LOGGED_IN_SALT',    'iJRn`Xask5-*/@pA<IHZ0X0?:BZJz8jud;X<F6L&`x0iWb*_N#hooXhs-IU@OB1+' );
define( 'NONCE_SALT',        '>^<s8H(kHkO5TA6<iRG#wwza2`-JC1a?86Zp!;Lp_(`0$&^>JE1c>ohY*@Iu qDy' );
define( 'WP_CACHE_KEY_SALT', '}mZKG@Pa;Di=IE7I8S`8-/ik{/CLk^kvahY>2*!n*iEZ?@Zm~nalJ1O57N[-iV,.' );


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
	define( 'WP_DEBUG', false );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'powplatform.lo' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
