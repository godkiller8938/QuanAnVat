<?php 
	class controller_order{
		public $model;
		public function __construct(){
			//--------------------
			$this->model=new model();
			$user=$_SESSION["user"];
			$security=$this->model->get_a_record("select id_security from tbl_user where user='$user'");
			$act= isset($_GET["act"])?$_GET["act"]:"";
			$name= isset($_GET["name"])?$_GET["name"]:"";
			//$arr=$this->model->get_all("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id");
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//xoa ban ghi co id truyen vao
					if($security->id_security==1)
					$this->model->execute("delete from tbl_order where order_id=$id");
					//di chuyen den trang order
					if($name==1)
					echo "<script language='javascript'>location.href='admin.php?controller=order_ing';</script>";
					else
					echo "<script language='javascript'>location.href='admin.php?controller=order';</script>";
				break;
			}
			//--------------------
			//tính tổng số bản ghi
			$total = $this->model->num_rows("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id where status=1");
			//quy định số bản ghi trên 1 trang
			$record_per_page = 10;
			//Tính số trang = ceil(tổng số bản ghi/số bản ghi trên 1 trang)
			$num_page = ceil($total/$record_per_page);
			//Lấy biến p truyền trên url (là biến chỉ số trang hiện tại)
			$page = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//tính bản ghi bắt đầu hiển thị ở trang đó (ở trang nào, sẽ từ bản ghi nào đến bản ghi nào)
			$from = $page * $record_per_page;
			$arr = $this->model->get_all("select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id where status=1 order by status,order_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_order_ed.php";
			//--------------------
		}
	}
	new controller_order();
 ?>