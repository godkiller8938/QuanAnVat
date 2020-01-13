
	<div style="margin-bottom: 5px;">
	<?php 
		//kiem tra, neu don hang chua giao thi hien thi button giao hang
		$check = $this->model->get_a_record("select customer_id,status from tbl_order where order_id=$order_id");
		if($check->status== 0)
		{
	 ?>
		<a href="admin.php?controller=order_detail&act=sent&order_id=<?php echo $order_id; ?>" class="btn btn-danger">Giao hàng</a>&nbsp;
		<?php } ?>
	</div>
	<?php 
		$customer = $this->model->get_a_record("select * from tbl_customer where customer_id=".$check->customer_id);
	 ?>
	 
	 <table class="table table-hover">
	 	<tr>
	 		<td>Họ tên:</td>
	 		<td><?php echo $customer->name; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Địa chỉ:</td>
	 		<td><?php echo $customer->address; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Số điện thoại:</td>
	 		<td><?php echo $customer->phone_number; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Ghi chú:</td>
	 		<td><?php echo $customer->note; ?></td>
	 	</tr>
	 </table>
	
		<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Chi tiết hoá đơn</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 100px;">Ảnh</th>
					<th>Tên sản phẩm</th>
					<th style="width: 100px;">Giá</th>
					<th style="width: 100px;">Số lượng</th>
					<th style="width: 20px;">Size</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
						//lay thong tin san pham
						$product = $this->model->get_a_record("select * from tbl_product where id_product=".$rows->product_id);
				 ?>				 
				<tr>
					<td style="text-align: center;"><img src="public/upload/product/<?php echo $product->img; ?>" style="width:100px;"></td>
					<td><?php echo $product->product_name; ?></td>
					<td style="text-align: center;"><?php if($rows->size=='S'||$rows->size=='') echo number_format($product->price); else if($rows->size=='M') echo number_format($product->price_1); else if($rows->size=='L') echo number_format($product->price_2); ?>đ</td>
					<td style="text-align: center;"><?php echo $rows->number; ?></td>
					<td style="text-align: center;"><?php echo $rows->size; ?></td>
				</tr>
				<?php } ?>

			</table>
			
		</div>
