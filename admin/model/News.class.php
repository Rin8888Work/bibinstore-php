<?php
  class News extends ThaoTac
  {
    function getAllNews()
    {
      $sql = "SELECT * FROM news ";
      $sql .= " INNER JOIN user ON user.id_user=news.id_user";
      $query = parent::pdo_query($sql);
      return $query;
    }
     function getIDNews($id)
    {
      $sql = "SELECT * FROM news ";
      $sql .= " INNER JOIN user ON user.id_user=news.id_user where id_new=".$id;
      $query = parent::pdo_query_one($sql);
      return $query;
    }
    function addNews($tittle,$content,$id_user,$img,$nhan_xet)
    {
        $sql = "INSERT INTO news(title,content,id_user,img,nhan_xet) VALUES(?,?,?,?,?)";
        $stmt = parent::pdo_execute($sql,$tittle,$content,$id_user,$img,$nhan_xet);
    }
     function delete_new($id){
        $sql = "DELETE FROM news where id_new=".$id;
        $stmt = parent::pdo_execute($sql);
    }
    function Updatenew($id,$title,$content,$nhan_xet,$img){

       $sql = "UPDATE news set title = '".$title."',content = '".$content."',nhan_xet = '".$nhan_xet."',img = '".$img."' where id_new = ".$id;
       $stmt = parent::pdo_execute($sql);
   }
  }
?>
