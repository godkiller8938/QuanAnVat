<div class="col-md-12" style="padding-left: 0px;margin-bottom: 15px" id="sp">
  <h4 style="width: 135px"><i class="glyphicon glyphicon-phone"></i> LIÊN HỆ</h4>
</div>
<div class="col-md-12">
  <h4 style="color: #D74B33;">Mọi thông tin cần tư vấn, thắc mắc, bạn hãy liên hệ với chúng tôi!</h4>
</div>
<div class="row hidden-xs hidden-sm" style="padding: 15px;padding-left: 200px">
  <h4>
	<?php foreach($arr as $rows){ ?>
  <div class="col-md-12">
  	Quản lý: <?php echo $rows->name; ?>
  </div>
  <div class="col-md-12">
  	Số điện thoại: <?php echo $rows->phone_number; ?>
  </div>
  <div class="col-md-12">
  	Địa chỉ: <?php echo $rows->address; ?>
  </div>
  <div style="color: #D74B33;margin-bottom: 20px">*****************</div>
  <?php } ?>
</h4>

</div>

<div class="row hidden-md hidden-lg" style="padding: 15px;padding-left: 30px">
  <h4>
  <?php foreach($arr as $rows){ ?>
  <div class="col-md-12">
    Quản lý: <div style="font-size: 16px;padding: 5px"><?php echo $rows->name; ?></div>
  </div>
  <div class="col-md-12">
    Số điện thoại:<div style="font-size: 16px;padding: 5px"><?php echo $rows->phone_number; ?></div>
  </div>
  <div class="col-md-12">
    Địa chỉ:<div style="font-size: 16px;padding: 5px"><?php echo $rows->address; ?></div>
  </div>
  <div style="color: #D74B33;margin-bottom: 20px">*****************</div>
  <?php } ?>
</h4>

</div>