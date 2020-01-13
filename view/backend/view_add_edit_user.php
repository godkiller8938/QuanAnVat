<?php if($security->id_security==1||$arr_check->user==$user){ ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thêm sửa tài khoản</div>
				<form method="post" action="<?php echo $form_action ?>" style="width: 100%">
					<!-- form group -->
					<div class="table-responsive">
					<table class="table">
						<tr>
							<td class="text-right">Họ tên</td>
							<td><input type="text" name="fullname" required value="<?php echo isset($arr->fullname)?$arr->fullname:''; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td class="text-right">Tài khoản</td>
							<td><input type="text" name="user" value="<?php echo isset($arr->user)?$arr->user:''; ?>" <?php if(isset($arr->user)){ ?> disabled <?php }else{ ?> required <?php }?> class="form-control"></td>
						</tr>
				
						<tr>
							<td class="text-right">Địa chỉ</td>
							<td><input type="text" name="address" required value="<?php echo isset($arr->address)?$arr->address:''; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td class="text-right">Sinh nhật</td>
							<td><input type="date" name="birthday" required value="<?php echo isset($arr->birthday)?$arr->birthday:''; ?>" class="form-control"></td>
						</tr>
						<tr>
							<td class="text-right">Số điện thoại</td>
							<td><input type="number" name="phone_number" required value="<?php echo isset($arr->phone_number)?$arr->phone_number:''; ?>" class="form-control"></td>
						</tr>
						<?php if($security->id_security==1){ ?>
						<tr>
							<td class="text-right">Quyền truy cập</td>
							<td><input type="radio" name="id_security" required value="1" >Quản trị &nbsp; &nbsp;
								<input type="radio" name="id_security" required value="0" >Chỉ xem
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td class="text-right">Mật khẩu</td>
							<td><input type="password" name="password" <?php if(isset($arr->user)){ ?> placeholder="Nhập password mới nếu muốn đổi password"  class="form-control"> <?php }else{ ?> required <?php }?></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Lưu" class="btn btn-primary"> <input type="reset" value="Nhập lại" class="btn btn-danger"></td>
						</tr>
					</table>
					</div>
				</form>
				<?php } ?>
	
		