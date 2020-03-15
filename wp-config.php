<?php

require 'aws.php';

define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', $result->username );

/** MySQL database password */
define( 'DB_PASSWORD', $result->password );

/** MySQL hostname */
define( 'DB_HOST', $result->host );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a9R_nRk;D`,]<yv=lX4Od<1fC.%Kd2Ox{)O(2J|B.f]tmk:nK<tWa ;oZr,:h-bV' );
define( 'SECURE_AUTH_KEY',  't`VJ@gSk7/`{MriA7a2>|hPU6R;;GvIyiknI*R(P|D#XGDM.796Sf7*LiT?CL4P=' );
define( 'LOGGED_IN_KEY',    'y{]bVjHhkK@ @fKhcX^LFusP%[I@YfH./IjbPrBud-;Amn6N8yCD[cY)Z[0#4BtK' );
define( 'NONCE_KEY',        '$jwxatSg6V(x1K.|Sm^_2]|Oo)U2 <iC4|4D*i^+VlQ{7;8AAb$?k$3V,?nn,(pr' );
define( 'AUTH_SALT',        't.{D[fZ_(ztk_g6LPLNvSnSNT(xh&o1fLCkT*},}Ni#]=7q4?ZIMP0+U(24G.kO!' );
define( 'SECURE_AUTH_SALT', 'Ew2[kJ!Ds9(Krv!99&${qq EU=>?eU$3H}}Dv)5li%Z3 &+g^e0GH)>hTzKi^5-h' );
define( 'LOGGED_IN_SALT',   'xAGc))YUiL0wfTdV29Q|NrLJ8X>#cBy;<(SWucDaZ8dCq8_*2U#ArK/9DJU_JE)B' );
define( 'NONCE_SALT',       'Yq d(60e|9(JOSr>Xek;!di:95^=Nj.W8L`#gn TMTsGaGXA?&z#BYlY/]cmkWe{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
