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
define( 'DB_NAME', 'zilliontrust' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '07E`4! L4-IocF!bFCN~t+_t=rBOy<gn=5+*|Ga,7bS&[[3J[xFsl+VELtTUFV1?' );
define( 'SECURE_AUTH_KEY',  'zhH9^ijgq!Vh-b4c%*pO_>VCF}P?}sF~|/@4D@e}c[Kl+@Dr1ZVrsms/vxipXr^!' );
define( 'LOGGED_IN_KEY',    'xRS!,u<-!~TN~)(_L9}_dAszzeAcK =Y{#WN<L{t}AtoLK!ZPx:BlOXFyAduoY6_' );
define( 'NONCE_KEY',        'M#o9!E9TB%h[==Q~T[8aZ-xx_qvF,)y:Nl%F1>iDs~!1BVUHE3jq!,Wm,OUwFpw8' );
define( 'AUTH_SALT',        'K}|tFTRW}`G@-%4x^Wl1px6$+G#_B~j<,Ze9O2@F)HU@YgA%lz[+#%>8izS96({e' );
define( 'SECURE_AUTH_SALT', 'Q}Ub+ta;|Ea!yVE=X9h`lNM,at3/XW@E%YOXlBKul-dCd!J$<mMGL-%7U(~!.Bvg' );
define( 'LOGGED_IN_SALT',   'w,4;QNp<|9+hA{ey( IPb^h:y5,[D~^y~sj!g`y+D^5f~z6,#gLYg08ls y|6/8X' );
define( 'NONCE_SALT',       '~;@.{iC43Rr=&H`|_G2w1ajL.?yy$O,Dev.8?xMYpoN T&i,ro|NX;WhO*=b],^d' );

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
define( 'WP_DEBUG', true );
// define('DISALLOW_FILE_EDIT', true);
// define( 'WP_SITEURL', 'http://vtrust.test/' );
// define( 'WP_HOME', 'http://vtrust.test/' );
// define('DISALLOW_FILE_EDIT', false);
// define('DISALLOW_FILE_MODS', false);
// define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
