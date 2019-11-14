<?php

	namespace App\models;

	/**
	 * Class Article
	 */
	class Article {

		private $name;
		private $description;
		private $price;

		public function __construct($name,$description, $price) {
			$this->name = $name;
			$this->description = $description;
			$this->price = $price;
		}

		/**
		 * @return string
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @param mixed $name
		 */
		public function setName( $name ) {
			$this->name = $name;
		}

		/**
		 * @return mixed
		 */
		public function getPrice() {
			return $this->price;
		}

		/**
		 * @param mixed $price
		 */
		public function setPrice( $price ) {
			$this->price = $price;
		}

		/**
		 * @return mixed
		 */
		public function getQuantity() {
			return $this->quantity;
		}

		/**
		 * @param mixed $quantity
		 */
		public function setQuantity( $quantity ) {
			$this->quantity = $quantity;
		}


	}
