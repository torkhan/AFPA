<?php
	require 'vendor/autoload.php';

?>

<section>
    <div>
        <h1>Page products</h1>

		<?php

			$articles = array(
				'id_articles' => 1,
				'nom_article' => "Article 1",
				'description_article' => "Description article 1",
				'price_ht_article' => 20.35,
				'rate_tva_article' => 20
			);

			foreach ($articles as $key => $produit){
				echo '<p>'.$key.' : '.$produit.'</p>';
			}
				?>
                <a href="<?php echo $router->generate('showDetailsProduct')?>?id=<?php echo $articles['id_articles']; ?>">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
                </a>
				<?php

		?>
    </div>
</section>
