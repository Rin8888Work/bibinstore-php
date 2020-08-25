<?php
  class Categories extends ThaoTac
  {
    function getAllCategories()
    {
      $sql = "SELECT * FROM categories ";
      $query = parent::pdo_query($sql);
      return $query;
    }
     function getIDCategories($id)
    {
      $sql = "SELECT * FROM categories where id=".$id;
      $query = parent::pdo_query_one($sql);
      return $query;
    }

    function getAllSex()
    {
      $sql = "SELECT * FROM sex ";
      $query = parent::pdo_query($sql);
      return $query;
    }
  }
?>
