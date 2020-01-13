
<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4><i class="glyphicon glyphicon-menu-hamburger"></i> Chi tiết</h4>
</div>
<?php foreach($arr as $rows){ ?>

<div class="col-sm-12 col-sm-12 col-md-6" style="padding: 20px;">
	<div class="row text-center">
		<img style="max-width: 240px;max-height: 175px" class="img-thumbnail" src="public/upload/product/<?php echo $rows->img;?>">
	</div>
</div>
<div class="col-sm-12 col-sm-12 col-md-6" id="parent_detail" style="padding: 20px;padding-top: 10px;">
	<div class="row">
		<div class="card-desk text-center" style="padding-bottom: 20px;">
			<h2><?php echo $rows->product_name;?></h2>
			<h2 id="price_size" style="color: #D74B33;"><?php echo number_format($rows->price);?>₫</h2>
			<a check="0" class="btn btn-success" value="<?php echo $rows->id_product;?>" data-toggle="modal" data-target="#myModal_order"><i class="glyphicon glyphicon-shopping-cart"></i> Mua hàng</a>
		</div>
	</div>
</div>
<?php 
	if($rows->price>0&&$rows->price_1>0&&$rows->price_2>0)
	{
 ?>
<div class="row">
	<div class="col-md-12 text-center">
		<input type="radio" id="size_1" value="1" checked name="size">Size S &nbsp; &nbsp;
		<input type="radio" id="size_2" value="2" name="size">Size M &nbsp; &nbsp;
		<input type="radio" id="size_3" value="3" name="size">Size L
	</div>
</div>
<?php }
	if($rows->price>0&&$rows->price_1>0&&$rows->price_2==0)
	{
 ?>
	<div class="row">
	<div class="col-md-12 text-center">
		<input type="radio" id="size_1" value="1" name="size" checked>Size S &nbsp; &nbsp;
		<input type="radio" id="size_2" value="2" name="size">Size M &nbsp; &nbsp;
	</div>
</div>
<?php } ?>

	<div class="col-md-12" style="padding: 20px"><h3><?php echo $rows->description;?></h3></div>
<script type="text/javascript">
	 $("#parent_detail div div a").click(function(){
	var id=$(this).attr('value');
	var checkedradio = $('[name="size"]:radio:checked').val();
	var total_product=$('#total_product').attr('value');
	total_product=Number(total_product);
	var check=$(this).attr('check');
	if(check==0)
	total_product++;    
	if(total_product>0){
	$('#total_product').html('('+total_product+')');
	$('#total_product').attr('value',total_product);
	$(this).attr('check',1);
	}
	$.get("../../../../index.php?controller=cart",{act:'add',id:id,radio:checkedradio},function(data){
			});
		});

	 $("#size_1").click(function(){
	 	var id_size=$("#parent_detail div div a").attr('value');
	 	$.get("../../../controller/frontend/controller_size.php",{id:id_size,act:'S'},function(data){
	 		$("#price_size").html(data);
	 	});
	 });
	 $("#size_2").click(function(){
	 	var id_size=$("#parent_detail div div a").attr('value');
	 	$.get("../../../controller/frontend/controller_size.php",{id:id_size,act:'M'},function(data){
	 		$("#price_size").html(data);
	 	});
	 });
	 $("#size_3").click(function(){
	 	var id_size=$("#parent_detail div div a").attr('value');
	 	$.get("../../../controller/frontend/controller_size.php",{id:id_size,act:'L'},function(data){
	 		$("#price_size").html(data);
	 	});
	 });
</script>
<?php } ?>
