<?php 
	class controller_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//---------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$name = isset($_GET["name"]) ? $_GET["name"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"]) ? $_GET["id"]:0;
					//xoa ban ghi tuong ung voi id truyen vao
					if($security->id_security==1)
					$this->model->execute("delete from tbl_product where id_product=$id");
					if($name==0)
					echo "<script language='javascript'>location.href='admin.php?controller=product&name=0';</script>";
					if($name==1)
					echo "<script language='javascript'>location.href='admin.php?controller=product&name=1';</script>";
					if($name==2)
					echo "<script language='javascript'>location.href='admin.php?controller=product&name=2';</script>";
				break;
			}
			$record_per_page = 10;
			switch($name){
				case "0":
				$total = $this->model->num_rows("select id_product from tbl_product where classify=0");
				//tinh xem co bao nhieu trang
				$num_page = ceil($total/$record_per_page);
				//lay bien p (la ban chi trang hien tai) truyen tu url
				$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao
				$from = $p*$record_per_page;
				//thuc hien truy van sql co phan trang
				$arr= $this->model->get_all("select * from tbl_product where classify=0 order by id_product asc limit $from,$record_per_page");
				include "view/backend/view_food_product.php";
				break;

				case "1":
				$total = $this->model->num_rows("select id_product from tbl_product where classify=1");
				//tinh xem co bao nhieu trang
				$num_page = ceil($total/$record_per_page);
				//lay bien p (la ban chi trang hien tai) truyen tu url
				$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao
				$from = $p*$record_per_page;
				//thuc hien truy van sql co phan trang
				$arr= $this->model->get_all("select * from tbl_product where classify=1 order by id_product asc limit $from,$record_per_page");
				include "view/backend/view_drink_product.php";
				break;

				case "2":
				$total = $this->model->num_rows("select id_product from tbl_product where classify=2");
				//tinh xem co bao nhieu trang
				$num_page = ceil($total/$record_per_page);
				//lay bien p (la ban chi trang hien tai) truyen tu url
				$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao
				$from = $p*$record_per_page;
				//thuc hien truy van sql co phan trang
				$arr= $this->model->get_all("select * from tbl_product where classify=2 order by id_product asc limit $from,$record_per_page");
				include "view/backend/view_bakery_product.php";
				break;
			}
		}
	}
	new controller_product();
 ?>