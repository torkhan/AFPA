<?php
	namespace App\models;

	class ObjectManager {

		private $article;

		public function __construct(Article $article){
			$this->article = $article;
		}
		public function showArticles(Article $article){
			return array(
				$this->article->getName(),
				$this->article->getPrice(),
				$this->article->getQuantity());
		}
	}
