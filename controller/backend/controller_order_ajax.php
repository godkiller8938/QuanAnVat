<?php 
	include "../../config.php";
	include "../../model/model.php";
	class controller_order{
		public $model;
		public function __construct(){
			//--------------------
			$this->model=new model();
			$security=$this->model->get_a_record("select id_security from tbl_user where user='admin'");
			$act= isset($_GET["act"])?$_GET["act"]:"";
			//$arr=$this->model->get_all("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id");
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//xoa ban ghi co id truyen vao
					 if($security->id_security==1)
					$this->model->execute("delete from tbl_order where order_id=$id");
					//di chuyen den trang order
					echo "<script language='javascript'>location.href='admin.php?controller=order_ing';</script>";
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$arr = $this->model->get_all("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id order by order_id desc");
			//load view
			include "../../view/backend/view_oder_ajax.php";
			//--------------------
		}
	}
	new controller_order();
 ?>