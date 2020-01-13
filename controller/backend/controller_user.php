<?php 
	class controller_user{
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
				$this->model->execute("delete from tbl_user where id_user=$id");
				echo "<script language='javascript'>location.href='admin.php?controller=user';</script>";
				break;
			}
			//-------------
			//phan trang
			//quy dinh so ban ghi tren 1 trang
			$record_per_page= 6;
			//tinh tong so ban ghi
			$total= $this->model->num_rows("select id_user from tbl_user");
			//tinh xem co bao nhieu trang
			$num_page= ceil($total/$record_per_page);
			//lay bien p (la ban chi trang hien tai) truyen tu url
			$p= isset($_GET["p"])&&$_GET["p"]>0 ?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from= $p*$record_per_page;
			//thuc hien truy van sql co phan trang
			$arr= $this->model->get_all("select * from tbl_user order by id_user asc limit $from, $record_per_page");
			//--------------
			include "view/backend/view_user.php";
		}
	}
	new controller_user();
 ?>