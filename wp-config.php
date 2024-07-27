<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuware' );

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
define( 'AUTH_KEY',         'wPAZ^}#M~1,iNB+4wBbx#(yu[e%#?6ZON6k(pz9IxF[Yq)sl|RM5-xnNtsDu8>rw' );
define( 'SECURE_AUTH_KEY',  '$+-sOy)a2y|L6V|D)ZoS1[+[Z[lm/VM)Cb-o.]=bTckq<9O$t<,#-?3!,l00S#r5' );
define( 'LOGGED_IN_KEY',    '.4h9-*-]QJUfb=sllEr[7tO]2i2]lqkA5oi<Mq1SB:0kDu{;n4N*/KTO}YkBpSLa' );
define( 'NONCE_KEY',        '->.I{Br-FF<,Qo:P#U9l!4CT+mLWHB2<s_R+~9m=`}#a2JY$YbM]J0J$7|[Kb rE' );
define( 'AUTH_SALT',        'M6dJEHb8cfDJ^D*{gHtOg,Mxe4U@`O(AJErXli86&.&3`k?eaVrXU,U} wTMk%pp' );
define( 'SECURE_AUTH_SALT', '3>|;kD{O=3XqOxv_TF/N~(.ADWo#*Mz4O}PnVA!-%6[_;tDlSwAI!.eP3eU8T27V' );
define( 'LOGGED_IN_SALT',   '[9];uoZ,hrA{GqW>%9(r4[(L~@##k OalQc850vdEB+qqB`Qu.`;.Cq(^A^oz9;Q' );
define( 'NONCE_SALT',       'cn0N=xmR{&tsA)EU[w$B2VSMeeO a$3pIf%i3c{XIBEq$Ko4y(Tq7$86QVfI:q6:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
