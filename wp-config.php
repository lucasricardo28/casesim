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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'casesim');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X>Ex+RiB8C~x~B_eQ7_Gw|cTz&K!dh~a KT?P.in+e#~<y3c!T52X|n~YUv1h@G}');
define('SECURE_AUTH_KEY',  'P!~-%/2<Ce2yL~y8_ZtO?o*G.PoAsRmE+KWB0C-jg p:00LZ*BzEx&qL)wmTd<B:');
define('LOGGED_IN_KEY',    '`a5V+2bpBXf,Qtdg,.yHqF]dj32y&;>@6(3(Pz:9w;-s.${c{Cbh9B?:>~y/X!C=');
define('NONCE_KEY',        'ERxFWr8NNuFY=-`]a:*03uQUVGA0ovuDg^Ef+*2RX$2>PC~492>:d.0OaOu7u=Pq');
define('AUTH_SALT',        'Tg0W0g={XqKV[9pR1Ym bv*sRFs/4:WSc$ht0_;tgw)Q*NMdBn`,|t(tX{p2pCt<');
define('SECURE_AUTH_SALT', 'wL#bYKY=5b_TJV6rRuu;)JP~B$e>D3[]`-8~KX<ljK|Ssl@/<Ma=OK$kRa:y,dvo');
define('LOGGED_IN_SALT',   '?o>yg(scJouIA/$={Z.omE?~x}_@k!xk:@,4)L/xT?}2*2py1(:OBi#H9b!&s/k*');
define('NONCE_SALT',       'JH~@/%M/S~/k7.+WCgf-R|+KjL/WYrmkZ/e8M~fZO$H{WU5Os?dE>%WmI<Jl~h%3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
