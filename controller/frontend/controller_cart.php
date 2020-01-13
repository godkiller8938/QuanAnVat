<?php
	class controller_cart{
		public $model;
		public function __construct(){
			//khởi tạo giỏ hàng

			$this->model=new model();
			if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
			//===========	
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$size = isset($_GET["radio"])?$_GET["radio"]:'';
			settype($id, "int");
			settype($price, "int");
			if($size!='')
			settype($size, "int");
			if($size>3||$size<1)
			$size=1;
			switch($size){
				case '1':
				$arr=$this->model->get_all("select price from tbl_product where id_product=$id");
				foreach($arr as $rows)
				$price=$rows->price;
				break;
				case '2':
				$arr=$this->model->get_all("select price_1 from tbl_product where id_product=$id");
				foreach($arr as $rows)
				$price=$rows->price_1;
				break;
				case '3':
				$arr=$this->model->get_all("select price_2 from tbl_product where id_product=$id");
				foreach($arr as $rows)
				$price=$rows->price_2;
				break;
			}

			if($size==1) $size="S";
			if($size==2) $size="M";
			if($size==3) $size="L";
			$check=0;
			$arr=$this->model->get_all("select price,price_1 from tbl_product where id_product=$id");
			foreach($arr as $rows)
			if($rows->price!=0&&$rows->price_1==0)
			$size='';
			switch($act){
				case "edit":
					$check=1;
					include "view/frontend/view_edit_cart.php";
				break;
				case "add":
					//add san pham vao gio hang bang cach goi ham cart_add
					$total=$this->model->num_rows("select id_product from tbl_product where id_product=$id");
		        	if($total>0)
					$this->cart_add($id,$size,$price);
					
				break;
				case "delete":
					//xoa phan tu khoi $_SESSION["cart"] bang cach goi ham cart_delete
					$this->cart_delete($id);
					$_SESSION['total_product']--;
					echo "<script language='javascript'>location.href='gio-hang';</script>";
				break;
				case "update":
					//duyet cac phan tu trong sessin array, update lai tung phan tu
					foreach($_SESSION["cart"] as $value){
						$product_id = $value["product_id"];
						$qty = isset($_POST["product_".$product_id])?$_POST["product_".$product_id]:0;
						$size = isset($_POST["size_".$product_id])?$_POST["size_".$product_id]:'';
						if($size!="S"&&$size!="M"&&$size!="L")
						$size="S";
						switch($size){
							case "S":
							$arr=$this->model->get_all("select price from tbl_product where id_product=$product_id");
							foreach($arr as $rows)
							$price=$rows->price;
							break;
							case "M":
							$arr=$this->model->get_all("select price_1 from tbl_product where id_product=$product_id");
							foreach($arr as $rows)
							$price=$rows->price_1;
							break;
							case "L":
							$arr=$this->model->get_all("select price_2 from tbl_product where id_product=$product_id");
							foreach($arr as $rows)
							$price=$rows->price_2;
							break;
							default:
							$arr=$this->model->get_all("select price from tbl_product where id_product=$product_id");
							foreach($arr as $rows)
							$price=$rows->price;
							break;
						}
						$arr=$this->model->get_all("select price,price_1 from tbl_product where id_product=$product_id");
						foreach($arr as $rows){
						if($rows->price!=0&&$rows->price_1==0)
						$size='';
						}
						if($qty!=0)
						$this->cart_update($product_id,$qty,$size,$price);
						//update lai phan tu bang cach goi ham cart_update
					}

					echo "<script language='javascript'>location.href='gio-hang';</script>";
				break;
				case "destroy":
					//xoa toan bo gio hang bang cach goi ham cart_destroy
					$this->cart_destroy();
					echo "<script language='javascript'>location.href='gio-hang';</script>";
				break;
			}
			//===========
			//load view
			if($check!=1)
			include "view/frontend/view_cart.php";
			//=================
		}
		public function cart_add($product_id,$size,$price){
		    if(isset($_SESSION['cart'][$product_id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$product_id]['number']++;
		    } else {
		    	if(isset($_SESSION['total_product']))
		        	$_SESSION['total_product']++;
		        	else $_SESSION['total_product']=1;
		        	//echo $_SESSION['total_product'];
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng

		        $product = $this->model->get_a_record("select * from tbl_product where id_product=$product_id");

		        $_SESSION['cart'][$product_id] = array(
		            'product_id' => $product_id,
		            'name' => $product->product_name,
		            'number' => 1,
		            'size' => $size,
		            'price' => $price
		        );
		    }
		}
		
		public function cart_update($product_id, $number, $size, $price){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$product_id]);
		    } else {
		        $_SESSION['cart'][$product_id]['number'] = $number;
		        $_SESSION['cart'][$product_id]['size'] = $size;
		        $_SESSION['cart'][$product_id]['price'] = $price;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($product_id){
		    unset($_SESSION['cart'][$product_id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		    unset($_SESSION['total_product']);
		}

	
}
	new controller_cart();
?>