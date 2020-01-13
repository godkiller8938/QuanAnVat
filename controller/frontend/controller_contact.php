<?php 
	class controller_contact{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from tbl_contact");
			include "view/frontend/view_contact.php";
		}
	}
	new controller_contact();
 ?>