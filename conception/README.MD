#Conception de al partie Backend de O'Cooking

## Analyse du Product Backlog

On peut considérer sans se tromper que l'application doit être accéssible à partir de trois rôles distincts

- utilisateur  (ne nécessite pas d'inscription)
- contributeur
- cuisinier

L'entité centrale de cette application sera les Recettes. On peut donc imaginer un Custom Post Type pour Wordpress Recette

Pour permettre le tri en fonction des ingrédient on peut imaginer une Custom Taxonomy Ingrédients

Pour permettre le tri en fonction des types de recettes on peut imaginer une Custom Taxonomy RecetteType

## Conclusion de l'analyse

On va devoir créer : 

### 3 Custom Roles

- UserRole
- ContributorRole
- ChiefRole

### 1 Custom Post Type

- RecipePostType


### 2 Custom Taxonomy

- IngredientsTaxonomy
- RecipeTypeTaxonomy
