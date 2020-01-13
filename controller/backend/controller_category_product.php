<?php 
	class controller_category_product{
		public $model;
		public function __construct(){
			$this->model= new model();
			//--------------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
				$id=isset($_GET["id"])?$_GET["id"]:0;
				//xoa ban ghi voi id truyen vao
				if($security->id_security==1)
				$this->model->execute("delete from tbl_category_product where id_category=$id");
				//echo "ok";
				echo "<script language='javascript'>location.href='admin.php?controller=category_product';</script>";
				break;
			}
			//-------------
			//phan trang
			//quy dinh so ban ghi tren 1 trang
			$record_per_page= 6;
			//tinh tong so ban ghi
			$total= $this->model->num_rows("select id_category from tbl_category_product");
			//tinh xem co bao nhieu trang
			$num_page= ceil($total/$record_per_page);
			//lay bien p (la ban chi trang hien tai) truyen tu url
			$p= isset($_GET["p"])&&$_GET["p"]>0 ?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from= $p*$record_per_page;
			//thuc hien truy van sql co phan trang
			$arr= $this->model->get_all("select * from tbl_category_product order by id_category asc limit $from, $record_per_page");
			//--------------
			include "view/backend/view_category_product.php";
		}
	}
	new controller_category_product();
 ?>