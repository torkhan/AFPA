<?php

	namespace App\models;

	use App\models\Connect;
	use PDO;

	class Repository {

		private $connect;

		public function __construct() {
			$this->connect = new Connect();
		}

		public function getAllArticles(){

			$tabArt = array();
			$sql = "SELECT * FROM products ORDER BY id";
			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->execute();
			while($row = $stmp->fetchObject()) {
				array_push($tabArt, $row);
			}
			return $tabArt;
		}


		public function getArticleByID($id){
			$tabArt = array();
			$sql = "SELECT * FROM products WHERE id=:ids ORDER BY id";
			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->fetchObject();
			return $data;
		}

		public function updateArticleByID($args){

			$sql = "UPDATE products SET name=:nom, description=:descript, price=:prix, category_id=1, image=:file WHERE id=:ids";
			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->execute($args);
			$data = $stmp->rowCount();
			return $data;

		}

		/**
		 * @param                     $id
		 *
		 * @return mixed
		 */
		public function deleteArticleByID($id){
			$tabArt = array();
			$sql = "DELETE FROM products WHERE id=:ids ";
			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->rowCount();

			if($data == 1){
				header("Location: ../index.php");
			}else{
				header("Location: 404.php");
			}
		}

		public function copyUpdateFile(){
			move_uploaded_file($_FILES["filename"]['name'], "../libs/img/".$_FILES["filename"]['name']);
		}

		/**
		 * @return \App\models\Connect
		 */
		public function getConnect(): \App\models\Connect {
			return $this->connect;
		}

	}
