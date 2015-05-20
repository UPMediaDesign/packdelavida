<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'upmediac_packdelavida');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'upmediac_pack');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'pack8039876.,');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`h>*-Dlf%-vps^(Ho1#6+btp;aS~Av-X.SSL!@=QhO.W}Il7oSJ}ly5*#0kk&t&O'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'jUh10h[66`VmD_l70Ho]-}GLMD->+7hnSqJl(Syxo>#H-cukWKF%a2X Jqaw]$ao'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '=a`QS39A} JL/utPuYPq0<(WHiR6!0glOeQ#uEF5Ef!L|zAXAgxV9NKH;r$]ZXbV'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'YNh-[#aT:J4!=Td4I7[3%G%N5@+B@k.<l%eXy7gK ~<l#U|F_ifdGeb0?{;|K_Cu'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '+Nc(:shE>s<w5t3fN/S#-(CckqC+5edq{OiZh(BIxEM3$l|Zl:&k]poSa<k],}e8'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '.7nZC9+Vlj%;5}kQOW;v|;ViO TirX8qNYU/^wxxu[BV|*kf`OFSH&{P.} pP8yU'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '0kHe^(V6X2J@|[:W#8D7+SczOk!ngJ^|y-}((MC6R)k [x{Umml@J/$SzM@pFO4+'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '!rR+55snxm>cLh%N7f4%JM3V-v1+}j6-o+eLQ]#**t$R+UL[oqFsLmrtEKuY*3<B'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

