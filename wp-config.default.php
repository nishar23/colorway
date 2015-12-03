<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
 echo "1<br>";
 define('DB_NAME', 'testing');
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
define('AUTH_KEY',         'h!am/NVBl1/2vc%e_O=#qkeMoWQ*uyyH3K0MLC#q{4lh~>-kRZo+=tQ{9q6@VC?E');
define('SECURE_AUTH_KEY',  ']Q{gR[IKCpJ=uQG&(n1dIk>Q]bFI(Z5Em?%rw5kg)rso0oMq?EL7tP~9j=djw+?2');
define('LOGGED_IN_KEY',    'A)t4v55e~jF>}xpeOP-<apxN!c+-nRU?hw6FX-P<nAn@`Dhb=>ZKAri^e~aLM!-y');
define('NONCE_KEY',        'P?:hiAJ*,X>(lXei_H,f-x4Y4Mv!uv10F~vE_KLyCddA!9tRsrkA4OD<=Q_mS<-^');
define('AUTH_SALT',        'D{f67/D1(UcvG&#]-*I(4p}N7pbVXh$y6Zz)p#xUAGRUHAcxt^qq[|Pp,K8jGBxa');
define('SECURE_AUTH_SALT', 'DZp9_Ay2~|iZzfgA5Z@sI r4FAb%;yNit$.5,`P/{XK%&+Czb^w!+v%WZy:SJ3Q-');
define('LOGGED_IN_SALT',   '35b)?$fZRMlQ.JE;o.bssQ?1n7Kwlp@-s7$dBL*K+)n/za-^k%ToPW6>_$,L7gp2');
define('NONCE_SALT',       'wM@=mTTB+dbU,3NMv4f[!-e^+8+H3(Sq*YrkX$#ABOw}MR4TJ>l!6|W:+rBr.{zj');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
/**
 * Increase memory limit. 
 */
define('WP_MEMORY_LIMIT', '64M');

?>