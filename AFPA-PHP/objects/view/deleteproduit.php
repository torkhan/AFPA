<?php

	use App\models\Connect;
	use App\models\Repository;

	require '../src/models/Repository.php';
	require '../src/models/Connect.php';
	require '../config/config.php';


	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = "";
	}

	$con = new Connect();
	$connection = $con::connect();

	$rep = new Repository($connection);
	$data = $rep->deleteArticleByID($id);



