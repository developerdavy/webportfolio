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
define( 'AUTH_KEY',          'L0{S]CO8nRgH}F%Y96?Ypf|%,Fk##CZsK{:%;ri?0OS,qF1h{!f#CHuWnS:e7%-i' );
define( 'SECURE_AUTH_KEY',   '{s{+X?ST!MG.+uCfS/x{=?#:L!ppyYekqy.R}+M0bdsJ!4M<MH|36$yetQxs5jbY' );
define( 'LOGGED_IN_KEY',     '4%i.yU+KAklyk/VPagPyi20PcAS/vr1fb}_V0le{iIm>Cq%8N}CBH4(KBk[l_yev' );
define( 'NONCE_KEY',         'd>^/g^-<JD=${opZ5XUfkU}bz|oLK;qh.`jQO]3I8Mq)^O3G>m/M{X.,4I,&mDhF' );
define( 'AUTH_SALT',         '<p7E4b8Q;- TzJ++d(n-1_9Z/}<N+{j0ui4P*osl6Wkq9|h5#q?}8GVcX:YQz0dV' );
define( 'SECURE_AUTH_SALT',  'w<d&)-23]DKb}RuZA!foN?NqX:ACzHLr0wxD~W5oZ3$.NA~XgXLGlQ (3]$8]#>b' );
define( 'LOGGED_IN_SALT',    '!rYO4P<94W_!16UO(B{;k.RuvOl|-2 48^eD}y)97W_P!1+s}R:h]s5 :A9[_w:o' );
define( 'NONCE_SALT',        ';q>z<7y83?7Q/f5>g;80t_b{<U^%Sk;GN~(j ZAuBp +h5|{QjGmf[_,F`}2axSm' );
define( 'WP_CACHE_KEY_SALT', 'zF{I{42S.>Uq`Mc[J+N8dR`c C?4~G9]83nU#izK91~ntvre+O7n0Id]j<qFxyVU' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
