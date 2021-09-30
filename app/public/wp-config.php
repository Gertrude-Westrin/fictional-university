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
define('AUTH_KEY',         'fl/Phnh1nQGuyUkCf2pax+/sy0VUSacLglsuhEcE2lC/FVQsqendGVUdOBcF415xcyhVcTFmNk5tv0LhavwOLQ==');
define('SECURE_AUTH_KEY',  '163sfcIkl9xvIcJ1z+6Ca+d/xEjbd3uZWD4mlN1E9ldwOGrvz1Bwt96pCdKIMb6Cpk2oqlbSYaBZ0goYc65U9A==');
define('LOGGED_IN_KEY',    '/cgTUSHIzO8oWfVE8Mh44XLvyQPbse66xVNkTnMxCdUBMk8u/0ggX2b+fKI7ZGQomiTKWsfIoDzSgymJgSme8Q==');
define('NONCE_KEY',        'blxFnPnTOAEvjhc1mgo+qz+BOn4JVW/UotEQaDRZyHG7AH+RDwdBZ/Q6dw3CflG35gzcaTsBpPRXNd/6aBRPzQ==');
define('AUTH_SALT',        'mvAKZSFovRuD9F92lMj6Cn4SqSuLK3K/XMJ/p43XMF1oMWrvT5MEmMHWvCHIgMNXJRxkbYCuJE2EcHB61Y67bQ==');
define('SECURE_AUTH_SALT', 'vdZ40l6ZHDa873A3jLo8Q6dRyoDqvdjaK3B6UhiQmcJozbDP3s369aTKN+YS0xAcPKp3F6SwskpNFZ8vDJL4ZA==');
define('LOGGED_IN_SALT',   'gdrl+/K/dVjnRz97Cs4vG9e8zoHjV1Dcx+ogHq4jIEDv4YeNFgh0BPDskbaPSpG3SbOQNXbusrmeRXvY6u4B8A==');
define('NONCE_SALT',       'y+6km1aideqdQmSO4IngKz0ydfFiWbcP1j5LYgHTJxK0wVT7Fk+y4TxGNza5eni+excPc7ILwn+9xAbRuN2g4Q==');

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
