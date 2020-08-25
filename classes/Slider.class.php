<?php
  class Slider extends ThaoTac
  {
    function getSlider(){
      $sql = "SELECT * FROM slider WHERE type=0";
      $stmt = parent::pdo_query($sql);
      return $stmt;
    }
  }
 ?>
