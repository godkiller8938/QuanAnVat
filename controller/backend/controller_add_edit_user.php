<?php 
	class controller_add_edit_user{
		//khai bao bien model
		public $model;
		public function __construct(){
			//gan bien model la objec cua class model, de tu do co the tac dong vao cac ham cua class model
			$this->model = new model();
			//---------
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$arr_check=$this->model->get_a_record("select user from tbl_user where user='$user'");
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			settype($id, 'int');
			switch($act){
				case "edit":
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_user where id_user=$id");
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_edit":
					$fullname = $_POST["fullname"];
					$address=$_POST["address"];
					$birthday=$_POST["birthday"];
					$phone_number=$_POST["phone_number"];
					$password = $_POST["password"];
					$fullname=$this->model->encode($fullname);
					$address=$this->model->encode($address);
					$birthday=$this->model->encode($birthday);
					$phone_number=$this->model->encode($phone_number);
					$id_security=isset($_POST["id_security"])?$_POST["id_security"]:0;
					
					$this->model->execute("update tbl_user set fullname='$fullname',address='$address',birthday='$birthday',phone_number='$phone_number',id_security=$id_security where id_user=$id");
					//kiem tra neu user nhap password moi thi update password
					if($password != ""){
						$password = md5($password);
						$this->model->execute("update tbl_user set password='$password' where id_user=$id");
					}
					echo "<script language='javascript'>location.href='admin.php?controller=user';</script>";
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/view_add_edit_user.php";
				break;
				case "do_add":
					$fullname = $_POST["fullname"];
					$user=$_POST["user"];
					$address=$_POST["address"];
					$birthday=$_POST["birthday"];
					$phone_number=$_POST["phone_number"];
					$password = $_POST["password"];
					$password = md5($password); //echo $fullname; echo $user; echo $address; echo $birthday; echo $phone_number;
					$fullname=$this->model->encode($fullname);
					$user=$this->model->encode($user);
					$address=$this->model->encode($address);
					$birthday=$this->model->encode($birthday);
					$phone_number=$this->model->encode($phone_number);
					$id_security=isset($_POST["id_security"])?$_POST["id_security"]:0;
					//insert ban ghi
					$check=$this->model->num_rows("select user from tbl_user where user='$user'");
					if($check==0){
					$this->model->execute("insert into tbl_user (fullname,user,address,birthday,phone_number,id_security,password) values ('$fullname', '$user', '$address', '$birthday', '$phone_number',$id_security, '$password')");
					echo "<script language='javascript'>location.href='admin.php?controller=user';</script>";
					}
					else {
						echo "<h1>Tài khoản ".$user." đã tồn tại, vui lòng đăng ký lại!</h1><br>";
						echo "<div style='margin:15px 0px'>
						<a href='admin.php?controller=add_edit_user&act=add' class='btn btn-primary'>Thêm tài khoản</a>
						</div>";
					}
				break;
			}
			//---------
		} 
	}
	new controller_add_edit_user();
 ?>