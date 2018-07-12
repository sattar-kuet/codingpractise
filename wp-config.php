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
define('DB_NAME', 'codingpractise_new');

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
define('AUTH_KEY',         '^,n5|kml9AwL|1tyWJQH48QjN9F&RvnQmL<k:dJA5[]a?ufb|R;2!%Ee4i^$[bS_');
define('SECURE_AUTH_KEY',  '78UN?a`t(~qKnqSk6@+B?(HZV#4-NrkhpXvQCZ:`EKO<Xn%D*,nFv[HUP<qRzzCL');
define('LOGGED_IN_KEY',    'TZDhOn)4a-SBBL}TL{`>,21Rq|bZ|H^I r|Mim1xfm2z~doIdzx3Q^|O4y+}rArb');
define('NONCE_KEY',        'Lfo,5 Kcu^BB.1ftA1gC}C=MX^FW{w@<.6(1a)1@=)A!}b~>i1g%L>rpc-d*:&a3');
define('AUTH_SALT',        ';2`Tw&VGguRdJaJ`|]RB<8|XFyKY`_0KRA(dZmAjoI D<;pgF~D6=5cf8tPUR#KK');
define('SECURE_AUTH_SALT', 'pX}&,AiM|Lqs{>}rtt-+mpOg_F?oapPwRWUvtlzE!tmKxA?x^/K?&+kgX%pN.#bM');
define('LOGGED_IN_SALT',   'FHoa-Z67UIJf$)xXbuQQrArUg*glI!Yr)PQ;n gn5ZLFtBqj#3|Xy!*xd1p vhOu');
define('NONCE_SALT',       '$`%zjXv>aQ3%`LcPt?WE,Q<4x+ANxJJO{14LhqF@}K@8V!$qIi7s4baR6L0W+sq#');

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
