<?php if($security->id_security==1){ ?>
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Thêm tài khoản</a>
		</div>
		<?php } ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thông tin các tài khoản</div>
				<!-- table -->
				<div class="table-responsive">
				<table  class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Tài khoản</th>
						<th>Địa chỉ</th>
						<th>Sinh nhật</th>
						<th>Số điện thoại</th>
						<th class="text-center">Quyền truy cập</th>
						<th style="width: 150px;"></th>
					</tr>
					<?php 
						foreach($arr as $rows)
						{
					 ?>
					<tr>
						<td><?php echo $rows->fullname; ?></td>
						<td><?php echo $rows->user; ?></td>
						<td><?php echo $rows->address; ?></td>
						<td><?php $date = date_create($rows->birthday); echo date_format($date,"d/m/Y"); ?></td>
						<td><?php echo $rows->phone_number; ?></td>
						<td style="color: #D74B33" class="text-center"><?php if($rows->id_security==1) echo "Quản trị"; else echo "Chỉ xem"; ?></td>
						<td style="text-align: center;">
							<?php  if($security->id_security==1||$rows->user==$_SESSION['user']){ ?>
							<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->id_user; ?>">Sửa</a>&nbsp;&nbsp;
							<?php } ?>
							<?php if($security->id_security==1){ ?>
							<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=user&act=delete&id=<?php echo $rows->id_user; ?>">Xóa</a>&nbsp;&nbsp;
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
				<!-- end table -->
				
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link">Trang</a></li>
						<li class="page-item">
					<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                	<a class="page-link" href="admin.php?controller=user&p=<?php if($p>1) echo $p=$p-1; else echo $p; ?>">&laquo;</a></li>
        		<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="active page-item"><a class="page-link"><?php if($p>0&&$p<=$num_page) echo $p; else echo "1"; ?></a></li>
             	<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php if($p<$num_page) echo $p=$p+1; else echo $p; ?>">&raquo;</a></li>
                <li class="page-item"><a class="page-link">Tổng</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $num_page; ?>"><?php echo $num_page; ?></a></li>

						
					</ul>
				</div>
			
	