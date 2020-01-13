
<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4>DANH MỤC</h4>
</div>
<div class="row">
	<div class="col-md-12">
	<?php 
		foreach($category_food as $rows)
		{
		 ?>
		<div class="col-xs-6 col-sm-6 col-md-3">
			<div class="card-desk">
				<div class="row">
					<h5 id="buy" class="text-center">
						<a style="color: white;" class="btn btn-primary" href="index.php?controller=category_food&id_category=<?php echo $rows->id_category;?>"><?php echo $rows->category_name;?></a>
					</h5>
				</div>
			</div>
		</div>
	<?php } ?>
		

	</div>
</div>

<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4 style="width: auto;" class="text-center"><?php foreach($category_name as $rows) echo $rows->category_name;?></h4>
</div>
<div class="row">
	<div class="col-md-12">
	<?php 
		foreach($product_food as $rows)
		{
		 ?>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="card-desk">
				<a style="color: white;" href="">
				<?php if(file_exists("public/upload/product/".$rows->img)){ ?>
				<img src="public/upload/product/<?php echo $rows->img; ?>" alt="" id="img_sp" class="img-thumbnail" width="100%">
				<?php } ?>	
				</a>
				<div class="row">
					<h5 class="text-center"><?php echo $rows->product_name; ?></h5>
					<h5 style="color: #D74D33;" class="text-center"><?php echo $rows->price; ?></h5>
					<h5 id="buy" class="text-center">
						<a check="0" style="color: white;" class="btn btn-danger" href="#">Mua hàng</a>
					</h5>
				</div>
			</div>
		</div>
	<?php } ?>
		

	</div>
</div>
