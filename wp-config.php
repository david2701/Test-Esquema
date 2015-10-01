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
define('DB_NAME', 'desarrol_test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'desarrol_test');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'test520');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'W]^P:9gG_^{&-|PQ!r6yNEDw9~FK3I^#%=+TZ/_%Y.U |]j|VM@+k;{K4( -}_g ');
define('SECURE_AUTH_KEY', 'j#F(O0Pse9|vGGF61T!8|*O`h^3c@IB`~^iy]NQh1IK r+(/J/Xc+s(~6JdY`$0d');
define('LOGGED_IN_KEY', 'PK DyB4$CDp|H(v[<^+N?l)TG2!!vm2aPEZ~Q3yAl&6V8@E+Mrjwdw+ylHFFm///');
define('NONCE_KEY', 'duVz#=h$GNOWd{|/hj>~6E`+)_OB[xDxm2],Lor^[lP-+VIJVfb0y!|u,$]jf1sd');
define('AUTH_SALT', 't:RZ~eu2R1Cu60^fx}$3LN>,+&7E2{e+R5f|n7VraT%hj>e@$NG~AQ|*mVh3%Tww');
define('SECURE_AUTH_SALT', 'J!jueI`t}AMS|~%Iom8;a1qn,i^vS{w?ZXFbT90KBY`q45|sb7W4wyza5j%S-PI4');
define('LOGGED_IN_SALT', '|c*Wd2LkPIcmdu;qe9Xjo74{kS Ep#TX3lbtUXBE5y`F1O]xP4dlx z0MY0LZ||C');
define('NONCE_SALT', '$+WYNoTA|wK5 Q7#/^$hgEI-Tbb RIZ{Gr*u`{5mt]0nzW7d}u/0P|&-H8s7)IlF');

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

