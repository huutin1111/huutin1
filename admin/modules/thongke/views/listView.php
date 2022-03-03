<?php get_header(); ?>

<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng thành công</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(69)</span></a> |</li>
                            <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li>
                            <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã đơn hàng</span></td>
                                    <td><span class="thead-text">Thời gian đặt</span></td>
                                    <td><span class="thead-text">Thời gian hoàn thành</span></td>
                                    <td><span class="thead-text">Khách hàng</span></td>
                                    <td><span class="thead-text">Tổng số mặt hàng</span></td>
                                    <td><span class="thead-text">Tổng tiền</span></td>
                                    <td><span class="thead-text">Phương thức thanh toán</span></td>
                                    <td><span class="thead-text">Hoàn tác</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $tong=0; ?>
                                <?php if(!empty($data['0'])) foreach ($data['0'] as $key => $value) {?>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo ($key +1); ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['code']; ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['create_date']; ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['date_confirm']; ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['fullname']; ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['total_num_product']; ?></span></td>
                                    <td><span class="tbody-text"><?php  echo $value['total_price']; ?></h3></span>
                                    <td><span class="tbody-text"><?php  echo $value['payment_method']; ?></span></td>
                                    <td><span class="tbody-text" style="color: green;">Thành công</span></td>
                                </tr>

                               
                                    <?php $tong=$tong+$value['total_price']; ?>
                               
                                
                                <?php }; ?>


                                 <tr>
                                    
                                    <td><span class="tbody-text">Tổng Danh Thu</span></td>
                                   
                                    <td><span class="tbody-text" style="color: green;"> <?php  echo $tong; ?></span></td>



                                </tr>
                               

                                <tr>

                                   
                                    
                                    <td><span class="tbody-text">Doanh thu theo tháng</span></td>

                                     <td><span class="tbody-text">

                                        <select onblur="kiemtrathang()" id=thang>
                                         
                                         <option  value="1" >1</option>
                                          <option value="2">2</option>
                                           <option value="3">3</option>
                                            <option value="4">4</option>
                                             <option value="5">5</option>
                                              <option value="6">6</option>
                                               <option value="7">7</option>
                                                <option value="8">8</option>
                                                 <option value="9">9</option>
                                                  <option value="10">10</option>
                                                   <option value="11">11</option>
                                                    <option value="12">12</option>
                                         </select>
                                        

                                          </span></td>
                                   
                                    <td><span class="tbody-text" style="color: green;"> <p id="loiHT" ></p>  đồng</span></td>


                                    
                                </tr>

                                          

                 <script>
    function kiemtrathang() {
        // Kiểm tra họ tên
        var ht = document.getElementById('thang').value;
        ht=parseInt(ht);
        if(ht==1||ht==2||ht==3||ht==6||ht==7||ht==8||ht==9||ht==10||ht==11||ht==12){

        
            document.getElementById('loiHT').innerHTML = "0";

        }else if(ht==4){
            
            document.getElementById('loiHT').innerHTML = "500000";
        }else{
            document.getElementById('loiHT').innerHTML = <?php  echo $tong-500000; ?>;
        }

       }
</script>











                                    
                            </tbody>
                            
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <?php for ($i=1; $i <= $data['1'] ; $i++) { ?>
                        <li>
                            <a <?php if($i == $data['2']) echo 'style="background-color: green;color:white; border-radius:300px;"';  ?>  href="?modules=products&controllers=index&action=list&page=<?php echo $i; ?>" title=""><?php echo $i; ?></a>
                        </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>