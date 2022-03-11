<?php
/*
Plugin Name: Calculadora de Fecha de Concepción - Ser Madre
Description: Este plugin muestra un formulario para calcular la fecha de concepción. Utilice el shortcode [serma-baby-conception-wp]
Version: 1.0.0
Requires at least: 5.1
Requires PHP: 7.2
Author: Ser Madre
Developer: Roiner Adrianza
Author URI: http://sermadre.com
License: GPL v3
*/

if (!defined('ABSPATH')) {
    exit;
}
//Exit if accessed directly

define('SERMA_BABY_CONCEPTION_FILE', __FILE__);
define('SERMA_BABY_CONCEPTION', dirname(SERMA_BABY_CONCEPTION_FILE));
define('SERMA_BABY_CONCEPTION_URL', plugin_dir_url(SERMA_BABY_CONCEPTION_FILE));
define('SERMA_BABY_CONCEPTION_DB_VERSION', '1.0');
define('SERMA_BABY_CONCEPTION_VERSION', '1.0.0');

define('SERMA_BABY_CONCEPTION_ENV', false);

if (SERMA_BABY_CONCEPTION_ENV) {
    @ini_set('display_errors', 1);
}

require_once SERMA_BABY_CONCEPTION . "/Controller/Main.php";
