<?php
  include "includes/autoloader.inc.php";
  $categories = new Categories;
  $cart = new Cart;
  $data_cate= $categories->getSex();
  $data_carts= $cart->get_subtotal();
  if(isset($_SESSION['cartview'])){
    $data_cart = $_SESSION['cartview'];
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dukka Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="layouts/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/css/style.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="layouts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="layouts/css/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="layouts/css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        dukkastore@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +84 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                  <div id="info">
                    <span class="x" onclick="closeinfo()" title="Close Overlay">×</span>
                    <a href="?act=profile">Thông Tin</a>
                    <a href="?act=logout">Đăng Xuất</a>
                  </div>
                  <?php if(isset($_SESSION['login'])){?>

                  <?php echo'<a onclick="openinfo()"  class="login-panel"><i class="fa fa-user"></i>'.$_SESSION['login'].' <i class="fa fa-angle-down"></i></a>';}else { ?>
                    <a href="?act=login" class="login-panel"><i class="fa fa-user"></i>Đăng Nhập</a>
                    <a  href="?act=register" class="login-panel" style="margin-right:25px;"><i class="fa fa-user"></i>Đăng Kí</a>
                    <?php }?>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="layouts/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">Vietnam</option>
                            <option value='yu' data-image="layouts/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">English </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="layouts/img/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                             <div class="nav-item">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li <?php if(!isset($_GET['act'])){echo 'class="active"';}?>><a href="index.php">Trang Chủ</a></li>
                        <li <?php if(isset($_GET['act'])&& $_GET['act']=='shop'){echo 'class="active"';}?>><a href="#">Sản Phẩm</a>
                            <ul class="dropdown">
                                  <?php foreach ($data_cate as $cate): ?>
                                <li><a href="?act=shop&id_sex=<?php echo $cate['id_sex']?>"><?php echo $cate['name_sex'] ?></a></li>
                                 <?php endforeach; ?>
                            </ul>
                        </li>
                        <li <?php if(isset($_GET['act'])&& $_GET['act']=='blog'){echo 'class="active"';}?>><a href="?act=blog">Tin Tức</a></li>
                        <li <?php if(isset($_GET['act'])&& $_GET['act']=='contact'){echo 'class="active"';}?>><a href="?act=contact">Liên Hệ</a></li>
                        <li <?php if(isset($_GET['act'])&& $_GET['act']=='about'){echo 'class="active"';}?>><a href="?act=about">Giới Thiệu</a></li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>

        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="search-box">
                                <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <?php if(isset($_GET['act'])&& $_GET['act']=='shop'){?>
      <input type="text" placeholder="Search.." name="search" id="search">
      <button type="submit" name="submitsearch" class="click" onclick="closeSearch()"><i class="fa fa-search"></i></button>

  <?php } else { ?>
    <form action="?act=shop" method='post'>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name="submitsearch"><i class="fa fa-search"></i></button>
    </form>
  <?php } ?>
  </div>
</div>
                                <a class="search-btn" onclick="openSearch()">
                                  <i class="ti-search"></i>
                                </a>
                            </li>
                            <li class="heart-icon">
                                <a href="?act=profile">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="?act=shopping_cart">
                                    <i class="icon_bag_alt"></i>
                                    <span>
                                      <?php
                                        if(isset($_SESSION['cartview']) && $_SESSION['cartview'] !=NULL){
                                          $count = count($_SESSION['cartview']);
                                          echo $count;
                                        }else {
                                          echo "0";
                                        }
                                      ?>
                                    </span>
                                </a>
                                <?php if(isset($_SESSION['cartview'])  && $_SESSION['cartview'] != null){?>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                              <?php foreach ($data_cart as $cart): ?>
                                                <tr>
                                                    <td class="si-pic"><img width="50" src="layouts/img/products/<?php echo $cart['img']?>" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p><?php echo $cart['cost']?> x <?php echo $cart['qty']?></p>
                                                            <h6><?php echo $cart['name']?></h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <a href="?act=delete_cart&id=<?php echo $cart['key']?>"><i class="ti-close delete_cart"></i></a>
                                                    </td>
                                                </tr>
                                              <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$<?php echo $data_carts ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="?act=shopping_cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="?act=check_out" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                              <?php }else {
                                echo '<div class="cart-hover">
                                <a  class="primary-btn view-card">Bạn chưa có món hàng nào</a></div>';

                              }?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header End -->
