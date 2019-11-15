<?php
	require 'vendor/autoload.php';
	use App\models\Connect;
	use App\models\Repository;
	use App\models\Article;

	require 'src/models/Connect.php';
	require 'src/models/Article.php';
	require 'src/models/ObjectManager.php';
	require 'src/models/Repository.php';
	require 'view/elements/head.php';
	require 'config/config.php';

	$rep = new Repository();
	$articles = $rep->getAllArticles();
?>
<div class="mt-5">
    <h2>Tableau des articles</h2>
</div>
<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
		<?php
			foreach ($articles as $art){
		?>

        <th><?php echo $art->id?></a></th>
        <td><?php echo $art->name?></td>
        <td><?php echo $art->description?></td>
        <td><?php echo $art->price?></td>
        <td>
            <img class="imgarticle" src="<?php echo 'libs/img/'.$art->image?>" alt="<?php echo $art->image?>">
        </td>
        <td>
            <a href="view/produit.php?id=<?php echo $art->id ?>">
                <button class="btn btn-secondary">Détail</button>
            </a>
            <a href="view/modifierproduit.php?id=<?php echo $art->id ?>">
                <button class="btn btn-warning">Modifier</button>
            </a>
            <a href="view/deleteproduit.php?id=<?php echo $art->id ?>">
                <button class="btn btn-danger">Supprimer</button>
            </a>
        </td>
    </tr>
	<?php
		}
	?>
    </tbody>
</table>

<?php
	require 'view/elements/footer.php';
?>
