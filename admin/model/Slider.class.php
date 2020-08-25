<?php
  class Slider extends ThaoTac
  {
    function getAllSlider()
    {
      $sql = "SELECT * FROM slider ";
      $query = parent::pdo_query($sql);
      return $query;
    }

    function getOneSlider($id)
    {
      $sql = "SELECT * FROM slider WHERE id=$id";
      $query = parent::pdo_query_one($sql);
      return $query;
    }

    function addSlider($event,$content,$type,$sale,$img)
    {
        $sql = "INSERT INTO slider(event,content,type,sale,img) VALUES(?,?,?,?,?)";
        $stmt = parent::pdo_execute($sql,$event,$content,$type,$sale,$img);
    }

    function delete_slider($id_slider){
        $sql = "DELETE FROM slider where id=".$id_slider;
        $stmt = parent::pdo_execute($sql);
    }

    function update_slider($id,$img,$event,$content,$sale){
        $sql = "UPDATE slider SET img='".$img."',event='".$event."',content='".$content."',sale='".$sale."' WHERE id=".$id;
        $stmt = parent::pdo_execute($sql);
    }
  }
?>
