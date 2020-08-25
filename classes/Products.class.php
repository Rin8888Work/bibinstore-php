<?php

  class Products extends ThaoTac
  {
    var $quantityProduct = '';
    function __construct(){
      $this->quantityProduct = 2;
    }
    function getAllProduct()
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getProductAll($id_sex,$search,$page)
    {

      $page = $page - 1;
      $from = $page * $this->quantityProduct;
      $to = $this->quantityProduct;

      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      if($id_sex == 0 && $search == "0"){
          $sql.= " LIMIT ".$from.",".$to;
      }
       if(isset($id_sex)&&$id_sex!="0"){

         $sql.=" WHERE id_sex = $id_sex ";
         $sql.= " LIMIT ".$from.",".$to;
       } else {
         $sql.="";
       }
     if(isset($search)&&$search!="0"){

       $sql.=" WHERE products.name like '%".$search."%' OR  categories.name_cate like '%".$search."%' ";
     } else {
       $sql.="";
     }

      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

     function totalQuantity($id_sex) {
        $sql = "SELECT * FROM products WHERE 1";
        if(isset($id_sex)&&$id_sex!="0"){
        $sql.=" and id_sex = $id_sex ";
        }
        $result = parent::pdo_query($sql);
        return $result;
    }

     function paginationProduct($page, $total,$id_sex) {


        $pages = ceil($total / $this->quantityProduct);
        $pagination = "";
         if($id_sex=="0"){
        for($i = 0; $i < $pages; $i++) {
            $link = "index.php?act=shop&page=".($i+1);
            $pagination.= '<li class="page-item"><a onclick="filter_data('.($i+1).')">'.($i+1).'</a></li>';
        }
         } else {
            for($i = 0; $i < $pages; $i++) {
            $link = "index.php?act=shop&id_sex=".$id_sex."&page=".($i+1);
            $pagination.= '<li class="page-item"><a onclick="filter_data('.($i+1).')">'.($i+1).'</a></li>';
        }
         }
        return $pagination;
    }

    function getProductBySex($id_sex)
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_sex =".$id_sex;
      $stmt = parent::pdo_query($sql,$id_sex);
      return $stmt;
    }

    function getProductByCate($id_cate)
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_cate =".$id_cate;
      $stmt = parent::pdo_query($sql,$id_cate);
      return $stmt;
    }

    function getProductDetailByCate($id_cate)
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_cate ='.$id_cate.' limit 4";
      $stmt = parent::pdo_query($sql,$id_cate);
      return $stmt;
    }

    function getProductWomen()
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN sex ON sex.id_sex=products.id_sex";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_sex=2";
      $sql.=" ORDER BY products.view desc limit 5";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getProductmen()
    {
      $sql = "SELECT * FROM products";
      $sql.=" INNER JOIN sex ON sex.id_sex=products.id_sex";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_sex=1";
      $sql.=" ORDER BY products.view desc limit 5";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getDetailProduct($id)
    {
      $sql = "SELECT * FROM products ";
      $sql.=" INNER JOIN categories ON categories.id=products.id_cate";
      $sql.=" WHERE products.id_pro=".$id;
      $stmt = parent::pdo_query_one($sql,$id);
      return $stmt;
    }


    function getCountProduct()
      {
        $sql = "SELECT DISTINCT(id_pro) FROM products";
        $stmt = parent::pdo_query($sql);
        return $stmt;
      }

      function getCountProductBySex($id_sex)
        {
          $sql = "SELECT DISTINCT(id_pro) FROM products WHERE id_sex=?";
          $stmt = parent::pdo_query($sql,$id_sex);
          return $stmt;
        }


    }
?>
