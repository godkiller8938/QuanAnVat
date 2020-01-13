<div class="col-md-12" style="padding-left: 0px;margin-bottom: 15px" id="sp">
  <h4 style="width: 135px"><i class="glyphicon glyphicon-shopping-cart"></i> ĐƠN HÀNG</h4>
</div>
<?php if(isset(($_SESSION["cart"]))&&isset(($_SESSION['customer']))){ ?>
<div class="row" style="padding: 15px;">
  <div class="col-md-12 text-center">
          <form action="index.php?controller=customer&act=add" method="post">
            <div class="table table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th width="150px">Họ tên:</th>
                    <th ><?php echo $_SESSION['customer']['name']; ?></th>
                  </tr>
                  <tr>
                    <th>Địa chỉ:</th>
                    <th ><?php echo $_SESSION['customer']['address']; ?></th>
                  </tr>
                  <tr>
                    <th>Số điện thoại:</th>
                    <th ><?php echo $_SESSION['customer']['phone_number']; ?></th>
                  </tr>
                  <tr>
                    <th>Ghi chú:</th>
                    <th ><?php echo $_SESSION['customer']['note']; ?></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <td colspan="6"><div class="text-right"><a href="khach-hang" class="btn btn-primary">Chỉnh sửa</a>
                      <a href="dat-hang" class="btn btn-danger">Đặt hàng</a></div></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          
       </div>
     </div>

<div class="row" style="padding: 15px;">
  <div class="col-md-12">
          <form action="index.php?controller=cart&act=update" method="post">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="150px" >Tên sản phẩm</th>
                    <th >Giá bán lẻ</th>
                    <th width="120px" >Số lượng</th>
                    <th style="width: 20px;">Size</th>
                    <th >Thành tiền</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($_SESSION["cart"] as $product)
                    {
                   ?>
                  <tr>
                    <td><?php echo $product["name"]; ?></a></td>
                    <td> <?php echo number_format($product["price"]); ?>₫ </td>
                    <td><?php echo $product["number"]; ?></td>
                    <td><?php echo $product["size"]; ?></td>
                    <td><p><b><?php echo number_format($product["price"]*$product["number"]); ?>₫</b></p></td>
                    
                  </tr>
                  <?php } ?>
                </tbody>
                
              </table>
            </div>
          </form>
          <div class="text-right" style="font-weight: bold;font-size: 20px"> Tổng tiền thanh toán:<span style="color: #D74B33;"> 
            <?php echo number_format($this->cart_total()); ?>₫ <br></span>
            <?php if($this->cart_total() > 0){ ?>
            <a  href="sua-gio-hang" class="btn btn-primary">Chỉnh sửa</a> <?php } ?></div>
       </div>
     </div>
     <?php } else{
     echo "<script language='javascript'>location.href='trang-chu';</script>";
     } ?>