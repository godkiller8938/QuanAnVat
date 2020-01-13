<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Đã giao hàng</div>
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
						if($rows->status==1){
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
						<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=order&act=delete&id=<?php echo $rows->order_id; ?>">Delete</a>
						<?php } ?>
					</td>
				</tr>
				<?php } } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination" style="padding:7px !important">
				<ul class="pagination">
						<li class="page-item"><a class="page-link">Trang</a></li>
						<li class="page-item">
					<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                	<a class="page-link" href="admin.php?controller=order&p=<?php if($p>1) echo $p=$p-1; else echo $p; ?>">&laquo;</a></li>
        		<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="active page-item"><a class="page-link"><?php if($p>0&&$p<=$num_page) echo $p; else echo "1"; ?></a></li>
             	<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php if($p<$num_page) echo $p=$p+1; else echo $p; ?>">&raquo;</a></li>
                <li class="page-item"><a class="page-link">Tổng</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php echo $num_page; ?>"><?php echo $num_page; ?></a></li>

						
					</ul>