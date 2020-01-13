<?php 
	include "../../config.php";
	include "../../model/model.php";
	class controller_detail_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id_product=isset($_GET["id_product"])?$_GET["id_product"]:0;
			settype($id_product, "int");
			$arr=$this->model->get_all("select * from tbl_product where id_product=$id_product");
			include "../../view/frontend/view_detail_product.php";
		}
	}
	new controller_detail_product();
 ?>