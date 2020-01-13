<?php 
	class controller_customer{
		public $model;
		public function __construct(){
			$this->model=new model();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "add":
				$name = isset($_POST["name"])?$_POST["name"]:"";
				$address = isset($_POST["address"])?$_POST["address"]:"";
				$phone_number = isset($_POST["phone_number"])?$_POST["phone_number"]:"";
				$note = isset($_POST["note"])?$_POST["note"]:"";
				$name=$this->model->encode($name);
				$address=$this->model->encode($address);
				$phone_number=$this->model->encode($phone_number);
				$note=$this->model->encode($note);
					//add san pham vao gio hang bang cach goi ham cart_add
					$_SESSION['customer'] = array(
		            'name' => $name,
		            'address' => $address,
		            'phone_number' => $phone_number,
		            'note' => $note
		        );
					//print_r($_SESSION['customer']);
					echo "<script language='javascript'>location.href='don-hang';</script>";
				break;

		}
		include "view/frontend/view_customer.php";
	}
}
	new controller_customer();
 ?>