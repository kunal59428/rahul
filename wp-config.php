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
define( 'AUTH_KEY',         'ezslvqP/H.!tSVH 4[Kq1xBDqFv~<`26ssO@f`EStIM|W?6TOb7{;]3t#;x*;_%h' );
define( 'SECURE_AUTH_KEY',  'Q*]}1WH[Jjr;|t`o~e2f]#~(GqQax|),Bk6@epbwF*G1a{8,{~++%cKQ/|.:@y|P' );
define( 'LOGGED_IN_KEY',    '/WT[a6 y=THA^$FCQ{,}W[..vM,:$$h<[,E=>V9s1YQ{Rj)Phq=Dn_k_8)tOc{&P' );
define( 'NONCE_KEY',        'YOE1dv:)nZ5bH4r7]25^yZL`6q9c1uE%+]XAh=PFTdRq3.F%2@ff-SXb@~S.qTQ ' );
define( 'AUTH_SALT',        '97GVVqfm%8DT>+<8vv]GzT:tR<4bpi->WvBm;.iG_^feXOTx&zjp$A*6Jxz}8=78' );
define( 'SECURE_AUTH_SALT', 'h*%^_8tir`]6jDZa0KeQ_9*#RIY^<<h,r-Og:+0GNp3&(YiW&0zEcpYF:,`?) 6W' );
define( 'LOGGED_IN_SALT',   'hPvDK]w)B-10L4Tt XJJW%.ek026!!nLC-rY&Zzo|i Pf,xR3( %Nvp<wW!LQn*i' );
define( 'NONCE_SALT',       'h?E%(l=u3:7{+FTd1#A*[)MJ9<Byfo7edJ=zVL_~52<^-Q3,FDTCQh/SA4bpSG0G' );

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
