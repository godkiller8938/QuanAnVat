<?php 
	class controller_adv{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from tbl_ads");
			$total=$this->model->num_rows("select * from tbl_ads");
			if($total!=0)
			include "view/frontend/view_adv.php";
		}
	}
	new controller_adv();
 ?>