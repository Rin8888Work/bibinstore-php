<?php
  class News extends ThaoTac
  {
    function getNew()
    {
      $sql = "SELECT * FROM news limit 3";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getSpecialNew()
    {
      $sql = "SELECT * FROM news  ORDER BY view desc";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getNewest()
    {
      $sql = "SELECT * FROM news  ORDER BY id_new desc";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
    
    function getDetailNew($id)
    {
      $sql = "SELECT * FROM news ";
      $sql .= " INNER JOIN user ON news.id_user=user.id_user";
      $sql .= " WHERE id_new=?";
      $stmt = parent::pdo_query_one($sql,$id);
      return $stmt;
    }

    }

?>
