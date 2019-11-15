<?php

	namespace App\models;

	class Contact extends Form {

		private $contact;

		/**
		 * Contact constructor.
		 */
		public function __construct(  ) {
			parent::__construct();
			$this->contact = new Form();
		}


		public function getTextArea($id,$row,$label){
			return '<div class="form-group">
    <label for="'.$id.'">'.$label.'</label>
    <textarea class="form-control" id="'.$id.'" rows="'.$row.'" ></textarea></div>';
		}


	}
