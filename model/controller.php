<?php 
	class controller {
		
		public $model;

		public function __construct(){
			$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			$this->model = new database(substr($cleardb_url["path"],1));
		}
		
	}
 ?>