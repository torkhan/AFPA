<?php
	namespace App\models;

	use PDO;
	use Exception;

	class Connect {

		/**
		 * @return PDO
		 */
		static public function connect(){

			try{
				$bdd = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8',LOGINHOST, LOGINPASS);
				return $bdd;
			}catch (Exception $e){
				echo 'Erreur lors de la connexion : '.$e->getMessage();
			}
		}
	}


