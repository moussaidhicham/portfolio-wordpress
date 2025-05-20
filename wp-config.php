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
define( 'DB_NAME', 'portfolio_2' );

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
define( 'AUTH_KEY',         '.y:),L=:~~6Om&]IrtH#omkws8n6Ve)p#*.L|av3{&ITHzHj&gG>x^D}!`3^M[=z' );
define( 'SECURE_AUTH_KEY',  '@.%^4!ucfW2jtmuM{1Sc?G`=adv*MdeWBWcnVX!xjF=U7aE]P}o[<DcECfV: fC|' );
define( 'LOGGED_IN_KEY',    'He,u8K]8u@en0jJfSwN>qTqKUZ9b@53e;&#_i<gut$h$xZJ^iaea;3XbD@TZa@@)' );
define( 'NONCE_KEY',        '<K?~/rE~-3`0!BHhu$m[E&qE3BV$~2%)`^:l.($|*!Ke9W+& 19VH2KZZnjD%uc8' );
define( 'AUTH_SALT',        '*fgkIQDG&W81$<66l4aAIcLJ_hyJ4KB&*9V~+4Zv;KcgVh?HtH:.bQ(u`|k<iv2O' );
define( 'SECURE_AUTH_SALT', '=ZS!xK=vIhX`b2<*Yz`<e.v$[>X&S?=jK|S(#c%Sq`?l_((z[|8s]nUj8={X U:r' );
define( 'LOGGED_IN_SALT',   '1b#t!h+NLCqP&NKj[_AA2wBv0r,&oW`SC9?^+BbSXrL3)zefYTy+JZngbg(PyAme' );
define( 'NONCE_SALT',       'xKkm0?%t rsOi(d$Msrr!=9fM_xxZz(`PeOJA}?ai<.v +3Mr)p9kgF/1KgURNL?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'moussaid_';

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
