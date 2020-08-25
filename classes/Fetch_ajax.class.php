<script>
$(".product-item .pi-pic .icon i").on('click', function () {

   $(this).toggleClass('active');
});
</script>
<?php

//fetch_data.php
include_once 'ThaoTac.class.php';
class Fetch_ajax extends ThaoTac{
  var $quantityProduct = '';
  function __construct(){
    $this->quantityProduct = 2;
  }
function show($page){
        $page = $page - 1;
        $from = $page * $this->quantityProduct;
        $to = $this->quantityProduct;
 $query = "
  SELECT * FROM products INNER JOIN categories ON categories.id=products.id_cate INNER JOIN sex ON sex.id_sex=products.id_sex
 ";

 if ($_POST["sex"] == 0 && !isset($_POST['cate']) && $_POST['showcount'] == "" && $_POST['search'] == "" &&$_POST['min'] == "$0"&&$_POST['max'] == "$200") {
             $query .= " LIMIT " . $from . "," . $to;
        }
if(isset($_POST["sex"]) and $_POST["sex"]!='0')
        {
         $sex = $_POST["sex"];
         $query .= "
          where products.id_sex = $sex
         ";
         if (!isset($_POST['cate']) && $_POST['showcount'] == "" && $_POST['search'] == "" &&$_POST['min'] == "$0"&&$_POST['max'] == "$200") {
                     $query .= " LIMIT " . $from . "," . $to;
            }
        } else {
            $query .="";
        }

 if(isset($_POST["cate"]))
 {
  $brand_filter = implode("','", $_POST["cate"]);
  $query .= "
   and products.id_cate IN('".$brand_filter."')
  ";
  if ($_POST['showcount'] == "" && $_POST['search'] == "" &&$_POST['min'] == "$0"&&$_POST['max'] == "$200") {
              $query .= " LIMIT " . $from . "," . $to;
     }
 }

 if(isset($_POST["search"]) and $_POST["search"]!='')
  {
   $se = $_POST["search"];
   $query .= "
    and products.name like '%".$se."%'
   ";
  } else {
      $query .="";
  }


 if(isset($_POST["min"],$_POST['max']) && ($_POST["min"]!='$0' OR $_POST["max"]!='$200'))
  {
    $min = ltrim($_POST['min'],'$');
    $max = ltrim($_POST['max'],'$');
   $query .= " AND products.price between '".$min."' and '".$max."'
   ";
   if ($_POST['showcount'] == "" && $_POST['search'] == "") {
               $query .= " LIMIT " . $from . "," . $to;
      }
 } else {
   $query.="";
 }
 if(isset($_POST['showcount']) && $_POST['showcount']!="")
 {
   $brand_filter = $_POST['showcount'];
   $query .= "
    order by id_pro desc limit $brand_filter
   ";
 } else {
   $query .= "";
 }

  $ajax = parent::pdo_query($query);
  return $ajax;
}

function totalQuantity() {
   $sql = "SELECT * FROM products WHERE 1";
//Điều Kiện Giới Tính
   if(isset($_POST["sex"]) and $_POST["sex"]!='0')
           {
            $sex = $_POST["sex"];
            $sql .= "
             and products.id_sex = $sex
            ";
           } else {
               $sql .="";
           }
//Điều Kiện LOẠI
   if(isset($_POST["cate"]))
            {
             $brand_filter = implode("','", $_POST["cate"]);
             $sql .= "
              and products.id_cate IN('".$brand_filter."')
             ";
            }
            //Điều Kiện MIN MAX
            if(isset($_POST["min"],$_POST['max']) && ($_POST["min"]!='$0' OR $_POST["max"]!='$200'))
             {
               $min = ltrim($_POST['min'],'$');
               $max = ltrim($_POST['max'],'$');
              $sql .= " AND products.price between '".$min."' and '".$max."'
              ";
            } else {
              $sql.="";
            }
   $result = parent::pdo_query($sql);
   return $result;
}

function paginationProduct($page, $total) {
   $pages = ceil($total / $this->quantityProduct);
   $pagination = "";
   for($i = 0; $i < $pages; $i++) {
       $link = "index.php?act=shop&page=".($i+1);
       $pagination.= '<li class="page-item"><a onclick="filter_data('.($i+1).')">'.($i+1).'</a></li>';
   }

   return $pagination;
}

}
 $page = $_POST['page'];
 $results = new Fetch_ajax;
 $total = $results->totalQuantity();
 $dem = count($total);
 $trang = $results->paginationProduct($page, $dem);
 $result = $results->show($page);
 $output = '';
 // ví dụ ở đây echo <styte>text-right: dis-play:block< </style>
 if($result != NULL)
 {
   // <styte>text-right1: dis-play:block< </style>
  foreach($result as $row)
  {
   $output .= '
   <div class="col-lg-4 col-sm-6">
       <div class="product-item">
           <div class="pi-pic">
               <img src="layouts/img/products/'.$row['img'].'"alt="">
               <div class="sale pp-sale"> Sale '. $row['promotion'].'%</div>
               <div class="icon">
                   <i class="icon_heart_alt"></i>
               </div>
               <ul>
                   <li class="w-icon active"><a href="index.php?act=shopping_cart&id='.$row['id_pro'].'"><i class="icon_bag_alt"></i></a></li>
                   <li class="quick-view"><a href="index.php?act=product&id='.$row['id_pro'].'">+ Xem chi tiết</a></li>
                   <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
               </ul>
           </div>
           <div class="pi-text">
               <div class="catagory-name">'.$row['name_cate'].'</div>
               <a href="#">
                   <h5>'.$row['name'].'</h5>
               </a>
               <div class="product-price">
                    $'.($row['price']-($row['price']*($row['promotion']/100))).'
                   <span>$'.$row['price'].'</span>
               </div>
           </div>
       </div>
   </div>
   ';
  }
  $phantrang= '          <div class="loading-more col-lg-12 col-sm-12">
              <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                  '.$trang.'
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
              </ul>
            </div>';
 }
 else
 {
  $output = '<h2 style="color:#e7ab3c">LÀM GÌ CÓ SẢN PHẨM MÀ TÌM ! LÊU LÊU</h2>';
  $phantrang ="";
 }

 if(isset($_POST['showcount'])&&$_POST['showcount']!=NULL){
    echo $output;
 } else {
 echo $output;
 echo $phantrang;
}

?>
