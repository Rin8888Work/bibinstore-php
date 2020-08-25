<?php

session_start();
// session_destroy();

if (isset($_SESSION['admin'])) {
    include "layouts/header.php";
    $products = new Products;
    $comments = new Comment;
    $users = new User;
    $sliders = new Slider;
    $categories = new Categories;
    $news = new News;
    $warehouses = new Warehouses;
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
          case 'products':
              $product = $products->getAllProducts();
              $cate = $categories ->getAllCategories();
              $sex = $categories ->getAllSex();
              if(isset($_GET['id_pro'])){
                  $id = $_GET['id_pro'];
                  $proid= $products->getIDProducts($id);
              }
              include "view/products.php";
              break;
          case 'addproducts':
              if(isset($_POST['addnewproducts'])){
                  $name = $_POST['name'];
                  $price = $_POST['price'];
                  $detail = $_POST['detail'];
                  $id_cate = $_POST['cate'];
                  $promossion = $_POST['sale'];
                  $id_sex = $_POST['sex'];
                  $file_name = $_FILES['filename']['name'];
                  $file_size = $_FILES['filename']['size'];
                  $file_temp = $_FILES['filename']['tmp_name'];
                  if (!empty($file_name)) {
                  $uploaded_image = "../layouts/img/products/" .$file_name;
                  move_uploaded_file($file_temp, $uploaded_image);
                  $add=$products->insertProduct($name, $price, $detail, $id_cate, $promossion, $id_sex,$file_name);
                  echo '<script>alert("THÊM THÀNH CÔNG")</script>';
              } else {
                  echo '<script>Chưa Có Hình</script>';
              }
              }
              echo "<script>window.location.assign('?act=products')</script>";
              break;
          case 'updateproducts':
              $id = $_GET['id_pro'];
              if(isset($_POST['updatenewproducts'])){
                  $name = $_POST['name'];
                  $price = $_POST['price'];
                  $detail = $_POST['detail'];
                  $id_cate = $_POST['cate'];
                  $promossion = $_POST['sale'];
                  $img = $_POST['img'];
                  $id_sex = $_POST['sex'];
                  $file_name = $_FILES['filename']['name'];
                  $file_size = $_FILES['filename']['size'];
                  $file_temp = $_FILES['filename']['tmp_name'];
                  if (!empty($file_name)) {
                  $uploaded_image = "../layouts/img/products/" .$file_name;
                  move_uploaded_file($file_temp, $uploaded_image);
                  $updatepro=$products->Updatepro($id,$name, $price, $detail, $id_cate, $promossion, $id_sex, $file_name);
                  echo '<script>alert("SỬA THÀNH CÔNG")</script>';
              } else {
                  $updatepro=$products->Updatepro($id,$name, $price, $detail, $id_cate, $promossion, $id_sex, $img);
                  echo '<script>alert("SỬA THÀNH CÔNG")</script>';
              }
              }
              echo "<script>window.location.assign('?act=products')</script>";
              break;
            case 'form':
                include "view/form.php";
                break;
            case 'detail_cart':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $detai_cart = $warehouses->getAllWarehousesId($id);
                }
                include "view/detail_cart.php";
                break;
            case 'detail_comment':
                if (isset($_GET['product'])) {
                    $id = $_GET['product'];
                    $detail_cmt_pro = $comments->getDetailCmtPro($id);
                }
                if (isset($_GET['stt'])) {
                    $id = $_GET['stt'];
                    $detail_cmt_stt = $comments->getDetailCmtStt($id);
                }
                include "view/detail_comment.php";
                break;
            case 'user':
                $user = $users->getAllUser();
                if (isset($_GET['id_user'])) {
                    $id = $_GET['id_user'];
                    $Userid = $users->getUserID($id);
                }
                include "view/user.php";
                break;
            case 'news':
                $new = $news->getAllNews();
                if(isset($_GET['id_news'])){
                  $id = $_GET['id_news'];
                  $newid = $news->getIDNews($id);
                }
                include "view/new.php";
                break;
            case 'addnews':
                if(isset($_POST['addnew'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $id_user = $_SESSION['id'];
                    $nhan_xet = $_POST['slogan'];
                    $file_name = $_FILES['filename']['name'];
                    $file_size = $_FILES['filename']['size'];
                    $file_temp = $_FILES['filename']['tmp_name'];
                    if (!empty($file_name)) {
                    $uploaded_image = "../layouts/img/" .$file_name;
                    move_uploaded_file($file_temp, $uploaded_image);
                    $add = $news->addNews($title, $content, $id_user, $file_name, $nhan_xet);
                    echo '<script>alert("Thêm Thành Công")</script>';
                    } else {
                        echo '<script>alert("Thiếu Hình Ảnh")</script>';
                    }
                }
                $new = $news->getAllNews();
                include "view/new.php";
                break;
            case 'deletenew':
                if(isset($_GET['id_news'])){
                    $id = $_GET['id_news'];
                    $deletenew = $news->delete_new($id);
                    echo '<script>alert("Xóa Thành Công")</script>';
                }
                $new = $news->getAllNews();
                include "view/new.php";
                break;
            case 'updatenews':
                $id = $_GET['id_news'];

                if(isset($_POST['updatenew'])){
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $nhan_xet = $_POST['slogan'];
                    $img = $_POST['img'];
                    $file_name = $_FILES['filename']['name'];
                    $file_size = $_FILES['filename']['size'];
                    $file_temp = $_FILES['filename']['tmp_name'];
                    if (!empty($file_name)) {
                    $uploaded_image = "../layouts/img/" .$file_name;
                    move_uploaded_file($file_temp, $uploaded_image);
                    $update = $news->Updatenew($id, $title, $content, $nhan_xet, $file_name);
                    echo '<script>alert("UPDATE THÀNH CÔNG")</script>';
                } else {
                    $update = $news->Updatenew($id, $title, $content, $nhan_xet, $img);
                }
                }
                $newid = $news ->getIDNews($id);
                $new = $news->getAllNews();
                include "view/new.php";
                break;
            case 'categories':
                $category = $categories->getAllCategories();
                if (isset($_GET['id_cate'])) {
                    $id = $_GET['id_cate'];
                    $categoryid = $categories->getIDCategories($id);
                }
                include "view/categories.php";
                break;

            case 'warehouse':
                $warehouse = $warehouses->getAllWarehouses();
                if (isset($_GET['id_cart'])) {
                    $id = $_GET['id_cart'];
                    $cartid = $warehouses->getWarehousesId($id);
                }
                include "view/warehouse.php";
                break;
            case 'map':
                include "view/map.php";
                break;
            case 'comment':

                $comment_pro = $comments->getCommentProduct();
                $comment_stt = $comments->getCommentStt();
                include "view/comment.php";
                break;
            case 'slider':
                $slider = $sliders->getAllSlider();
                include "view/slider.php";
                break;
           case 'addslider':
                    if(isset($_POST['addnewslider'])){
                        $event = $_POST['event'];
                        $content = $_POST['content'];
                        $sale = $_POST['sale'];
                        $type=0;
                        $file_name = $_FILES['filename']['name'];
                        $file_size = $_FILES['filename']['size'];
                        $file_temp = $_FILES['filename']['tmp_name'];
                        if (!empty($file_name)) {
                        $uploaded_image = "../layouts/img/" .$file_name;
                        move_uploaded_file($file_temp, $uploaded_image);
                        $add = $sliders->addSlider($event,$content,$type,$sale,$file_name);
                        echo '<script>alert("Thêm Thành Công")</script>';
                        } else {
                            echo '<script>alert("Thiếu Hình Ảnh")</script>';
                        }
                    }
                    echo "<script>window.location.assign('?act=slider')</script>";
                    break;
          case 'update_slider':
                   if(isset($_POST['update_slider'])){
                     if(isset($_GET['id'])){
                        $id = $_GET['id'];
                      }
                       $event = $_POST['event'];
                       $content = $_POST['content'];
                       $sale = $_POST['sale'];
                       $img = $_POST['img'];
                       $file_name = $_FILES['filename']['name'];
                       $file_size = $_FILES['filename']['size'];
                       $file_temp = $_FILES['filename']['tmp_name'];
                       if (!empty($file_name)) {
                       $uploaded_image = "../layouts/img/" .$file_name;
                       move_uploaded_file($file_temp, $uploaded_image);
                       $add = $sliders->update_slider($id,$file_name,$event,$content,$sale);
                       echo '<script>alert("Sửa Thành Công")</script>';
                       } else {
                         $add = $sliders->update_slider($id,$img,$event,$content,$sale);
                         echo '<script>alert("Sửa Thành Công")</script>';

                       }
                   }
                   echo "<script>window.location.assign('?act=slider')</script>";
                   break;
            default:
                include "layouts/home.php";
                break;
        }
    } else {
        include "layouts/home.php";
    }
    include "layouts/footer.php";
} else {
    echo "<script>alert('bạn không có quyền truy cập trang này')</script>";
    echo "<script>window.location.assign('../index.php')</script>";
}
?>
