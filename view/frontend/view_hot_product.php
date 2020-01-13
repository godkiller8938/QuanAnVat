<div class="col-md-12" id="sp">
          <h4 style="width: 210px"><i class="glyphicon glyphicon-align-justify"></i> SẢN PHẨM NỔI BẬT</h4>
</div>
<div class="row">
  <div class="col-md-12">
  <?php 
    foreach($arr as $rows)
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
          <h5 style="color: #D74D33;" class="text-center"><?php echo number_format($rows->price);?>₫</h5>
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
          <?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                  <a href="trang-chu?p=<?php if($p>1) echo $p=$p-1; else echo $p; ?>">&laquo;</a></li>
            <?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li class="active"><a><?php if($p>0&&$p<=$num_page) echo $p; else echo "1"; ?></a></li>
              <?php $p=isset($_GET["p"])?$_GET["p"]:1;settype($p,'int'); ?>
                <li><a href="trang-chu?p=<?php if($p<$num_page) echo $p=$p+1; else echo $p; ?>">&raquo;</a></li>
                <li><a>Tổng</a></li>
                <li><a href="trang-chu?p=<?php echo $num_page; ?>"><?php echo $num_page; ?></a></li>
            </ul>
      </h5>
  </div>
<!--end phan trang-->
