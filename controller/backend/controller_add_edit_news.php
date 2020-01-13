<?php
	class controller_add_edit_news{
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
				$arr=$this->model->get_a_record("select * from tbl_news where id_news=$id");
				$form_action="admin.php?controller=add_edit_news&act=do_edit&id=$id";
				//load view
				include "view/backend/view_add_edit_news.php";
				break;
				case "do_edit":
				$title= $_POST["title"];
				$content= $_POST["content"];

				$title=$this->model->encode($title);
				//$content=$this->model->encode($content);
				//update title
				$this->model->execute("update tbl_news set title='$title',content='$content' where id_news=$id");
				//kiem tra upload anh
				if($_FILES["img"]["name"]!=""){
					//lay anh cu va xoa no
					$old_img=$this->model->get_a_record("select img from tbl_news where id_news=$id");
					if(isset($old_img->img)&&file_exists('public/upload/news/'.$old_img->img)){
						//xoa file
						unlink('public/upload/news/'.$old_img->img);
					}
				//update img
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/news/".$img);
				$this->model->execute("update tbl_news set img='$img' where id_news=$id");
				}
				//kiem tra neu user nhap password moi thi update password
				echo "<script language='javascript'>location.href='admin.php?controller=news';</script>";
				break;
				case "add":
				$form_action= "admin.php?controller=add_edit_news&act=do_add";
				//load view
				include "view/backend/view_add_edit_news.php";
				break;
				case "do_add":
				$title= $_POST["title"];
				$content= $_POST["content"];
				$img="";

				$title=$this->model->encode($title);
				//$content=$this->model->encode($content);
				
				if($_FILES["img"]["name"]!=""){
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/news/".$img);
				}
				//insert ban ghi
				$this->model->execute("insert into tbl_news(title,content,img) value('$title','$content','$img')");
				echo "<script language='javascript'>location.href='admin.php?controller=news';</script>";
				break;
			}
		}
	}
	new controller_add_edit_news();
?>