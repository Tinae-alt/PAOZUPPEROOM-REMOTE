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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G9I4+5FhMlbVx9QL6XhvK/wf3MU5ryXJRVguAIHMaQyVZoaaKTYiVGgaaR7LkIrX8MaryLsv48WHUW/38loVxw==');
define('SECURE_AUTH_KEY',  'JVJURRT5rmha/CMmLJQjAxDtvaXLQkA+JR/jrEHqhtNcmImbkfjDkKnkMn2xfa3YYdqZhf9fW6WcEtUG6pDTFw==');
define('LOGGED_IN_KEY',    'z51nIxo2lIPWum1/qn2bOkI4swhELFu0XBteS9LO8YbTDbJ1Mcftb2p00ZpuYTpOxfgH4GED2q6lSo/9NZUtpw==');
define('NONCE_KEY',        '5fOd1sgtTYmfrjTxF73n72HMpBp1z7dXQQIusovQSTGhdRh4IPwoyU5b55T0NpG7ZISRtjJqTdAL0oR8GUl+nA==');
define('AUTH_SALT',        'AXbqWIrXPmP/57hWdbAt96Xd7ovzuzb6Hko5lpXz+0dGCIHJlahQeFTefLh7ssmE7QDgh5Yv4IPMKhTOaU+/2g==');
define('SECURE_AUTH_SALT', 'T52mN0NxtDSJq3ejuQ7tRuRT3NBUaB+RLIrSg3ZYxnP/uVe0XxlLPhTu/B+g7hmBSXfy7Gnn65Mlxslit+acCw==');
define('LOGGED_IN_SALT',   'mFrEpnbPADOLUa+CnteHj+I1S0ZISjXpwqxwKItgCckdNwqz86ZdRHjH8pOruu7yNYqGX/YXAiTP2347cKbMdg==');
define('NONCE_SALT',       'rlubc8OcM4f7SBOKWMJ6MyTJ3PSnrcmOwIPlSOssiiQaeSmXGmDM9GnOIb9OuaGxDPBvFBTg1truWb5nwq8KGw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
