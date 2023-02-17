<?php

namespace oCooking\role;

class ContributorRole
{

    const ROLE_SLUG = "contributors";
    
    public static function register()
    {

        /**
         * On créé une variable contenant les capabilities de notre role (c'est a dire quelles actions il aura le droit de mener sur nos données)
         * https://wordpress.org/support/article/roles-and-capabilities/
         */
        $capabilities = [
            'edit_posts' => true,
            'manage_categories' => true,
            "read" => true // on donne l'accès a la lecture aux clients*/
        ];

        add_role(self::ROLE_SLUG, "Contributeur", $capabilities);
    }

    //A la desactivation du plugin on supprime le role Dev
    public static function unregister()
    {
        remove_role(self::ROLE_SLUG);
    }
}