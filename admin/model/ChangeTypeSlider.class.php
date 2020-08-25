<?php
  include_once('ThaoTac.class.php');
  class ChangeTypeSlider extends ThaoTac{

    function TypeSlider($id,$type)
    {
      $sql = "UPDATE slider SET type=$type WHERE id=$id";
      $query =parent::pdo_execute($sql);
    }
  }
  $ChangeTypeSlider = new ChangeTypeSlider;
  $type = $_POST['type'];
  $id = $_POST['id'];
  $change_type = $ChangeTypeSlider->TypeSlider($id,$type);

?>
