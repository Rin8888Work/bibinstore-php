<?php
  class Comment extends ThaoTac
  {


    function getComment($id)
    {
      $sql = "SELECT * FROM comment ";
      $sql .= " INNER JOIN products ON comment.id_prod=products.id_pro";
      $sql .= " INNER JOIN user ON comment.id_user=user.id_user";
      $sql .= " WHERE comment.id_prod=? ORDER BY id_comment desc";
      $stmt = parent::pdo_query($sql,$id);
      return $stmt;
    }

}

?>
