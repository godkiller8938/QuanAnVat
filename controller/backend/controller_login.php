<?php 
	class controller_login{
		public $model;
		public function __construct(){
			//khai bao gan bien model la 1 project cua class model()
			$this->model=new model();
			//---------------
			//khi nguoi dung submit
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$user= $_POST["user"];
				$user= $this->model->encode($user);
				$password= $_POST["password"];
				//kiem tra thong tin
				//lay 1 ban ghi
				$check= $this->model->get_a_record("select user,password from tbl_user where user='$user'");
				if(isset($check->user)){
					$password= md5($password);
					if($check->password==$password){
						//dang nhap thanh cong
						$_SESSION["user"]=$user;
						echo "<script language='javascript'>location.href='admin.php';</script>";
									
					}else
					echo "<script language='javascript'>location.href='admin.php?err=1';</script>";
				}else
				echo "<script language='javascript'>location.href='admin.php?err=1';</script>";
			}
			//---------------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>