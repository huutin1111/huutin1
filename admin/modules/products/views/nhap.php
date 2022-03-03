<form method="POST" action="capnhat.php" enctype="multipart/form-data">
                       <div style=" display: flex;">
                            <div style="width: 400px;">
                                <label for="product-name">Tên sản phẩm</label>
                                <input type="text" name="name" id="title" value="<?php echo $value['name']; ?>" style="display: block;width: 300px;">

                                <label for="product-code">Mã sản phẩm</label>
                                <input type="text" name="code" id="product-code" value="<?php echo $value['code']; ?>"style="display: block;width: 300px;">

                                <label for="price">Giá sản phẩm</label>
                                <input type="text" name="price" id="price" value="<?php echo $value['price']; ?>" style="display: block;width: 300px;">

                                <label for="price">Giá khuyến mãi</label>
                                <input type="text" name="promotional_price" id="price" value="<?php echo $value['promotional_price']; ?>" style="display: block;width: 300px;">

                                <label for="price">Số lượng</label>
                                <input type="text" name="quantity" id="price" value="<?php echo $value['quantity']; ?>" style="display: block;width: 300px;">

                                <label for="price">Người tạo</label>
                                <input type="text" name="user" id="price" value="<?php echo $value['user']; ?>" style="display: block;width: 300px;">

                            </div>
                            <div style="width: 400px;">
                                <label for="price">Vỏ</label>
                                <input type="text" name="screen" id="price"value="<?php echo $value['screen']; ?>" style="display: block;width: 300px;">

                                <label for="price">Xốp</label>
                                <input type="text" name="ram" id="price" value="<?php echo $value['ram']; ?>"style="display: block;width: 300px;">

                                <label for="price">Quay nón</label>
                                <input type="text" name="cpu" id="price" value="<?php echo $value['cpu']; ?>"style="display: block;width: 300px;">


                                <label for="price">Đường kính</label>
                                <input type="text" name="memory" id="price" value="<?php echo $value['memory']; ?>"style="display: block;width: 300px;">

                                <label for="price">Kính chắn gió</label>
                                <input type="text" name="operating_system" id="price" value="<?php echo $value['operating_system']; ?>" style="display: block;width: 300px;">

                                <label for="price">Chứng chỉ</label>
                                <input type="text" name="front_camera" id="price" value="<?php echo $value['front_camera']; ?>" style="display: block;width: 300px;">

                                <label for="price">màu</label>
                                <input type="text" name="rear_camera" id="price" value="<?php echo $value['rear_camera']; ?>"style="display: block;width: 300px;">
                        </div>
                        <div style="width: 400px;">
                                <label for="status">Độ hot sản phẩm</label>
                                <select name="level" style="display: block;width: 300px;">
                                    <option value="hot">sản phẩm hot</option>
                                    <option value="normal"> sản phẩm bình thường</option>
                                    <option value="discount">sản phẩm giảm giá</option>
                                </select>
                                <label for="status">Trạng thái</label>
                                <select name="status" style="display: block;width: 300px;">
                                    <option value="còn hàng">còn hàng</option>
                                    <option value="hết hàng">hết hàng</option>
                                    <option value="hàng sắp về">hàng sắp về</option>
                                </select>


                                <label for="category ">Danh mục sản phẩm</label>
                                <select name="id_category" style="display: block;width: 300px;">
                                    <?php if(!empty($data)) foreach ($data[0] as  $value) { ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                    <?php }; ?>
                                </select>
                                <label for="brand">Thương hiệu sản phẩm</label>
                                <select name="id_brand" style="display: block;width: 300px;">
                                    <?php if(!empty($data)) foreach ($data[1] as  $value) { ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                    <?php }; ?>
                                </select>

                               <?php if(!empty($data)) foreach ($data as $value) {?>  
                               <label>Hình ảnh</label>
                                <div id="uploadFile">
                                    <input type="file" name="image" id="upload-thumb">
                                    <img src="<?php echo $value['image']; ?>">
                                </div>
                                 <?php };?>
                        </div>
                        </div>

                            <label for="desc">Mô tả</label>
                        <textarea name="description" id="desc" class="ckeditor"><?php echo $value['description']; ?></textarea>
