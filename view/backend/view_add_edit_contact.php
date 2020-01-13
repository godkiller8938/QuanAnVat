
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thêm sửa liên hệ</div>
				<form method="post" action="<?php echo $form_action ?>">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td class="text-right">Họ tên</td>
								<td><input type="text" name="name" required value="<?php echo isset($arr->name)?$arr->name:''; ?>" class="form-control"></td>
							</tr>
							<tr>
								<td class="text-right">Địa chỉ</td>
								<td><input type="text" name="address" required value="<?php echo isset($arr->address)?$arr->address:''; ?>" class="form-control"></td>
							</tr>
							<tr>
								<td class="text-right">Số điện thoại</td>
								<td><input type="text" name="phone_number" required value="<?php echo isset($arr->phone_number)?$arr->phone_number:''; ?>" class="form-control"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Lưu" class="btn btn-primary"> <input type="reset" value="Nhập lại" class="btn btn-danger"></td>
							</tr>
					</table>
				</div>
				</form>
			