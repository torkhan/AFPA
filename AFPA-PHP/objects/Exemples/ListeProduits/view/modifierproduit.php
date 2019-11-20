<?php

	use App\models\Connect;
	use App\models\Repository;
	use App\models\Form;

	require '../src/models/Repository.php';
	require '../src/models/Connect.php';
	require '../src/models/Form.php';
	require '../view/elements/head.php';
	require '../config/config.php';

	//var_dump($_GET);
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = "";
	}

	$rep = new Repository();
	$data = $rep->getArticleByID($id);
	$form = new Form();

?>
    <div class="mt-5">
        <h3>Modifier l'article</h3>
    </div>
    <form method="get" action="modifaction.php" >
        <div class="d-none">
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control" value="<?php echo $data->id; ?>">
        </div>
        <div class="form-group">
            <label for="nomarticle">Nom</label>
            <input type="text" name="nomarticle" class="form-control" id="nomarticle" value="<?php echo $data->name; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" value="<?php echo $data->description; ?>">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" class="form-control" id="prix" value="<?php echo $data->price; ?>">
        </div>
        <p>Choisissez le fichier</p>
<?php echo $form->createUplaod(); ?>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Modifier</button>

            <button type="button" class="btn btn-danger"><a href="productListe.php">Abondonner</a></button>
        </div>
    </form>

<?php

	require '../view/elements/footer.php';
