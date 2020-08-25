<?php

//fetch_data.php
include_once 'ThaoTac.class.php';
class Fetch_ajax extends ThaoTac{
function show(){
 $query = "
  SELECT * FROM products INNER JOIN categories ON categories.id=products.id_cate INNER JOIN sex ON sex.id_sex=products.id_sex
 ";


 if(isset($_POST["cate"]))
 {
  $brand_filter = implode("','", $_POST["cate"]);
  $query .= "
   Where products.id_cate IN('".$brand_filter."')
  ";
 }
 
 if(isset($_POST["sex"]) and $_POST["sex"]!='0')
 {
  $sex = $_POST["sex"];
  $query .= "
   and products.id_sex = $sex
  ";
 } else {
     $query .="";
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

  if(isset($_POST["min"],$_POST['max']))
   {
     $min = ltrim($_POST['min'],'$');
     $max = ltrim($_POST['max'],'$');
    $query .= " AND products.price between '".$min."' and '".$max."'
    ";
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


}
$results = new Fetch_ajax;
 $result = $results->show();
 $count_pro = count($result);
 $output = '';
 // ví dụ ở đây echo <styte>text-right: dis-play:block< </style>
 if($count_pro > 0)
 {
   // <styte>text-right1: dis-play:block< </style>

   $output .= '
   <p class="count_pro">Tìm Thấy '.$count_pro.' Sản Phẩm</p>

   ';
}else {
  $output .= '
  <p class="count_pro">Tìm Thấy  0 Sản Phẩm</p>

  ';
}

 echo $output;

?>
