<?php
session_start();
// session_destroy();
include "layouts/header.php";
  $categories = new Categories;
  $add_cart = new Cart;
  $products = new Products;
  $login = new Login;
  $comment = new Comment;
  $news = new News;
  $user = new User;
  $collections = new Collection;
  $slider = new Slider;
  if(isset($_GET['act']))
  {
    switch ($_GET['act']) {
      case 'shop':
     if(isset($_GET['id_sex'])&&$_GET['id_sex']>0){
       $id_sex = $_GET['id_sex'];

     } else {
       $id_sex = "0";
     }
     if(isset($_POST['submitsearch'])){
       if($_POST['search']!=NULL){
         $search = $_POST['search'];
       }
      }  else {
        $search = "0";
      }
      $count_pros = $products->getCountProduct();
      $count_pros_sex = $products->getCountProductBySex($id_sex);
      $count_pro = count($count_pros);
      $count_pro_sex = count($count_pros_sex);
      $data_all = $products->getAllProduct();
          $data_cate = $categories->getCate();
          $data_sex = $categories->getSex();
      if(isset($_GET['page'])&& $_GET['page']>0){
            $page = $_GET['page'];

            } else {
                $page = 1;
            }
      $data_total = $products->totalQuantity($id_sex);
      $total = count($data_total);
      $pagination = $products->paginationProduct($page, $total,$id_sex);
      $data_serch = $products->getProductAll($id_sex,$search,$page);


        include "view/shop.php";
        break;
      case 'blog':
      $data_blog = $news->getSpecialNew();
        $data_newest = $news->getNewest();
        include "view/blog.php";
        break;
      case 'collection':
        if(isset($_GET['id']) && $_GET['id'] != null)
        {
          $id = $_GET['id'];
          $img = $_GET['id'];
          $collection = $collections->getDetailCollection($id);
          $img = $collections->getImageCollection($img);
        }
        include "view/collection.php";
        break;
      case 'logout':
        unset($_SESSION['login']);
        unset($_SESSION['user']);
        unset($_SESSION['id']);
        echo "<script>window.location.assign('index.php?act=login')</script>";
        break;
      case 'profile':
        if(isset($_SESSION['id'])&& !isset($_POST['update_profile']))
        {
          $id = $_SESSION['id'];
          $users=$user->getUserId($id);


        }else {
          $id = $_SESSION['id'];
          $users=$user->getUserId($id);
          $email =$_POST['email'];
          $pass = md5($_POST['pass']);
          $new_pass = md5($_POST['new_pass']);
          $new_pass_again = md5($_POST['new_pass_again']);
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $fullname = $_POST['fullname'];
          if($pass==md5('') && $new_pass== md5('') && $new_pass_again==md5('')){
            $user->upDateUser1($id,$fullname,$address,$phone);
            unset($_SESSION['login']);
            $_SESSION['login']=$fullname;
            echo "<script>alert('Bạn đã đổi thông tin thành công')</script>";
            echo "<script>window.location.assign('index.php?act=profile')</script>";
          }else {

            if($pass == $users['password'] && $new_pass == $new_pass_again){
              $user->upDateUser2($id,$fullname,$address,$phone,$new_pass);
              unset($_SESSION['login']);
              $_SESSION['login']=$fullname;
              echo "<script>alert('Bạn đã đổi thông tin thành công')</script>";
              echo "<script>window.location.assign('index.php?act=profile')</script>";

            }else {
              echo "<script>alert('Mật khẩu hiện tại nhập chưa đúng hoặc mật khẩu mới không trùng nhau')</script>";
            }
          }
        }
        include "view/profile.php";
        break;
      case 'add_cart':
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          if(isset($_POST['add_cart'])){
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $add = $add_cart->add_item($id,$quantity);
            if (isset($_SESSION['cartview'])) {
              var_dump($_SESSION['cartview']);
            }
          }

        }
        echo "<script>window.location.assign('?act=shopping_cart')</script>";
        break;
      case 'delete_cart':
      if(isset($_GET['id'])){
        $id =$_GET['id'];
        unset($_SESSION['cartview'][$id]);
        if(isset($_SESSION['cartview']) && $_SESSION['cartview'] <= 0){
          unset($_SESSION['cartview']);
        }
          echo "<script>window.location.assign('?act=shopping_cart')</script>";
      }
        break;
      case 'contact':
        include "view/contact.php";
        break;
      case 'blog_details':
        if(isset($_GET['id']) && $_GET['id'] != null)
        {
          $id = $_GET['id'];
          $img = $_GET['id'];
          $new = $news->getDetailNew($id);
          $img = $collections->getImageCollection($img);
        }
        include "view/blog_details.php";
        break;
      case 'shopping_cart':
      if(isset($_SESSION['cartview'])){
        $data_cart = $_SESSION['cartview'];
        $cart = new Cart;
        $data_carts= $cart->get_subtotal();
      }
        include "view/shopping_cart.php";
        break;
      case 'admin':

          echo "<script>window.location.assign('admin')</script>";

          break;
      case 'product':
          if(isset($_GET['id']) && $_GET['id'] != null){
             $id= $_GET['id'];
             $comments = $comment->getComment($id);
             $product = $products->getDetailProduct($id);
             $id_cate = $product['id_cate'];
            $product_cate = $products->getProductDetailByCate($id_cate);
          }
          include "view/product.php";
          break;
          case 'check_out':
            if(isset($_POST['submitmuahang'])){

              $id_user = $_SESSION['id'];
              $pricetotal= $add_cart->get_subtotal();
              $name = $_POST['name'];
              $address = $_POST['address'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $add = $add_cart->insert_cart($id_user, $pricetotal, $name, $address,  $email,$phone);
              $data_co = $_SESSION['cartview'];
              $_SESSION['Ma_GioHang']= $add_cart->mahoadon()['id_cart'];
              $mahd = $_SESSION['Ma_GioHang'];
              foreach($data_co as $item){
                    $addhoadon= $add_cart -> insert_detail_cart($mahd, $item['key'],$item['qty'], $item["cost"]*$item["qty"]);
              }
              unset($_SESSION['cartview']);
              unset($_SESSION['Ma_GioHang']);
              echo "<script>alert('bạn đã mua hàng thành công ')</script>";
              echo "<script>window.location.assign('index.php')</script>";
            }
            if(isset($_SESSION['cartview']) &&$_SESSION['cartview']!=null)
            {
              $data_co = $_SESSION['cartview'];
              $cart = new Cart;
              $data_carts= $cart->get_subtotal();
            include "view/check_out.php";
          }else {
            echo "<script>alert('bạn chưa mua sản phẩm nào')</script>";
            echo "<script>window.location.assign('?act=shopping_cart')</script>";
          }
            break;
      case 'register':
        if(isset($_POST['register']))
          {
          $fullname="";
          $address="";
          $pass_again =$_POST['pass_again'];
          $email=$_POST['user'];
          $password=$_POST['password'];
          $phone="";
          $permission=0;
          if($email != null && $password !=null && $password == $pass_again){
          $register=$user->getRegister($fullname,$address,$email,$phone,md5($password),$permission);
            if($register = true){
              echo "<script>alert('Bạn đã tạo tài khoản thành công')</script>";
              echo "<script>window.location.assign('?act=login')</script>";
            }
          }else {
            echo "<script>alert('Bạn nhập thiếu dữ liệu hoặc Mật khẩu không khớp nhau')</script>";
          }
          }
        include "view/register.php";
        break;
      case 'login':
        if(isset($_GET['checkout'])){
          if(isset($_POST['login']))
          {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $login_ = $login->getLogin($email,md5($pass));
            if($login_){
                if($login_['permission'] == 0)
                {
                  $_SESSION['login'] = $login_['fullname'];
                  $_SESSION['user'] = $login_;
                  $_SESSION['id'] = $login_['id_user'];
                  echo "<script>window.location.assign('index.php?act=check_out')</script>";
                }else {
                  $_SESSION['admin'] = $login_['fullname'];
                  echo "<script>window.location.assign('?act=admin')</script>";
                }
            }else {
              echo "<script>window.location.assign('index.php?act=login')</script>";
            }

          }else {
            include "view/login.php";
          }
        }
        if(isset($_POST['login']))
        {
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          $login_ = $login->getLogin($email,md5($pass));
          if($login_){
              if($login_['permission'] == 0)
              {
                $_SESSION['login'] = $login_['fullname'];
                $_SESSION['user'] = $login_;
                $_SESSION['id'] = $login_['id_user'];
                echo "<script>window.location.assign('index.php?act=profile')</script>";
              }else {
                $_SESSION['admin'] = $login_['fullname'];
                echo "<script>window.location.assign('?act=admin')</script>";
              }
          }else {
            echo "<script>window.location.assign('index.php?act=login')</script>";
          }

        }else {
          include "view/login.php";
        }
        break;
      case 'about':
        include "view/faq.php";
        break;
      default:
        $data_news= $news->getNew();
        $data_collection= $collections->getCollection();
        $data_sex= $categories->getSex();
        $data_slider= $slider->getSlider();
        $data_women= $products->getProductWomen();
        $data_men= $products->getProductmen();
        include "layouts/home.php";
        break;
    }
  }else {
    $data_news= $news->getNew();
    $data_collection= $collections->getCollection();
    $data_sex= $categories->getSex();
    $data_slider= $slider->getSlider();
    $data_women= $products->getProductWomen();
    $data_men= $products->getProductmen();
    include "layouts/home.php";
  }
  include "layouts/footer.php";
 ?>
