<?php 

namespace oCooking\ct; 

use oCooking\cpt\RecipePostType;

class RecipeTypeTaxonomy{

    const CT_SLUG = 'recipe-type'; 
  public static function register(){
    

    register_taxonomy(
        self::CT_SLUG, // slug name de la taxonomie
        [RecipePostType::CPT_SLUG],  // Post(s) Type (natif) ou CPT(s) lié(s) à cette taxonomie
        [
          'labels' => [ // intitulés de ce CT, dans le BO
            'name' => 'Type de recette',
            'new_item_name' => 'Nouveau Type de Recette'
          ],
          'public' => true,
          'show_in_rest' => true
        ]
      );
    } 
}


?> 
