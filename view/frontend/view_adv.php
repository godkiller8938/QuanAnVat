<div class="item active">
<?php if(file_exists("public/upload/adss/".$arr[0]->img)){ ?>
  <img src="public/upload/adss/<?php echo $arr[0]->img; ?>" width="100%" alt="Los Angeles">
  <?php } ?>
</div>
<?php for($i=1;$i<$total;$i++){ ?>
<div class="item">
  <?php if(file_exists("public/upload/adss/".$arr[$i]->img)){ ?>
  <img src="public/upload/adss/<?php echo $arr[$i]->img; ?>" width="100%" alt="Los Angeles">
  <?php } ?>
</div>
<?php } ?>