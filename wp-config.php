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
define('DB_NAME', 'chalzbhe_wp8');

/** MySQL database username */
define('DB_USER', 'chalzbhe_wp8');

/** MySQL database password */
define('DB_PASSWORD', ')hS7!1p79P');

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
define('AUTH_KEY',         'aribb00l2n5ruzjdsk5h0whunn596aombk2ax6qajh8y7cjd1jiwx9ztdyqncdax');
define('SECURE_AUTH_KEY',  'kad8xvd6rdgzo1zhhxes9zi5fsucjcnsaqb3b3wdyesyblrhevuzbstnz4twyzx4');
define('LOGGED_IN_KEY',    'tbrnhygsktjqfsd9kzommxqf8gwv1c2vujcrlnsvetnt6u5rcbgfyubpcsms0dmp');
define('NONCE_KEY',        '1ifyxrj0w5y0qz4szfg28mbdbphn9w4f4jayowtuuk9ykwtag5wvltytijtktucg');
define('AUTH_SALT',        'oty2mp6rtytfr5a7gbqf4qszxz6s3zl6xgeeebajbrlnkrtkwj1ay8g1f2j27evg');
define('SECURE_AUTH_SALT', 'evpiaika6x1cqfnmdrfwqfwtex3oefy40r4d7fsojajbylsrmzung7wz1aj7xp2n');
define('LOGGED_IN_SALT',   'bnqhyrkibbjgzfdbcpe9sfmrpnhu8x8zteaivr6jfuo93pekvjftije510pj88jx');
define('NONCE_SALT',       'bvsibiojjta5dgrcrtffq5bdzvl4ajczg9svvlng9t2ewrekmyxrutmswda3tbkb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_15';

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
