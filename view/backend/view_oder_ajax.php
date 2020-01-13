
		<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Chưa giao hàng</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên khách hàng</th>
					<th>Ngày mua</th>
					<th>Đơn giá</th>
					<th style="width: 150px;">Trạng thái</th>
					<th style="width: 200px">Quản lý</th>
				</tr>
				<?php 
					foreach($arr as $rows)
					{
						if($rows->status==0){
				 ?>
				<tr>
					<td><?php echo $rows->name; ?></td>
					<td style="text-align: center;">
					<?php
						$date = date_create($rows->buy_day);
						echo date_format($date,"d/m/Y H:i:s"); 
					?></td>
					<td style="text-align: center;"><?php echo number_format($rows->price); ?>₫</td>
					<td style="text-align: center;">
						<?php echo $rows->status==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
					</td>
					<td style="text-align: center;">
					<a href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>">Chi tiết</a>
					&nbsp;&nbsp;
					<?php if($security->id_security==1){ ?>
						<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=order&name=1&act=delete&id=<?php echo $rows->order_id; ?>">Delete</a>
						<?php } ?>
					</td>
				</tr>
				<?php } } ?>
			</table>
			
		</div>