<?php 
	include "../../config.php";
	include "../../model/model.php";
	class controller_size{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "S":
					$arr=$this->model->get_all("select price from tbl_product where id_product=$id");
					foreach($arr as $rows)
					$price= $rows->price;
				break;
				case "M":
					$arr=$this->model->get_all("select price_1 from tbl_product where id_product=$id");
					foreach($arr as $rows)
					$price= $rows->price_1;
				break;
				case "L":
					$arr=$this->model->get_all("select price_2 from tbl_product where id_product=$id");
					foreach($arr as $rows)
					$price= $rows->price_2;
				break;
			}
				echo number_format(isset($price)?$price:'')."₫";
		}
	}
	new controller_size();
?>