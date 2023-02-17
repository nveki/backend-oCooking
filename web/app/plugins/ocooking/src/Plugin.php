<?php 

namespace oCooking;

use oCooking\cpt\RecipePostType;
use oCooking\ct\IngredientTaxonomy;
use oCooking\ct\RecipeTypeTaxonomy;
use oCooking\role\ChiefRole;
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
        IngredientTaxonomy::register(); 
        RecipeTypeTaxonomy::register(); 
    }

    public function onPluginActivate()
    {
        ContributorRole::register();
        ChiefRole::register(); 
        RecipeTypeTaxonomy::register(); 
        wp_insert_term('Entrée', RecipeTypeTaxonomy::CT_SLUG);
        wp_insert_term('Plat Principal', RecipeTypeTaxonomy::CT_SLUG);
        wp_insert_term('Dessert', RecipeTypeTaxonomy::CT_SLUG);
        wp_insert_term('Soupe', RecipeTypeTaxonomy::CT_SLUG);
        wp_insert_term('Boisson/Cocktail', RecipeTypeTaxonomy::CT_SLUG);
    }

    public function onPluginDeactivate()
    {
        ContributorRole::unregister(); 
        ChiefRole::unregister(); 
    }

}