<?php
/**
 * Plugin Name:       Plugin take contact form
 * Plugin URI:        https://github.com/juanvs23/coltman-novelics-take-form
 * Description:       Captura del formulario
 * Version:           1.0.0
 * Author:            Juan Carlos Avila
 * Author URI:        https://coltman-desing.tk/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       coltman-novelics-take-form
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Need to store this variable before leaving this file
define( 'COLTMAN_VERSION', '1.0.0' );




require  __DIR__  . '/admin/admin.php';
require  __DIR__  . '/public/public.php';