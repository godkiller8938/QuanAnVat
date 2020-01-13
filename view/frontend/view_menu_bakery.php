<div class="row hidden-xs hidden-sm">
	<div class="col-md-12">
		<div class="card-desk">
			<h4 style="margin-bottom: 0px;"><i class="glyphicon glyphicon-list"></i> BAKERY MENU</h4>
			<ul class="menu_sp">
				<?php 
		foreach($category_bakery as $rows)
		{
		 ?>
				<li><a style="display: block;" href="banh-ngot/<?php echo remove_unicode($rows->category_name)?>-<?php echo $rows->id_category;?>"><i class="glyphicon glyphicon-adjust"></i> <?php echo $rows->category_name;?></a></li>
		<?php } ?>
			</ul>
		</div>
	</div>
</div>