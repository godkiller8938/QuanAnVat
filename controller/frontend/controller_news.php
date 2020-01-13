<?php 
	class controller_news{
		public $model;
		public function __construct(){
			$this->model= new model();
			$id=isset($_GET["id"])?$_GET["id"]:0;
			if($id!=0)
			{
				$arr=$this->model->get_all("select * from tbl_news where id_news=$id");
				include "view/frontend/view_news.php";
			}
			else{
				$arr=$this->model->get_all("select * from tbl_news order by id_news desc limit 0,4");
				include "view/frontend/view_news.php";
			}
		}
	}
	new controller_news();
 ?>