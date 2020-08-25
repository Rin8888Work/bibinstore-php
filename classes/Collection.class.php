<?php
  class Collection extends ThaoTac
  {
    function getCollection()
    {
      $sql = "SELECT * FROM collection ORDER BY id asc limit 4";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }

    function getDetailCollection($id)
    {
      $sql = "SELECT * FROM collection WHERE id=?";
      $stmt = parent::pdo_query_one($sql,$id);
      return $stmt;
    }

    function getImageCollection($img)
    {
      $sql = "SELECT * FROM pro_images WHERE id_collection=? ORDER BY id DESC LIMIT 3";
      $stmt = parent::pdo_query($sql,$img);
      return $stmt;
    }

    }
?>
