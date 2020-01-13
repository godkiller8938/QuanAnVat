<?php
	class controller_add_edit_category_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			//------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act= isset($_GET["act"])?$_GET["act"]:"";
			$id= isset($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
				//lay 1 ban ghi tuong ung voi id truyen vao
				$arr=$this->model->get_a_record("select * from tbl_category_product where id_category=$id");
				$form_action="admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
				//load view
				include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_edit":
				$category_name= $_POST["category_name"];
				$category_name=$this->model->encode($category_name);
				
				//update category_name
				$this->model->execute("update tbl_category_product set category_name='$category_name' where id_category=$id");
				//kiem tra neu user nhap password moi thi update password
				echo "<script language='javascript'>location.href='admin.php?controller=category_product';</script>";
				break;
				case "add":
				$form_action= "admin.php?controller=add_edit_category_product&act=do_add";
				//load view
				include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_add":
				$category_name= $_POST["category_name"];
				$category_name=$this->model->encode($category_name);
				//insert ban ghi
				$this->model->execute("insert into tbl_category_product(category_name) value('$category_name')");
				echo "<script language='javascript'>location.href='admin.php?controller=category_product';</script>";
				break;
			}
		}
	}
	new controller_add_edit_category_product();
?>