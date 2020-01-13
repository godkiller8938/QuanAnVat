<div class="row hidden-md hidden-lg">
	<div class="col-md-12">
		<div class="card-desk">
			<h4 style="margin-bottom: 0px;">&nbsp;&nbsp;<i class="glyphicon glyphicon-list"></i> BAKERY MENU</h4>
			<ul class="menu_sp">
				<?php 
		foreach($category_bakery as $rows)
		{
		 ?>
				<li><a style="padding-left: 10px; display: block;" href="banh-ngot/<?php echo remove_unicode($rows->category_name)?>-<?php echo $rows->id_category;?>"><i class="glyphicon glyphicon-adjust"></i> <?php echo $rows->category_name;?></a></li>
		<?php } ?>
			</ul>
		</div>
	</div>
</div>

<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4 style="width: auto;" class="text-center"><i class="glyphicon glyphicon-sort"></i> <?php foreach($category_name as $rows) echo $rows->category_name;?></h4>
</div>
<div class="row">
	<div class="col-md-12">
	<?php 
		foreach($product_bakery as $rows)
		{
		 ?>
		<div class="col-xs-6 col-sm-6 col-md-3" id="parent">
			<div class="card-desk" id="setheight">
				<a href="" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal">
				<?php if(file_exists("public/upload/product/".$rows->img)){ ?>
				<img src="public/upload/product/<?php echo $rows->img; ?>" alt="" id="img_sp" class="img-thumbnail" width="100%">
				<?php } ?>	
				</a>
				<div class="row">
					<h5 class="text-center" style="margin-left: 20px;margin-right: 20px"><?php echo $rows->product_name; ?></h5>
					<h5 style="color: #D74D33;" class="text-center"><?php echo number_format($rows->price); ?>₫</h5>
					<h5 id="buy" class="text-center">
						<a check="0" class="btn btn-danger" name="<?php echo number_format($rows->price);?>" name1="<?php echo $rows->price_1;?>" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal_order"><i class="glyphicon glyphicon-shopping-cart"></i> Mua hàng</a>
					</h5>
				</div>
			</div>
		</div>
	<?php } ?>
		

	</div>
</div>
