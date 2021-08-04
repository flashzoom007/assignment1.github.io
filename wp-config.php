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

define( 'DB_NAME', "wp_test" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'q6+y<1eq=~}ErCt|,Rp#T,@#Nk&XbN> So3^`l6KS9%JUcUWGi u.6AwhW4IDY6I' );

define( 'SECURE_AUTH_KEY',  'P6P$a7vR[gfJws-(E#_7Rak]81lznp(xOF-/m17L4GlP{pPf=QgzAlan^j?cj:;F' );

define( 'LOGGED_IN_KEY',    '_rSLPCnLt#K;d*+^o%55c7PT,zHnIly+mV_/heRM{3Y}$r,aw*f]}YFxpb&Ru0Q2' );

define( 'NONCE_KEY',        'n4C!x:#)!T^rzS9F5ic{Znu{_&GPVV3w:v|h<M%n%3wo%! #+FUs0Zg:(} r5&Jq' );

define( 'AUTH_SALT',        '7R5rGI{[v%$*Zqzt4(0<D{$8MhF]U=<8x ;pI4`+#ksw1xD(xpuyUn,:s0j#10v6' );

define( 'SECURE_AUTH_SALT', 'f~Q<4<^7jz<[**LC|]uuD2c6Gyn:7DCybhN%:>%9t=:_jojSGPV0ZqzBNujWwj:*' );

define( 'LOGGED_IN_SALT',   '5/kpoX68xj>fk`^2+-ntHr@5Q/(V3c{9jV n?f+#R4J9ENN8vo5+^B#HA3Mn/WuC' );

define( 'NONCE_SALT',       'RN{@5iZ=o,Uhc(>N.NGV;*.P;`~C^(Uc5VVpk#$0cZE3?.2!eCsX82B7F({B Sn;' );


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

