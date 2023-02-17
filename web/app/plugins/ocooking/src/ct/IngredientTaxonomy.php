<?php 

namespace oCooking\ct;

use oCooking\cpt\RecipePostType;

class IngredientTaxonomy{

  public static function register(){

    register_taxonomy(
        'ingredients', // slug name de la taxonomie
        [RecipePostType::CPT_SLUG],  // Post(s) Type (natif) ou CPT(s) lié(s) à cette taxonomie
        [
          'labels' => [ // intitulés de ce CT, dans le BO
            'name' => 'Ingrédients',
            'new_item_name' => 'Nouvel Ingrédient'
          ],
          'public' => true,
          'show_in_rest' => true
        ]
      );
    } 
}


?> 
