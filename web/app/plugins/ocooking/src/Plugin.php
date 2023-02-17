<?php 

namespace oCooking;

use oCooking\cpt\RecipePostType;
use oCooking\role\ContributorRole;

class Plugin{

    public function run()
    {
        // cette méthode est la première appelé dans l'exe du PLugin . elle va référencer tous nos hook
        add_action('init', [$this, 'onInit']); 
        register_activation_hook(OCOOKING_PLUGIN_ENTRY, [$this, 'onPluginActivate']);
        register_deactivation_hook(OCOOKING_PLUGIN_ENTRY, [$this, 'onPluginDeactivate']); 

    }

    public function onInit()
    {
        // fonction executé lors du hook init (chargement de la page WP)
        RecipePostType::register(); 
    }

    public function onPluginActivate()
    {
        ContributorRole::register();
    }
    public function onPluginDeactivate()
    {
    ContributorRole::unregister(); 
    }

}