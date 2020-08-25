<?php
  class Login extends ThaoTac
  {
    function getLogin($email,$pass){
      $sql = "SELECT * FROM user WHERE email=? AND password=?";
      $stmt = parent::pdo_query_one($sql,$email,$pass);
      return $stmt;
    }
  }
 ?>
