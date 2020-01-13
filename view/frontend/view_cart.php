<div class="col-md-12" style="padding-left: 0px;margin-bottom: 15px" id="sp">
  <h4 style="width: 135px"><i class="glyphicon glyphicon-shopping-cart"></i> GIỎ HÀNG</h4>
</div>
<?php if(($_SESSION["cart"])){ ?>
<div class="row" style="padding: 15px;">
  <div class="col-md-12">
          <form action="cap-nhat-don-hang" method="post">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th >Tên sản phẩm</th>
                    <th >Giá bán lẻ</th>
                    <th width="80px" >Số lượng</th>
                    <th style="width: 20px;">Size</th>
                    <th >Thành tiền</th>
                    <th style="width: 20px">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($_SESSION["cart"] as $product)
                    {
                   ?>
                  <tr>
                    <td id="detail"><a href="" value="<?php echo $product["product_id"]?>" data-toggle="modal" data-target="#myModal"><?php echo $product["name"]; ?></a></td>
                    <td> <?php echo number_format($product["price"]); ?>₫ </td>
                    <td class="text-center"><div style="width: 50px;"><?php echo $product["number"]; ?></div></td>
                    <td><?php echo $product["size"]; ?></td>
                    <td><p><b><?php echo number_format($product["price"]*$product["number"]); ?>₫</b></p></td>
                    <td><a href="xoa-<?php echo $product["product_id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i>Xóa</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6"><div style="float: left;"><a onclick="return location.href='xoa-toan-bo'" class="btn btn-danger">Xóa toàn bộ</a></div><div class="text-right"> <a href="trang-chu" class="btn btn-primary">Tiếp tục mua hàng</a>
                      <a onclick="return location.href='sua-gio-hang'" class="btn btn-danger">Sửa</a></div></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <div class="text-right" style="font-weight: bold;font-size: 20px"> Tổng tiền thanh toán:<span style="color: #D74B33;"> 
            <?php echo number_format($this->cart_total()); ?>₫ <br></span>
            <?php if($this->cart_total() > 0){ ?>
            <a onclick="return location.href='khach-hang'" class="btn btn-primary">Thanh toán</a> <?php } ?></div>
       </div>
     </div>
     <?php } else{ ?>
     <div class="row" style="padding: 15px;">
      <div class="col-md-12 text-center">
        <h3>Giỏ hàng hiện đang trống</h3>
        <a class="btn btn-primary" href="trang-chu">Quay lại mua hàng</a>
      </div>
    </div>
    <?php } ?>