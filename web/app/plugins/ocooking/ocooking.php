<?php
/**
 * Plugin Name:       oCooking
 * Description:       site de recettes
 * Version:           0.0.1
 * Author:            Kévin Foucret
 * Plugin URI : http://localhost:8000
 */

use oCooking\Plugin;

require __DIR__."/vendor/autoload.php"; 

define('OCOOKING_PLUGIN_ENTRY', __FILE__ );

// on instancie la class Plugin qui sera le cerveau des opé
$plugin = new oCooking\Plugin; 
$plugin->run(); 
 
