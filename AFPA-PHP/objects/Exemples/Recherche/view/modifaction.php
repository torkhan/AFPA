<?php
	require '../vendor/autoload.php';
	require '../src/models/Repository.php';
	require '../config/config.php';
	use App\models\Repository;

	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}else{
		$id = "";
	}

	if(isset($_GET["nomarticle"])){
		$nomarticle = $_GET["nomarticle"];
	}else{
		$nomarticle = "";
	}

	if(isset($_GET["description"])){
		$description = $_GET["description"];
	}else{
		$description = "";
	}

	if(isset($_GET["prix"])){
		$prix = $_GET["prix"];
	}else{
		$prix = "";
	}

	if(isset($_GET["filename"])){
		$filename = $_GET["filename"];
	}else{
		$filename = "";
	}

	$tabargs = array(
		"nom" => $nomarticle,
		"descript" => $description,
		"prix" => $prix,
		"file" => $filename,
		"ids" => $id
	);

	$rep = new Repository();
	$rep->copyUpdateFile();
	$data = $rep->updateArticleByID($tabargs);
	if($data == 1){
		header('Location: ../index.php');
	}else{
		echo "L'article n'a pas été supprimé.";
	}
