
## WORDPRESS

// Création de la template personnalisée:

<?php
/*
* Template name: portails
*/
// rappel de header
get_header();
?>

<?php
/*
*Template name: contact
*/

get_header();
?>


<?php
// rappel de footer
get_footer();

?>


<!DOCTYPE html>
// WP utilise la function pour detecter la langue du site
<html <?php language_attributes(); ?> class="no-js">
<head>
	// utilisation de UTF-8 en fonction de langue du site
	<meta charset="<?php bloginfo( 'charset' ); ?>">


	// lien vers les images 
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/themify-f1380-256-128x128.png" type="image/x-icon">


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/et-line-font-plugin/style.css">


	// liens vers les pages 
	<div class="navbar-brand">
	<a href="<?php echo esc_url(home_url("/")); ?>" class="navbar-logo">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logookner-300x60.png" alt="Site web">
</a>
</div>


<div class="dropdown-menu">
	<a class="dropdown-item" href="<?php echo esc_url(home_url("/isolation")); ?>">Isolation</a>
	<a class="dropdown-item" href="<?php echo esc_url(home_url("/extension-bois")); ?>">Extension bois</a>
	<a class="dropdown-item" href="<?php echo esc_url(home_url("/terrasse")); ?>">Terrasses</a>
</div>



#### Créer une requête SQL

Etape 1:

Créer dans votre dossier wp-content/themes/<votre_theme> , un fichier « produits.php » qui contient:



<?php
/*
Template Name: produits
*/
// Version 2016-09-29
get_header(); // On affiche l'en-tête du thème WordPress
?>

<?php
global $wpdb; // On se connecte à la base de données du site
$produits = $wpdb->get_results("
SELECT reference,
description,
prix_vente
FROM goods;
");
// print_r($produits);
?>

<?php
echo "<table>";
	echo "<tr>";
		echo "<th>Référence</th>";
		echo "<th>Description</th>";
		echo "<th>Fabricant</th>";
		echo "<th>Prix H.T</th>";
	echo "</tr>";
	foreach($produits as $produit)
	{
		echo "<tr>";
			echo "<td>".$produit->reference."</td>";
			echo "<td>".$produit->description."</td>";
			echo "<td>".$produit->fabricant."</td>";
			echo "<td style=text-align:right>".$produit->prix_vente."</td>";
		echo "</tr>";
	}
echo "</table>";
?>

<?php get_footer(); // On affiche de pied de page du thème
?>


Etape 2:

Dans l’interface de WordPress, créez une page vide, nommée par exemple « Les produits », en indiquant simplement le modèle correspondant au « Template Name » indiqué dans le script PHP, à savoir dans cet exemple : « produits ».



N’oubliez pas de sauvegarder la page…



Puis il ne vous reste qu’à tester le permalien:












