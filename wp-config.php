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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressadmin');

/** MySQL database password */
define('DB_PASSWORD', '@Anatta_Design05');

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
define('AUTH_KEY',         'BVTY!M#1O&`lOITSk73:|G]B]lc>f?[gy(A.=@U7x=v/(>{bgAw/NsmAa`]J|TX*');
define('SECURE_AUTH_KEY',  'w/g)GM2,3hv}+Nr%kXT@u8d6+*HTuvwuS_)6afbYn!&/.TYGstmy8gk>GqqgM._E');
define('LOGGED_IN_KEY',    'lA+5s? 7vq(f~&Dd<xdY4CWM?CBy971<#TL[~UIRZt/r#?!IIuy?QqdQaQ@[mmfh');
define('NONCE_KEY',        'wZb,Nm-qya#oS1;jG5<8Td:{mG$df1N1IFFU#|R,3{zp]w!}{,s*}0Wod[LE%Q;n');
define('AUTH_SALT',        'b^9hlx^+@V%cNnmT[yDLZ97vs^.?b(-<q0Pn}F+G.lBh,4t8lqv9$DZUY0*1dO[F');
define('SECURE_AUTH_SALT', 'RPk reV8@s3GW81B,i,^DvD>?0jzR`#(,U6~22M7hYW>3R1Jh]}x;0^*Q>98D=Ib');
define('LOGGED_IN_SALT',   '|V*QAzuT6z9,d+f_TgzT4g}uVHBO~8(qdsf/$xML2 xgmAqk1G=U>QtE1GMR@P5/');
define('NONCE_SALT',       'teonUXc:( drxyRh/}wyFI3HoX}fw8!ZC3#$^a2]3hhZ?:3ed6us]*2B-uPUtX;@');

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
