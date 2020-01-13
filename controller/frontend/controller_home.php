<?php 
	class controller_home{
		public $model;
		public function __construct(){
			$this->model = new model();
			//---------
			
			//---------
			//phan trang
			//quy dinh so ban ghi tren 1 trang
			$record_per_page = 8;
			//tinh tong so ban ghi
			$total_food = $this->model->num_rows("select id_product from tbl_product where classify=0");
			$total_drink = $this->model->num_rows("select id_product from tbl_product where classify=1");
			//tinh xem co bao nhieu trang
			$num_page_food = ceil($total_food/$record_per_page);
			$num_page_drink = ceil($total_drink/$record_per_page);
			//lay bien p (la ban chi trang hien tai) truyen tu url
			$p_food = isset($_GET["p_food"])&&$_GET["p_food"]>0 ? $_GET["p_food"]:1;
			$p_drink = isset($_GET["p_drink"])&&$_GET["p_drink"]>0 ? $_GET["p_drink"]:1;
			settype($p_food, "int");
			settype($p_drink,"int");
			$from_food = ($p_food-1)*$record_per_page;
			$from_drink = ($p_drink-1)*$record_per_page;
			//thuc hien truy van sql co phan trang
			
			//---------
			//load view
			$product_food=$this->model->get_all("select * from tbl_product where classify=0 order by id_product desc limit $from_food,$record_per_page");
			$product_drink=$this->model->get_all("select * from tbl_product where classify=1 order by id_product desc limit $from_drink,$record_per_page");
			include "view/frontend/view_home.php";
		}
	}
	new controller_home();
 ?>