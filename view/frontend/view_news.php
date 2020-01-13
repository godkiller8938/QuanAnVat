
<div class="col-md-12" style="padding-left: 0px;" id="sp">
	<h4>TIN TỨC</h4>
</div>
<div class="row" style="padding-left: 15px;padding-right: 15px;">
	<div class="col-md-12">
	<?php 
		foreach($arr as $rows)
		{
		 ?>
		<div class="col-md-12" >
			<div class="card-desk" style="padding-left: 20px;padding-right: 20px;">
				<div class="row text-center">
					<h3 class="text-center" style="font-weight: bold;"><?php echo $rows->title; ?></h3>
					<?php if(file_exists("public/upload/news/".$rows->img)){ ?>
					<img style="max-width: 200px" class="img-thumbnail" src="public/upload/news/<?php echo $rows->img;?>">
					<?php } ?>
				</div>
				<div class="row">
					<div class="text-center"><?php echo $rows->content; ?></div>
				</div>
			</div>
		</div>
	<?php } ?>
		

	</div>
</div>

