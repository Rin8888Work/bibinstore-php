<?php
  class Warehouses extends ThaoTac
  {
    function getAllWarehouses()
    {
      $sql = "SELECT * FROM cart ";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function getWarehousesID($id)
    {
      $sql = "SELECT * FROM cart where id_cart=".$id;
      $query = parent::pdo_query_one($sql);
      return $query;
    }
    function getAllWarehousesId($id)
    {
      $sql = "SELECT * FROM hoadon ";
      $sql .= " INNER JOIN products ON products.id_pro=hoadon.id_pro";
      $sql .= " INNER JOIN cart ON cart.id_cart=hoadon.id_cart";
      $sql .= " where cart.id_cart =".$id;
      $query = parent::pdo_query($sql);
      return $query;
    }
    function update_cart($id,$name,$address,$phone){

       $sql = "UPDATE cart set fullname = '".$name."',address = '".$address."',phone = '".$phone."' where id_cart = ".$id;
       $stmt = parent::pdo_execute($sql);
   }
   function delete_detail($id){
        $sql = "DELETE FROM hoadon where id_cart=".$id;
        $stmt = parent::pdo_execute($sql);
    }
    function delete_cart($id){
        $sql = "DELETE FROM cart where id_cart=".$id;
        $stmt = parent::pdo_execute($sql);
    }
  }
?>
