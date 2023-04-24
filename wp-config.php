<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u765212408_2Bh6W' );

/** Database username */
define( 'DB_USER', 'u765212408_1FdeZ' );

/** Database password */
define( 'DB_PASSWORD', 'tuwapPkI5i' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'vCOs>KF[sGLWV2:fxZ)gu5>t=bPm5-_&m99w]}YrI>71i:(H|lZ$4#Z~PECsl_.!' );
define( 'SECURE_AUTH_KEY',   '6+r%Bvh`#> hO-{G3Z&(1}*(@P+fp~5qpo.HLaeUs135yCTseBEK&m>]4WxRL_&a' );
define( 'LOGGED_IN_KEY',     'j7WCBAR-0X6<#s;}b}v`(7B&jDz6;#@UKJG500.l<|Lzd^OXtX_:hy6GPT{r8OMs' );
define( 'NONCE_KEY',         'si]p`Pq(% W5!)m:p6N/=VVtVDiDD29uZHH[4O|ItU_mh~:=]/5~S*q>$@  1?V/' );
define( 'AUTH_SALT',         '*>(s:fw HnJ2Fj+ UUC)hs,p*ZT5cXGt+j@(kpD_+#J)hVE,+ F2^yY:%fno+o=!' );
define( 'SECURE_AUTH_SALT',  'M&mGwklS#l*|I@;Ht~)|cbiqqEyk{&buY]W68ulX|zkS}!@TQxAhB^eC3f}f]%${' );
define( 'LOGGED_IN_SALT',    'BU].)vDL}!8chJz+cHmoJL+)8J<7/%gZ9L-K:jR~4ta{zHKP$Z%mvFVPgF?i5 :.' );
define( 'NONCE_SALT',        '`os#@G6CU-u)nkI>k*=2hVBb=Gahck;1+TItOi@x,xVZk5$Fm^:s+`!2ui}kAh*7' );
define( 'WP_CACHE_KEY_SALT', 'SB*hvTRW~t2@j]]8((uf0m$B0owe~uCCU8UtO$iq6wBIvXEX}6~BQVM_#Sm W @)' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DUPLICATOR_AUTH_KEY', '?D/<y0=mwvV>)*Hud_5N1@@)|UD:06jGR0k?0o |[nrIS8CM<@9F-J5b=]5(]/,(' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
