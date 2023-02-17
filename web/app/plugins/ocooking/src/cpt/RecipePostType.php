<?php
namespace oCooking\cpt; 

class RecipePostType

{
    const CPT_SLUG = 'recipe'; 

  
      // cette methode va nous permettre de declarer la création de notre customPostType
      public static function register(){
  
  
        register_post_type(self::CPT_SLUG, [
          'labels' => [ // intitulés de ce CPT, dans le BO
            'name' => 'Recette',
            'all_items' => 'Toutes les Recettes',
            'singular_name' => 'Recette',
            'add_new_item' => 'Ajouter une nouvelle recette',
            'edit_name' => 'Modifier une recette',
            'menu_name' => 'Recettes'
          ],
          'public' => true,
          'show_in_rest' => true, // accessible dans l'API (+tard)
          'has_archive' => true, // les posts liés à ce CPT sont archivables
          'supports' => [ // features de ce CPT
            'title', // titre
            'editor', // active le WYSIWYG de WordPress
            'author', // les posts de ce CPT sont liés à un Auteur
            'thumbnail', // active les featured image
            'revisions', // active l'historique de versions
            'custom-fields' , // active les champs personnalisés (+tard)
            'tags', 
            'excerpt',
            'comments '// autorise les commentaires
          ],

          'capability_type'=> self::CPT_SLUG, // genere automatique le nouveau nom des capabilities
          'menu_position' => 0, // position dans le BO de WP
          'map_meta_cap'=>true, 
          'menu_icon' => 'dashicons-food' // icône personnalisable https://developer.wordpress.org/resource/dashicons/
        
        ]);
      }

  }
  
  ?>
