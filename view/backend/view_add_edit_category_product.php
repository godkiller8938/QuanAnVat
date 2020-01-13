<?php if($security->id_security==1){ ?>

		<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thêm sửa danh mục sản phẩm</div>
				<form method="post" action="<?php echo $form_action ?>">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td class="text-right">Danh mục</td>
								<td><input type="text" name="category_name" value="<?php echo isset($arr->category_name)?$arr->category_name:''; ?>" class="form-control"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Lưu" class="btn btn-primary"> <input type="reset" value="Nhập lại" class="btn btn-danger"></td>
							</tr>
						</table>
					</div>
				</form>
<?php } ?>
		