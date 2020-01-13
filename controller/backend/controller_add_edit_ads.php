<?php
	class controller_add_edit_ads{
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
				$arr=$this->model->get_a_record("select * from tbl_ads where id_ads=$id");
				$form_action="admin.php?controller=add_edit_ads&act=do_edit&id=$id";
				//load view
				include "view/backend/view_add_edit_ads.php";
				break;
				case "do_edit":
				$title= $_POST["title"];
				$title=$this->model->encode($title);
				//update title
				$this->model->execute("update tbl_ads set title='$title' where id_ads=$id");
				//kiem tra upload anh
				if($_FILES["img"]["name"]!=""){
					//lay anh cu va xoa no
					$old_img=$this->model->get_a_record("select img from tbl_ads where id_ads=$id");
					if(isset($old_img->img)&&file_exists('public/upload/adss/'.$old_img->img)){
						//xoa file
						unlink('public/upload/adss/'.$old_img->img);
					}
				//update img
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/adss/".$img);
				$this->model->execute("update tbl_ads set img='$img' where id_ads=$id");
				}
				echo "<script language='javascript'>location.href='admin.php?controller=ads';</script>";
				break;
				case "add":
				$form_action= "admin.php?controller=add_edit_ads&act=do_add";
				//load view
				include "view/backend/view_add_edit_ads.php";
				break;
				case "do_add":
				$title= $_POST["title"];
				$title=$this->model->encode($title);
				$img="";
				if($_FILES["img"]["name"]!=""){
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/adss/".$img);
				}
				//insert ban ghi
				$this->model->execute("insert into tbl_ads(title,img) value('$title','$img')");
				echo "<script language='javascript'>location.href='admin.php?controller=ads';</script>";
				break;
			}
		}
	}
	new controller_add_edit_ads();
?>