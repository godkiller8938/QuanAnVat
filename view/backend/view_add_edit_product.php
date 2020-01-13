<?php if($security->id_security==1){ ?>
			<div class="bg-primary text-white" style="padding: 10px;font-size: 17px">Thêm sửa sản phẩm</div>
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action ?>">
					<div class="table-responsive">
					<table class="table">
					<tr>
						<td class="text-right">Tên sản phẩm</td>
						<td><input type="text" name="product_name" value="<?php echo isset($arr->product_name)?$arr->product_name:''; ?>" required class="form-control"></td>
					</tr>
					<tr>
						<td class="text-right">Mô tả</td>
						<td><input type="text" name="description" value="<?php echo isset($arr->description)?$arr->description:''; ?>" required class="form-control"></td>
					</tr>
					<tr>
						<td class="text-right">Giá 1</td>
						<td><input type="number" name="price" placeholder="Giá của sản phẩm hoặc giá của size S" value="<?php echo isset($arr->price)?$arr->price:''; ?>" required class="form-control"></td>
					</tr>
					<tr>
						<td class="text-right">Giá 2</td>
						<td><input type="number" name="price_1" placeholder="Nếu sản phẩm có size M thì nhập giá vào. Không thì bỏ qua" value="<?php echo isset($arr->price)?$arr->price_1:''; ?>" class="form-control"></td>
					</tr>
					<tr>
						<td class="text-right">Giá 3</td>
						<td><input type="number" name="price_2" placeholder="Nếu sản phẩm có size L thì nhập giá vào. Không thì bỏ qua" value="<?php echo isset($arr->price)?$arr->price_2:''; ?>" class="form-control"></td>
					</tr>
					<tr>
						<td class="text-right">Danh mục</td>
						<td>
						<select name="id_category" style="width: 300px;">
									<?php 
							$category=$this->model->get_all("select * from tbl_category_product order by id_category desc");
							foreach($category as $rows)
							{
									 ?>
							<option
							<?php if(isset($arr->id_category)&&$arr->id_category==$rows->id_category){ ?>
								selected <?php } ?> value="<?php echo $rows->id_category; ?>" > <?php echo $rows->category_name; ?>
							</option>
							<?php } ?>
						</select>
						</td>
					</tr>
					<tr>
						<td class="text-right">Phân loại</td>
						<td>
							<input type="radio" value="1" <?php if(isset($arr->classify)&&$arr->classify==1){?> checked <?php } ?> required name="classify">Đồ uống &nbsp; &nbsp;
							<input type="radio" value="0" <?php if(isset($arr->classify)&&$arr->classify==0){?> checked <?php } ?> required name="classify">Món ăn &nbsp; &nbsp;
							<input type="radio" value="2" <?php if(isset($arr->classify)&&$arr->classify==2){?> checked <?php } ?> required name="classify">Bánh ngọt
						</td>
					</tr>
					<tr>
						<td class="text-right">Sản phẩm nổi bật</td>
						<td><input type="checkbox" <?php if(isset($arr->hot_product)&&$arr->hot_product==1){?> checked <?php } ?> name="hot_product"> (Ấn vào nếu muốn hiển thị ở sản phẩm nổi bật)</td>
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