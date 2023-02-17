<?php

namespace oCooking\role;

class ChiefRole
{

    const ROLE_SLUG = "chiefs";
    
    public static function register()
    {

        /**
         * On créé une variable contenant les capabilities de notre role (c'est a dire quelles actions il aura le droit de mener sur nos données)
         * https://wordpress.org/support/article/roles-and-capabilities/
         */
        $capabilities = [
            'edit_recipes' => true,
            'edit_published_recipes'=>true, 
            'publish_recipes'=> true,
            'delete_recipes'=> true, 
            'manage_categories' => true, 
            'upload_files'=>true,
            "read" => true // on donne l'accès a la lecture aux clients*/
        ];

        add_role(self::ROLE_SLUG, "Chef", $capabilities);
    }

    //A la desactivation du plugin on supprime le role Dev
    public static function unregister()
    {
        remove_role(self::ROLE_SLUG);
    }
}