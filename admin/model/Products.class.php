<?php
  class Products extends ThaoTac
  {
    function getAllProducts()
    {
      $sql = "SELECT * FROM products ";
      $sql .= " INNER JOIN sex ON sex.id_sex=products.id_sex";
      $sql .= " INNER JOIN categories ON categories.id =products.id_cate";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function getRegister($fullname,$address,$email,$phone,$password,$permission)
      {
        $sql = "INSERT INTO user(fullname,address,email,phone,password,permission) VALUES(?,?,?,?,?,?)";
        $stmt = parent::pdo_execute($sql,$fullname,$address,$email,$phone,$password,$permission);
      }

      function getIDProducts($id)
    {
      $sql = "SELECT * FROM products ";
      $sql .= " INNER JOIN sex ON sex.id_sex=products.id_sex";
      $sql .= " INNER JOIN categories ON categories.id =products.id_cate where products.id_pro=".$id;
      $query = parent::pdo_query_one($sql);
      return $query;
    }

    function insertProduct($name,$price,$detail,$id_cate,$promossion,$id_sex,$file_name)
      {
        $sql = "INSERT INTO products(name,price,detail,id_cate,promotion,id_sex,img) VALUES(?,?,?,?,?,?,?)";
        $stmt = parent::pdo_execute($sql,$name,$price,$detail,$id_cate,$promossion,$id_sex,$file_name);
      }
      
    function Updatepro($id,$name,$price,$detail,$id_cate,$promossion,$id_sex,$file_name){
       $sql = "UPDATE products set name = '".$name."',price = '".$price."',detail = '".$detail."',id_cate = '".$id_cate."',promotion = '".$promossion."',id_sex ='".$id_sex."',img ='".$file_name."' where id_pro = ".$id;
       $stmt = parent::pdo_execute($sql);
   }
  }
?>
