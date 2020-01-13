<?php 
	class controller_hot_customer{
		public $model;
		public function __construct(){
			$this->model=new model();
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$arr=$this->model->get_all("select * from tbl_hot_customer");
			$act=isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			settype($id, 'int');
			switch($act){
				case "delete":
				$id=isset($_GET["id"])?$_GET["id"]:0;
				//xoa ban ghi voi id truyen vao
				if($security->id_security==1)
				$this->model->execute("delete from tbl_hot_customer where id_hot_customer=$id");
				//echo "ok";
				echo "<script language='javascript'>location.href='admin.php?controller=hot_customer';</script>";
				break;
			}
			include "view/backend/view_hot_customer.php";
		}
	}
	new controller_hot_customer();
 ?>