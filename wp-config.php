<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'caucathanhnga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qe(W9-s8#1|iW1It5G(|.#ahXm|S)~*]#N%RDFXs2h~F.sSS.JA%N|+}.-u/e|!U');
define('SECURE_AUTH_KEY',  'JkS7{}wml+hA +PU2<3q#??XHj#jAS}:Y<NqF0j+F6:-~q. T@`:|MW+=ze3m[kv');
define('LOGGED_IN_KEY',    'BfN.;+;bI=?}sDv+4b~q-8I]2n>Gn&3|wY-tH:cUD)wW6N{)*ri5V+Bd+SdNPO[Q');
define('NONCE_KEY',        '8s<*2C)]p_LRi3_KxOLh_7vF!}mUl]S+:d&lNs#ULca.P}C3;]}7(i;a7Ey3*gOH');
define('AUTH_SALT',        ']eRw9|UG,GjS4o.FE|Q+_]^}O7zarJ+UrVp0|cUTw[abBD?y-Pn+M@$y1v;^-W#&');
define('SECURE_AUTH_SALT', 'obljlpfd|}j0l|YkhM+scu|m9LX~+|5|r9.aUWCwkQNGIP#l=FSqocvGmR|tuq<J');
define('LOGGED_IN_SALT',   ']]3myzfZ5>2Y%npvO=i%LGPj )^.hYx)QF6et5X~,K1hU%I%eQOs6e5iNTMr>LA@');
define('NONCE_SALT',       '>}`_O]!_jdo=;oGYIb}&-,H4,:+m9,F_FgIvAy5E#b*d0qU*j0DwK*kZ,!WeOD++');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
