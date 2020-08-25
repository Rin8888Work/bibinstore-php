<?php
  class Categories extends ThaoTac
  {
    function getCate()
    {
      $sql = "SELECT * FROM categories";
      $stmt = parent::pdo_query($sql);
      return $stmt;
      }
    function getSex()
      {
        $sql = "SELECT * FROM sex";
        $stmt = parent::pdo_query($sql);
        return $stmt;
        }
    }
?>
