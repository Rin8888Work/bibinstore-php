<?php
  class User extends ThaoTac
  {
    function getUser()
    {
      $sql = "SELECT * FROM user";
      $stmt = parent::pdo_query($sql);
      return $stmt;
      }

      function upDateUser1($id,$name,$address,$phone){

       $sql = "UPDATE user set fullname = '".$name."',address = '".$address."',phone = '".$phone."' where id_user = ".$id;
       $stmt = parent::pdo_execute($sql);
      }

      function upDateUser2($id,$name,$address,$phone,$new_pass){

       $sql = "UPDATE user set fullname = '".$name."',address = '".$address."',phone = '".$phone."',password = '".$new_pass."' where id_user = ".$id;
       $stmt = parent::pdo_execute($sql);
   }

   function getUserId($id)
    {
      $sql = "SELECT * FROM user where id_user =".$id;
      $stmt = parent::pdo_query_one($sql);
      return $stmt;
      }

      function getRegister($fullname,$address,$email,$phone,$password,$permission)
      {
        $sql = "INSERT INTO user(fullname,address,email,phone,password,permission) VALUES(?,?,?,?,?,?)";
        $stmt = parent::pdo_execute($sql,$fullname,$address,$email,$phone,$password,$permission);
      }

    }
?>
