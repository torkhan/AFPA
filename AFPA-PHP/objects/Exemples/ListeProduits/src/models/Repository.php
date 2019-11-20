<?php

	namespace App\models;

	use App\models\Connect;

	class Repository {

		private $connect;

		/**
		 * Repository constructor.
		 */
		public function __construct() {
			$this->connect = new Connect();
		}

		/**
		 * @return array
		 */
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

		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		public function getArticleByID($id){
			$sql = "SELECT * FROM products WHERE id=:ids ORDER BY id";
			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->bindParam("ids", $id);
			$stmp->execute();
			$data = $stmp->fetchObject();
			return $data;
		}

		/**
		 * @param $args
		 *
		 * @return int
		 */
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

		/**
		 * @param $mot
		 */
		public function search($mot){

			$sql = "SELECT pr.id as id, pr.name as name, pr.description, pr.image, cat.name as namecat 
FROM products as pr, categories as cat 
WHERE pr.category_id = cat.id 
          AND pr.name LIKE :mot 
   OR pr.description LIKE :mot 
   OR pr.image LIKE :mot 
   OR cat.name LIKE :mot";

			$stmp = $this->connect::connect()->prepare($sql);
			$stmp->bindValue(":mot", '%'.$mot.'%');
			$stmp->execute();
			?>

            <div class="mt-5 p-2 row">
                <h2>Tableau des articles</h2>
            </div>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
					<?php
						while($row = $stmp->fetchObject()) {
					?>

                    <th><?php echo $row->id?></th>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->description?></td>
                    <td><?php echo $row->namecat?></td>
                    <td><?php echo $row->price?></td>
                    <td>
                        <img class="imgarticle" src="<?php echo '../../libs/img/'.$row->image?>" alt="<?php echo $row->image?>">
                    </td>
                    <td>
                        <a href="../../view/produit.php?id=<?php echo $row->id ?>">
                            <button class="btn btn-secondary">Détail</button>
                        </a>
                        <a href="../../view/modifierproduit.php?id=<?php echo $row->id ?>">
                            <button class="btn btn-warning">Modifier</button>
                        </a>
                        <a href="../../view/deleteproduit.php?id=<?php echo $row->id ?>">
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
		}


		/**
		 * @return \App\models\Connect
		 */
		public function getConnect(): Connect {
			return $this->connect;
		}

	}
