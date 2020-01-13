<?php
	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			//------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act= isset($_GET["act"])?$_GET["act"]:"";
			$name= isset($_GET["name"])?$_GET["name"]:"";
			$id= isset($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
				//lay 1 ban ghi tuong ung voi id truyen vao
				$arr=$this->model->get_a_record("select * from tbl_product where id_product=$id");
				if($name==0)
				$form_action="admin.php?controller=add_edit_product&name=0&act=do_edit&id=$id";
				if($name==1)
				$form_action="admin.php?controller=add_edit_product&name=1&act=do_edit&id=$id";
				if($name==2)
				$form_action="admin.php?controller=add_edit_product&name=2&act=do_edit&id=$id";
				//load view
				include "view/backend/view_add_edit_product.php";
				break;
				case "do_edit":
				$product_name= $_POST["product_name"];	
				$description= $_POST["description"];
				$price=isset($_POST["price"])?$_POST["price"]:0;
				$price_1=isset($_POST["price_1"])?$_POST["price_1"]:0;
				$price_2=isset($_POST["price_2"])?$_POST["price_2"]:0;
				$id_category=$_POST["id_category"];
				$classify= $_POST["classify"];
				$hot_product= isset($_POST["hot_product"])?1:0;
				settype($price, 'int');
				settype($price_1, 'int');
				settype($price_2, 'int');

				$product_name=$this->model->encode($product_name);
				$description=$this->model->encode($description);
				
				

				//update c_name
				$this->model->execute("update tbl_product set product_name='$product_name',description='$description',price=$price,price_1=$price_1,price_2=$price_2,id_category=$id_category,classify=$classify,hot_product=$hot_product where id_product=$id");
				//kiem tra upload anh
				if($_FILES["img"]["name"]!=""){
					//lay anh cu va xoa no
					$old_img=$this->model->get_a_record("select img from tbl_product where id_product=$id");
					if(isset($old_img->img)&&file_exists('public/upload/product/'.$old_img->img)){
						//xoa file
						unlink('public/upload/product/'.$old_img->img);
					}
				//update img
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/product/".$img);
				$this->model->execute("update tbl_product set img='$img' where id_product=$id");
				}
				//kiem tra neu user nhap password moi thi update password
				if($name==0)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=0';</script>";
				if($name==1)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=1';</script>";
				if($name==2)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=2';</script>";
				break;
				case "add":
				if($name==0)
				$form_action= "admin.php?controller=add_edit_product&name=0&act=do_add";
				if($name==1)
				$form_action= "admin.php?controller=add_edit_product&name=1&act=do_add";
				if($name==2)
				$form_action= "admin.php?controller=add_edit_product&name=2&act=do_add";
				//load view
				include "view/backend/view_add_edit_product.php";
				break;
				case "do_add":
				$product_name= $_POST["product_name"];	
				$description= $_POST["description"];
				$price=isset($_POST["price"])?$_POST["price"]:0;
				$price_1=isset($_POST["price_1"])?$_POST["price_1"]:0;
				$price_2=isset($_POST["price_2"])?$_POST["price_2"]:0;
				$id_category=$_POST["id_category"];
				$classify= isset($_POST["classify"])?$_POST["classify"]:0;
				$hot_product= isset($_POST["hot_product"])?1:0;
				$img="";

				settype($price, 'int');
				settype($price_1, 'int');
				settype($price_2, 'int');

				$product_name=$this->model->encode($product_name);
				$description=$this->model->encode($description);
				
				
				if($_FILES["img"]["name"]!=""){
				$img=time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/product/".$img);
				}
				//insert ban ghi
				$this->model->execute("insert into tbl_product(product_name,description,price,price_1,price_2,img,id_category,classify,hot_product) value('$product_name','$description',$price,$price_1,$price_2,'$img',$id_category,$classify,$hot_product)");
				if($name==0)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=0';</script>";
				if($name==1)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=1';</script>";
				if($name==2)
				echo "<script language='javascript'>location.href='admin.php?controller=product&name=2';</script>";
				break;
			}
		}
	}
	new controller_add_edit_product();
?>