<div class="col-md-12" style="padding-left: 0px;margin-bottom: 15px" id="sp">
  <h4 style="width: 170px"><i class="glyphicon glyphicon-phone"></i> KHÁCH HÀNG</h4>
</div>
<?php if(isset($_SESSION["cart"])){ ?>
<div class="row" style="padding: 15px;">
  <div class="col-md-12 text-center">
          <form name="form_customer" action="thong-tin-khach-hang" method="post">
            <div class="table table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th width="150px">Họ tên:</th>
                    <th ><input type="text" name="name" value="<?php echo isset($_SESSION['customer'])?$_SESSION['customer']['name']:''; ?>" required></th>
                  </tr>
                  <tr>
                    <th>Địa chỉ:</th>
                    <th ><input type="text" name="address" value="<?php echo isset($_SESSION['customer'])?$_SESSION['customer']['address']:''; ?>" required></th>
                  </tr>
                  <tr>
                    <th>Số điện thoại:</th>
                    <th ><input type="number" name="phone_number" value="<?php echo isset($_SESSION['customer'])?$_SESSION['customer']['phone_number']:''; ?>" required></th>
                  </tr>
                  <tr>
                    <th>Ghi chú:</th>
                    <th ><input type="text" name="note" value="<?php echo isset($_SESSION['customer'])?$_SESSION['customer']['note']:''; ?>"></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <td colspan="6"><div class="text-right"><a href="gio-hang" class="btn btn-primary">Trở về</a>
                      <input type="submit" onclick="return check();" class="btn btn-danger" value="Tiếp tục"></div></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          
       </div>
     </div>
     <?php }else {
     echo "<script>location.href='trang-chu';</script>";
     } ?>

    