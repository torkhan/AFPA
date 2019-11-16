<?php

	require '../vendor/autoload.php';
	require '../src/models/Repository.php';
	require '../src/models/Connect.php';
	require '../config/config.php';

	use App\models\Connect;
	use App\models\Repository;

	$rep = new Repository();

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = "";
	}

	$rep->deleteArticleByID($id);



