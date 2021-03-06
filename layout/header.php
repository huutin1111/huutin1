<!DOCTYPE html>
<html>
    <head>
        <title>NONT STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>

        <style type="text/css" media="screen">
            #menu ul{
                float: left;
                margin-left: 300px;
                list-style-type: none;
                background: #000000;
                text-align: center;

            }
            #menu ul li{
                color: #f1f1f1;
                display: inline-table;
                width: 200px;
                height: 60px;
                line-height: 60px;
                
            }
            #menu ul li a{
                color: #bbbbbb;
                font-weight: bold;
                font-family: sans-serif;
                font-size: 20px;
                text-decoration: none;
                display: block;
            }
            #menu ul li a:hover{
                
                color: #ffffff;
            }

        </style>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">H??nh th???c thanh to??n</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    
                                    <li>
                                        <a href="?modules=blogs&action=list" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="?modules=contacts&action=introduce" title="">Gi???i thi???u</a>
                                    </li>
                                    <li>
                                        <a href="?modules=contacts&action=contact" title="">Li??n h???</a>
                                    </li>

                                    <li>
                                        <a href="?modules=users&action=index" title=""><?php if(!empty($_SESSION['fullname'])) echo $_SESSION['fullname'];else echo "T??i kho???n"; ?></a>
                                    </li>
                                    <?php if(!empty($_SESSION['fullname'])) { ?>
                                    <li>
                                        <a href="?modules=users&action=logout" title="">(????ng xu???t)</a>
                                    </li>
                                <?php }; ?>
                                   

                                <!--     <li>
                                        <a href="?modules=users&controllers=index&action=index" title="">????ng k??</a>
                                    </li>
                                    <li>
                                        <a href="?modules=users&controllers=index&action=index" title="">????ng nh???p</a>
                                    </li> -->
                                    <a style="display: inline;" href=""></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?modules=home" title="" id="logo" class="fl-left"><img src="public/images/logonont.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="post" action="?modules=search&controllers=index&action=search">
                                    <input type="text" name="key_word" id="s" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!">
                                    <input type="submit" id="sm-s" name="btn_submit" value="T??m ki???m">

                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">T?? v???n</span>
                                    <span class="phone">0377551127</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?page=cart" title="gi??? h??ng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="num"><?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) echo $_SESSION['cart']['info']['num_oder'];else echo '0'; ?></span>
                                    </div>
                                    <div id="dropdown">
                                        <!-- gi??? hangd -->
                                        <p class="desc">C?? <span><?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) echo $_SESSION['cart']['info']['num_oder']; else echo '0'; ?> s???n ph???m</span> trong gi??? h??ng</p>
                                        <ul class="list-cart">
                                            <?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) {?>
                                            <?php foreach ($_SESSION['cart']['buy'] as $key => $value) { ?>
                                            <li class="clearfix">
                                                <a href="" title="" class="thumb fl-left">
                                                    <img src="<?php echo $value['image']; ?>" alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="" title="" class="product-name"><?php echo $value['name']; ?></a>
                                                    <p class="price"><?php echo $value['price'].' .VN??'; ?></p>
                                                    <p class="qty">S??? l?????ng: <span><?php echo $value['qty'] ;?></span></p>
                                                </div>
                                            </li>
                                             <?php }}; ?>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">T???ng:</p>
                                            <p class="price fl-right"><?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) echo $_SESSION['cart']['info']['total']." .VN??"; else echo "0 .VN??"; ?></p>
                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?modules=carts&action=show" title="Gi??? h??ng" class="view-cart fl-left">Gi??? h??ng</a>
                                            <a href="?modules=checkouts&action=index" title="Thanh to??n" class="checkout fl-right">Thanh to??n</a>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>


                       <div id=menu>
                            <ul>
                                <li><a href="?modules=home" title="">HOME</a></li>
                                <li><a href="?modules=products&controllers=index&action=show&id_cat=13" title="">N??N 3/4</a> </li>
                                  <li><a href="?modules=products&controllers=index&action=show&id_cat=12" title="">N??N N???A ?????U</a></li>
                                 <li> <a href="?modules=products&controllers=index&action=show&id_cat=14" title="">N??N FULLFACE</a></li>
                               
                                 <li><a href="?page=category_product" title="">N??N MODULAR</a></li>
                                 
                                 
                            </ul>
                       </div>





                    </div>



                </div>