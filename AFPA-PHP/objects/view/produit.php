<?php

	require '../src/models/Repository.php';
	require '../src/models/Connect.php';
	require '../view/elements/head.php';
	require '../config/config.php';

	use App\models\Connect;
	use App\models\Repository;

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = "";
	}

	$rep = new Repository();
	$data = $rep->getArticleByID($id);

?>
<div class="mt-5">
	<h3>Détail de l'article</h3>
</div>
<div class="mt-5">
	<h2>Name : <?php echo $data->name; ?></h2>
	<p>Description :<?php echo $data->description; ?></p>
	<p>Prix : <?php echo $data->price; ?> euros</p>
	<p>Image : <?php echo $data->image; ?></p>
	<button class="btn btn-success">
		<a href="../index.php">Retours</a>
	</button>
</div>
<?php
	require '../view/elements/footer.php';
?>
