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
define('DB_NAME', 'newco9fx_wp176');

/** MySQL database username */
define('DB_USER', 'newco9fx_wp176');

/** MySQL database password */
define('DB_PASSWORD', 'HA5s![0S7p');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '16gcxuhh3n3scw6yh6tzlsbtobzi2eorndj35mjmtp8zmdtbbylqh9wayvnk0jk3');
define('SECURE_AUTH_KEY',  'ezueho6oxg8ikyjnlailbwkxseo61e9fpa1gidixy0pa2bi5jidvmcgrzzsbz4eq');
define('LOGGED_IN_KEY',    'i2s54qwy2ytv8cy54d314afprptvhpl3idkwfo2svuyomzuzjmp8tg7g7d3rgat4');
define('NONCE_KEY',        'zjd4lglfi2znfwdudf34ipovoeqxjfargoxdzodsshjxixcalmvwene2l1zvi69l');
define('AUTH_SALT',        'j7fyl5hcfwdjtntw18cggjacry73tefmiiiyxhotopwdipsb4pm1nhqmgaxi6gqw');
define('SECURE_AUTH_SALT', 'knttc23mmtdc3k2t1ojhfcn9r6j7igoywk1yapffp697s1sizmascari0ftjghtl');
define('LOGGED_IN_SALT',   'vwg0301gfyyzfebgqel4cwxd5yxag8ysqqjvh68umzn6k1vk393yo4mnxtcqoetk');
define('NONCE_SALT',       'phcxtvkbroasfxhzzl3xzfebk2gldtkcxuhv1prkrdvgtulf6fnuku8rwpfxfdfy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdp_';

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
