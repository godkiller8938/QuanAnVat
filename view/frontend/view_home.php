
<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4><i class="glyphicon glyphicon-adjust"></i> MÓN ĂN</h4>
</div>
<div class="row">
	<div class="col-md-12">
	<?php 
		foreach($product_food as $rows)
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
					<h5 id="price_size_home" style="color: #D74D33;" class="text-center"><?php echo number_format($rows->price);?>₫</h5>
					<h5 id="buy" class="text-center">
						<a check="0" class="btn btn-danger" name="<?php echo number_format($rows->price);?>" name1="<?php echo $rows->price_1;?>" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal_order"><i class="glyphicon glyphicon-shopping-cart"></i> MUA HÀNG</a>
					</h5>
				</div>
			</div>
		</div>
	<?php } ?>

	</div>
</div>
<!--phan trang-->
    <div class="row">
    	<h5 class="text-center">
            <ul class="pagination">
               <li><a> Trang</a></li>
                <li>
					<?php $p_food=isset($_GET["p_food"])?$_GET["p_food"]:1;settype($p_food,'int'); ?>
                	<a href="trang-chu?p_food=<?php if($p_food>1) echo $p_food=$p_food-1; else echo $p_food; ?>">&laquo;</a></li>
        		<?php $p_food=isset($_GET["p_food"])?$_GET["p_food"]:1;settype($p_food,'int'); ?>
                <li class="active"><a><?php if($p_food>0&&$p_food<=$num_page_food) echo $p_food; else echo "1"; ?></a></li>
             	<?php $p_food=isset($_GET["p_food"])?$_GET["p_food"]:1;settype($p_food,'int'); ?>
                <li><a href="trang-chu?p_food=<?php if($p_food<$num_page_food) echo $p_food=$p_food+1; else echo $p_food; ?>">&raquo;</a></li>
                <li><a>Tổng</a></li>
                <li><a href="trang-chu?p_food=<?php echo $num_page_food; ?>"><?php echo $num_page_food; ?></a></li>
            </ul>
    	</h5>
	</div>
<!--end phan trang-->
<div class="row" style="padding-left: 15px;padding-right: 15px;">
	<div class="col-md-12" style="padding-left: 0px;" id="sp">
		<h4><i class="glyphicon glyphicon-ice-lolly-tasted"></i>ĐỒ UỐNG</h4>
	</div>
<div class="row">
	<div class="col-md-12">

		<?php 
		foreach($product_drink as $rows)
		{
		 ?>
		<div class="col-xs-6 col-sm-6 col-md-3" id="parent">
			<div class="card-desk" id="setheight">
				<a href="" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal">
				<?php if(file_exists("public/upload/product/".$rows->img)){ ?>
				<img src="public/upload/product/<?php echo $rows->img; ?>" alt="" class="img-thumbnail" width="100%">
				<?php } ?>	
			</a>
								<div class="row">
					<h5 class="text-center" style="margin-left: 20px;margin-right: 20px"><?php echo $rows->product_name ?></h5>
					<h5 style="color: #D74D33;" class="text-center"><?php echo number_format($rows->price); ?>₫</h5>
					<h5 id="buy" class="text-center">
						<a check="0" class="btn btn-danger" name="<?php echo number_format($rows->price);?>" name1="<?php echo $rows->price_1;?>" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal_order"><i class="glyphicon glyphicon-shopping-cart"></i> MUA HÀNG</a>
					</h5>
				</div>
			</div>
		</div>
	<?php } ?>

	</div>
</div>
<!--phan trang-->
    <div class="row">
    	<h5 class="text-center">
            <ul class="pagination" id="phan_trang">
            	<li><a> Trang</a></li>
                <li>
					<?php $p_drink=isset($_GET["p_drink"])?$_GET["p_drink"]:1;settype($p_drink,'int'); ?>
                	<a href="trang-chu?p_drink=<?php if($p_drink>1) echo $p_drink=$p_drink-1; else echo $p_drink; ?>">&laquo;</a></li>
        		<?php $p_drink=isset($_GET["p_drink"])?$_GET["p_drink"]:1;settype($p_drink,'int'); ?>
                <li class="active"><a><?php if($p_drink>0&&$p_drink<=$num_page_drink) echo $p_drink; else echo "1"; ?></a></li>
             	<?php $p_drink=isset($_GET["p_drink"])?$_GET["p_drink"]:1;settype($p_drink,'int'); ?>
                <li><a href="trang-chu?p_drink=<?php if($p_drink<$num_page_drink-1) echo $p_drink=$p_drink+1; else echo $p_drink; ?>">&raquo;</a></li>
                <li><a>Tổng</a></li>
                <li><a href="trang-chu?p_drink=<?php echo $num_page_drink; ?>"><?php echo $num_page_drink; ?></a></li>
            </ul>
    	</h5>
	</div>
<!--end phan trang-->
</div>