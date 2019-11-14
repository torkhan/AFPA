<?php

	namespace App\models;
	use PDO;

	class Repository {

		private $connect;

		public function __construct($connect) {
			$this->connect = $connect;
		}

		public function getAllArticles(){
			$tabArt = array();
			$sql = "SELECT * FROM products ORDER BY id";
			$stmp = $this->getConnect()->prepare($sql);
			$stmp->execute();
			while($row = $stmp->fetchObject()) {
				array_push($tabArt, $row);
			}
			return $tabArt;
		}


		public function getArticleByID($id){
			$tabArt = array();
			$sql = "SELECT * FROM products WHERE id=:ids ORDER BY id";
			$stmp = $this->getConnect()->prepare($sql);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->fetchObject();
			return $data;
		}

		public function updateArticleByID($id, $nom, $descrip, $prix, $img){
			$tabArt = array();
			$sql = "UPDATE products SET name=:nom, description=:descrip, price=:prix, image=:img WHERE id=:ids";
			$stmp = $this->getConnect()->prepare($sql);
			$stmp->bindParam("nom", $nom);
			$stmp->bindParam("descrip", $descrip);
			$stmp->bindParam("prix", $prix);
			$stmp->bindParam("img", $img);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->fetchObject();
			return $data;
		}

		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		public function deleteArticleByID($id){
			$tabArt = array();
			$sql = "DELETE FROM products WHERE id=:ids ";
			$stmp = $this->getConnect()->prepare($sql);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->rowCount();

			if($data == 1){
				header("Location: ../index.php");
			}else{
				header("Location: 404.php");
			}
		}

		/**
		 * @return mixed
		 */
		public function getConnect() {
			return $this->connect;
		}



	}
