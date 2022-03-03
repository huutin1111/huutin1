<div class="sidebar fl-left">
   
    <div class="section" id="filter-product-wp">
        <div class="section-head">
            <h3 class="section-title">Bộ lọc</h3>
        </div>
        <div class="section-detail">
            <form method="POST" action="?modules=search&controllers=index&action=filter">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Giá</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-price" id="r-price1" value="0,500000"></td>
                            <td><label for="r-price1">Dưới 300.000đ</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" id="r-price2" value="500000,1000000"></td>
                            <td><label for="r-price2">300.000đ - 600.000đ</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" id="3" value="1000000,5000000"></td>
                            <td><label for="3">600.000đ - 1.000.000đ</label></td>
                        </tr>
                       
                        <tr>
                            <td><input type="radio" name="r-price" id="5" value="10000000,100000000"></td>
                            <td><label for="5">Trên 1.000.000đ</label></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Hãng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i1" value="2"></td>
                            <td><label for="i1">ANDES</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i2" value="1"></td>
                            <td><label for="i2">NAPOLY</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i3" value="3"></td>
                            <td><label for="i3">ADIDAS</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i4" value="4"></td>
                            <td><label for="i4">NIKE</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-brand" id="i1" value="2"></td>
                            <td><label for="i1">NÓN ƠN</label></td>
                        </tr>
                       
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Loại</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-category" id="a1" value="13"></td>
                            <td><label for="a1">NÓN 3/4 </label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-category" id="a2" value="14"></td>
                            <td><label for="a2">NÓN FULLFACE</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-category" id="a3" value="12"></td>
                            <td><label for="a3">NÓN NỬA ĐẦU</label></td>
                        </tr>
                    </tbody>
                </table>
                <input style="width: 100%;color: white; background-color: #95d895;border-radius: 5px; border: none; " type="submit" name="btn_filter" value="Áp dụng">
            </form>
        </div>
    </div>
    <div class="section" id="banner-wp">
        <div class="section-detail">
            <a href="?page=detail_product" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>
</div>