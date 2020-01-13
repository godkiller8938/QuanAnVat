<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model=new model();
			//kiem tra, neu user chua dang nhap (hoac session timeout) thi yeu cau dang nhap
			if(isset($_SESSION['customer'])&&$_SESSION["cart"]){
			$name=$_SESSION['customer']['name'];
			$address=$_SESSION['customer']['address'];
			$phone_number=$_SESSION['customer']['phone_number'];
			$note=$_SESSION['customer']['note'];
			$classify=1;

			if($name!=" "&&$address!=" "&&$phone_number!=" ")
			{
			$this->model->execute("insert into tbl_customer(name,address,phone_number,note,classify) values('$name','$address','$phone_number','$note',$classify)");
			$arr=$this->model->get_all("select customer_id from tbl_customer where classify=1");
			foreach($arr as $rows)
				$customer_id=$rows->customer_id;
			$this->model->execute("update tbl_customer set classify=0");
				//$customer_id=$arr->customer_id;
			//them ban ghi vao tbl_order va lay order_id vua them vao, khoa ngoai la customer_id
			$gia = 0;
			foreach($_SESSION["cart"] as $product){
				$gia = $gia + $product["price"]*$product["number"];
			}
			//insert thong tin vao tbl_order
			$time= date('y/m/d H:i:s');
			settype($time, 'string');
			
			$this->model->execute("insert into tbl_order(customer_id,buy_day,price,status) values($customer_id,timestamp('$time'),$gia,0)");
			$order=$this->model->get_all("select order_id from tbl_order where customer_id=$customer_id");
			foreach($order as $rows)
				$order_id=$rows->order_id;

			//them ban ghi vao tbl_order_detail voi khoa ngoai la order_id
			foreach($_SESSION["cart"] as $product){
				$product_id=$product["product_id"];
				$number=$product["number"];
				$size=$product["size"];
				$this->model->execute("insert into tbl_order_detail(order_id,product_id,number,size) values($order_id,$product_id,$number,'$size')");
			}
		$arr=$this->model->get_all("select * from tbl_hot_customer");
		$check_hot_customer=1;
		foreach($arr as $rows){
			if($phone_number==$rows->phone_number)
			{
				$total_order=$rows->total_order;
				$total_order++;
				$this->model->execute("update tbl_hot_customer set total_order=$total_order where phone_number=$phone_number");
				$check_hot_customer=0;
				break;
			}

		}
		
		if($check_hot_customer!=0)
		{
			$this->model->execute("insert into tbl_hot_customer(phone_number,total_order) values('$phone_number',1)");
			
		}
		echo "<script language='javascript'>alert('Đơn hàng của bạn đã đặt thành công. Chúng tôi sẽ liên hệ lại bạn sớm nhất có thể. Cảm ơn bạn!');</script>";
		//xoa gio hang 
		unset($_SESSION['cart']);
		unset($_SESSION['customer']);
		}else
		echo "<script language='javascript'>alert('Đặt hàng không thành công!');</script>";
		
	}
			
			 echo "<script language='javascript'>location.href='trang-chu';</script>";
		}
	}
	new controller_checkout();
 ?>