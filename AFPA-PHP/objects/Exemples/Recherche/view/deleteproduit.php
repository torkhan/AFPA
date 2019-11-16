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

	$data = $rep->deleteArticleByID($id);



