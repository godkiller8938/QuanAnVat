<?php 
	class controller_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//---------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"]) ? $_GET["id"]:0;
					//xoa ban ghi tuong ung voi id truyen vao
					if($security->id_security==1)
					$this->model->execute("delete from tbl_news where id_news=$id");
					echo "<script language='javascript'>location.href='admin.php?controller=news';</script>";
				break;
			}
			//---------
			//phan trang
			//quy dinh so ban ghi tren 1 trang
			$record_per_page = 10;
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select id_news from tbl_news");
			//tinh xem co bao nhieu trang
			$num_page = ceil($total/$record_per_page);
			//lay bien p (la ban chi trang hien tai) truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $p*$record_per_page;
			//thuc hien truy van sql co phan trang
			$arr= $this->model->get_all("select * from tbl_news order by id_news desc limit $from,$record_per_page");
			//---------
			//load view
			include "view/backend/view_news.php";
		}
	}
	new controller_news();
 ?>