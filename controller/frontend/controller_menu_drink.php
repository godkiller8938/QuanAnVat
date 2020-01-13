<?php 
	class controller_menu_drink{
		public $model;
		public function __construct(){
			$this->model=new model();
			$category_drink=$this->model->get_all("select tbl_category_product.id_category,tbl_category_product.category_name from tbl_category_product, tbl_product where tbl_category_product.id_category=tbl_product.id_category and tbl_product.classify=1 GROUP BY tbl_product.id_category");
			$id_category=isset($_GET["id_category"])?$_GET["id_category"]:0;
			settype($id_category, "int");
			$product_drink=$this->model->get_all("select * from tbl_product where id_category=$id_category");
			$category_name=$this->model->get_all("select category_name from tbl_category_product where id_category=$id_category");
				include "view/frontend/view_menu_drink.php";
		}
	}
	new controller_menu_drink();
 ?>