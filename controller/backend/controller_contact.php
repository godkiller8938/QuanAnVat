<?php 
	class controller_contact{
		//khai bao bien model
		public $model;
		public function __construct(){
			//gan bien model la objec cua class model, de tu do co the tac dong vao cac ham cua class model
			$this->model = new model();
			//---------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$arrs= $this->model->get_all("select * from tbl_contact order by id_contact");
			switch($act){
				case "edit":
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_contact where id_contact=$id");
					$form_action = "admin.php?controller=contact&act=do_edit&id=$id";
					//load view
					include "view/backend/view_add_edit_contact.php";
				break;
				case "do_edit":
					$name=$_POST["name"];
					$address=$_POST["address"];
					$phone_number=$_POST["phone_number"];
					$name=$this->model->encode($name);
					$address=$this->model->encode($address);
					$phone_number=$this->model->encode($phone_number);
					
					//update c_fullname
					$this->model->execute("update tbl_contact set name='$name',address='$address',phone_number='$phone_number' where id_contact=$id");
					//kiem tra neu contact nhap password moi thi update password
					
					echo "<script language='javascript'>location.href='admin.php?controller=contact';</script>";
				break;
				case "add":
					$form_action = "admin.php?controller=contact&act=do_add";
					//load view
					include "view/backend/view_add_edit_contact.php";
				break;
				case "do_add":
					
					$name=$_POST["name"];
					$address=$_POST["address"];
					$phone_number=$_POST["phone_number"];
					$name=$this->model->encode($name);
					$address=$this->model->encode($address);
					$phone_number=$this->model->encode($phone_number);
					 //echo $fullname; echo $contact; echo $address; echo $birthday; echo $phone_number;
					//insert ban ghi
					$this->model->execute("insert into tbl_contact (name,address,phone_number) values ('$name', '$address', '$phone_number')");
					echo "<script language='javascript'>location.href='admin.php?controller=contact';</script>";
				break;
				case "delete":
				$id=isset($_GET["id"])?$_GET["id"]:0;
				//xoa ban ghi voi id truyen vao
				if($security->id_security==1)
				$this->model->execute("delete from tbl_contact where id_contact=$id");
				echo "<script language='javascript'>location.href='admin.php?controller=contact';</script>";
				break;
			}
			//---------
			include "view/backend/view_contact.php";
		} 

	}
	new controller_contact();
 ?>