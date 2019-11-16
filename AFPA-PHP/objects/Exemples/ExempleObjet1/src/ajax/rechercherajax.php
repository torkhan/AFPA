<?php
	require '../../vendor/autoload.php';
	require '../../src/models/Repository.php';
	require '../../src/models/Connect.php';
	require '../../config/config.php';

	use App\models\Connect;
	use App\models\Repository;

	if(isset($_POST['valRecherche'])){
		$rech = trim($_POST['valRecherche']);
	}else{
		$rech = "";
	}

	$rep = new Repository();
	$rep->search($rech);






