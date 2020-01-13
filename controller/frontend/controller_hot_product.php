<?php 
	class controller_hot_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			//---------
			//dinh nghia so ban ghi tren 1 trang
			$record_per_page = 8;			
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select * from tbl_product where hot_product=1");
			//dinh nghia so trang = tongsobanghi/so-ban-ghi-tren-trang
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
			//xac dinh trang hien tai
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]:1;
			settype($p, "int");
			//lay tu ban ghi nao
			$from = ($p-1)*$record_per_page;
			//thuc hien cau truy van de lay danh sach cac ban ghi
			$arr = $this->model->get_all("select * from tbl_product where hot_product=1 order by id_product desc limit $from,$record_per_page");
			//---------
			//load view
			include "view/frontend/view_hot_product.php";
		}
	}
	new controller_hot_product();
 ?>