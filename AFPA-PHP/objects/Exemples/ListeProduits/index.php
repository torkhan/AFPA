<?php
	require 'vendor/autoload.php';
	require 'view/elements/head.php';
?>
<div class="mt-5">
    <h1>Tableau de bord</h1>
    <hr>
</div>
<div class="index">
    <ul>
        <a href="view/productListe.php"><li>Liste des produits</li></a>
        <a href="view/recherche.php"><li>Recherche de produit</li>
    </ul>
</div>

<?php
	require 'view/elements/footer.php';
?>
