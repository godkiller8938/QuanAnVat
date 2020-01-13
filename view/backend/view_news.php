		<?php if($security->id_security==1){ ?>
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_news&act=add" class="btn btn-primary">Thêm tin tức</a>
		</div>
		<?php } ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Tin tức</div>
				<div class="table-responsive">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">Ảnh</th>
						<th>Tiêu đề</th>
						<th>Nội dung</th>
						<th style="width: 150px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td>
						<?php if(file_exists("public/upload/news/".$rows->img)){ ?>
						<img src="public/upload/news/<?php echo $rows->img; ?>" style="width: 150px;">
						<?php } ?>	
						</td>
						<td><div style="width: 200px"><?php echo $rows->title; ?></div></td>
						<td><div style="width: 200px"><?php echo $rows->content; ?></div></td>
						<td style="text-align: center;">
						<?php  if($security->id_security==1){ ?>
						<a href="admin.php?controller=add_edit_news&act=edit&id=<?php echo $rows->id_news; ?>">Sửa</a>&nbsp;&nbsp;
						<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=news&act=delete&id=<?php echo $rows->id_news; ?>">Xóa</a>
						</td>
						<?php } ?>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link">Trang</a></li>
						<li class="page-item">
					<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                	<a class="page-link" href="admin.php?controller=news&p=<?php if($p>1) echo $p=$p-1; else echo $p; ?>">&laquo;</a></li>
        		<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="active page-item"><a class="page-link"><?php if($p>0&&$p<=$num_page) echo $p; else echo "1"; ?></a></li>
             	<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php if($p<$num_page) echo $p=$p+1; else echo $p; ?>">&raquo;</a></li>
                <li class="page-item"><a class="page-link">Tổng</a></li>
                <li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php echo $num_page; ?>"><?php echo $num_page; ?></a></li>

						
					</ul>
				</div>

