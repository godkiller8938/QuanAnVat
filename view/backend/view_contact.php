<?php  if($security->id_security==1){ ?>
		<div style="margin:15px 0px">
			<a href="admin.php?controller=contact&act=add" class="btn btn-primary">Thêm liên hệ</a>
		</div>
		<?php } ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thông tin liên hệ</div>
				<div class="table-responsive">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						
						<th>Địa chỉ</th>
						
						<th>Số điện thoại</th>
						<th style="width: 150px;"></th>
					</tr>
					<?php 
						foreach($arrs as $rows)
						{
					 ?>
					<tr>
						<td><?php echo $rows->name; ?></td>
						
						<td><?php echo $rows->address; ?></td>
						
						<td><?php echo $rows->phone_number; ?></td>
						<td style="text-align: center;">
							<?php  if($security->id_security==1){ ?>
							<a href="admin.php?controller=contact&act=edit&id=<?php echo $rows->id_contact; ?>">Sửa</a>&nbsp;&nbsp;
							<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=contact&act=delete&id=<?php echo $rows->id_contact; ?>">Xóa</a>&nbsp;&nbsp;
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</table>
				<!-- end table -->
				</div>
		