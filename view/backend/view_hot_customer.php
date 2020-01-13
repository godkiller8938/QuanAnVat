
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thông tin khách hàng</div>
				<div class="table-responsive">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Số điện thoại</th>
						<th>Số lần mua hàng</th>
						<th>Quản lý</th>
					</tr>
					<?php 
						foreach($arr as $rows)
						{
					 ?>
					<tr>
						<td><?php echo $rows->phone_number; ?></td>
						<td><?php echo $rows->total_order; ?></td>
						<td>
							<?php if($security->id_security==1){ ?>
							<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=hot_customer&act=delete&id=<?php echo $rows->id_hot_customer; ?>">Xóa</a>&nbsp;&nbsp;
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</table>
				<!-- end table -->
				</div>
		