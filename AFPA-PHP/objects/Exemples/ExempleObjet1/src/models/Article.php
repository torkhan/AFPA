<?php

	namespace App\models;

	/**
	 * Class Article
	 */
	class Article {

		private $id;
		private $name;
		private $description;
		private $price;
		private $category;
		private $image;

		public function __construct() {
			$this->category = 1;
		}

		/**
		 * @return string
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @param $name
		 *
		 * @return string
		 */
		public function setName( $name ): void {
			$this->name = $name;
		}

		/**
		 * @return string
		 */
		public function getDescription() {
			return $this->description;
		}

		/**
		 * @param $description
		 *
		 * @return void
		 */
		public function setDescription( $description ): void {
			$this->description = $description;
		}

		/**
		 * @return float
		 */
		public function getPrice() {
			return $this->price;
		}

		/**
		 * @param $price
		 *
		 * @return void
		 */
		public function setPrice( $price ): void {
			$this->price = $price;
		}

		/**
		 * @return int
		 */
		public function getCategory(): int {
			return $this->category;
		}

		/**
		 * @param int $category
		 *
		 * @return int
		 */
		public function setCategory( int $category ): void {
			$this->category = $category;
		}

		/**
		 * @return string
		 */
		public function getImage() {
			return $this->image;
		}

		/**
		 * @param $image
		 *
		 * @return void
		 */
		public function setImage( $image ): void {
			$this->image = $image;
		}

		/**
		 * @return integer
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * @param mixed $id
		 */
		public function setId( $id ): void {
			$this->id = $id;
		}

		public function addArticle($id, $nom, $description, $price, $cat, $image){
			$art = array($nom, $description, $price, $cat, $image, $id);
			return $art;

		}

	}
