<?php 
	class controller_order{
		public $model;
		public function __construct(){
			$this->model=new model();
			include "view/frontend/view_order.php";
		}
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
	}
	new controller_order();
?>