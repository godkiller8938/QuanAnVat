<div style="margin:15px 0px">
	<div class="row">
		<div class="col-md-6" style="padding-top: 10px">
		<a href="admin.php?controller=add_edit_product&act=add" class="btn btn-primary">Thêm sản phẩm</a>
	</div>
	<div class="col-md-6" style="padding-top: 10px">
	  	<form action="admin.php?controller=search_product" method="post">
		    <div class="input-group">
		      <input type="text" name="key" class="form-control" placeholder="Sản phẩm cần tìm..." required>
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit">Tìm!</button>
		      </span>
		    </div><!-- /input-group -->
		</form>
	 </div><!-- /.col-lg-6 -->
	</div>
</div>
		
	<div class=" bg-primary text-white" style="padding: 10px;font-size: 17px">Danh sách tìm kiếm</div>
	<?php if($total!=0){ ?>
		<div class="table-responsive">
		<!-- table -->
		<table class="table table-hover table-bordered">
			<tr>
				<th style="width: 100px;">Ảnh</th>
				<th>Tên sản phẩm</th>
				<th width="200px">Mô tả</th>
				<th>Giá size 1(S)</th>
				<th>Giá size 2(M)</th>
				<th>Giá size 3(L)</th>
				<th>Danh mục</th>
				<th>Phân loại</th>
				<th style="width: 90px;">Sản phẩm nổi bật</th>
				<th width="90px"></th>
			</tr>
			<?php 
			foreach($arr as $rows)
			{
		 ?>
			<tr>
				<td>
					<?php if(file_exists("public/upload/product/".$rows->img)){ ?>
				<img src="public/upload/product/<?php echo $rows->img; ?>" style="width: 150px;">
				<?php } ?>	
				</td>
				<td><?php echo $rows->product_name; ?></td>
				<td width="200px"><?php echo $rows->description; ?></td>
				<td><?php echo number_format($rows->price);?>₫</td>
				<td><?php if($rows->price_1==0) echo "";else echo number_format($rows->price_1)."₫";?></td>
				<td><?php if($rows->price_2==0) echo "";else echo number_format($rows->price_2)."₫";?></td>
				<td style="text-align: center;">
					<?php 
					//lay danh muc tuong ung voi $rows->fk_category_product_id
					$category = $this->model->get_a_record("select category_name from tbl_category_product where id_category=".$rows->id_category);
					echo isset($category->category_name)?$category->category_name:"";
				 ?>
				</td>
				<td><?php if($rows->classify==0) echo "Món ăn"; else echo "Đồ uống"; ?></td>
				<td class="text-center"><?php if($rows->hot_product==1) echo "Hot"; ?></td>
				<td style="text-align: center;">
				<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->id_product; ?>">Sửa</a>&nbsp;&nbsp;
				<a onclick="return window.confirm('Bạn muốn xóa?');" href="admin.php?controller=product&act=delete&id=<?php echo $rows->id_product; ?>">Xóa</a>
				</td>
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
        	<a class="page-link" href="admin.php?controller=product&p=<?php if($p>1) echo $p=$p-1; else echo $p; ?>">&laquo;</a></li>
		<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
        <li class="active page-item"><a class="page-link"><?php if($p>0&&$p<=$num_page) echo $p; else echo "1"; ?></a></li>
     	<?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php if($p<$num_page) echo $p=$p+1; else echo $p; ?>">&raquo;</a></li>
        <li class="page-item"><a class="page-link">Tổng</a></li>
        <li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $num_page; ?>"><?php echo $num_page; ?></a></li>	
			</ul>
		</div>	
	<?php }else echo "<h2>Không có sản phẩm nào</h2>"; ?>	