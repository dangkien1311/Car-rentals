<?php 
	class controller {
		
		public $model;

		public function __construct(){
			$this->model = new database('heroku_df919f4b7eb8c7e');
		}
		
	}
 ?>