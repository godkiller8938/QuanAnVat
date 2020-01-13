<?php if($security->id_security==1){ ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thêm sửa quảng cáo</div>
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<div class="table-responsive">
					<table class="table">
						<tr>
							<td class="text-right">Tiêu đề</td>
							<td><input type="text" value="<?php echo isset($arr->title)?$arr->title:''; ?>" name="title" required class="form-control"></td>
						</tr>
						<tr>
							<td class="text-right">Ảnh</td>
							<td><input type="file" name="img"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Lưu" class="btn btn-primary"> <input type="reset" value="Nhập lại" class="btn btn-danger"></td>
						</tr>
					</table>
				</div>
				</form>
		<?php } ?>

