<?php
  class Comment extends ThaoTac
  {
    function delete_comment($id_cmt){
        $sql = "DELETE FROM comment where id_comment=".$id_cmt;
        $stmt = parent::pdo_execute($sql);
    }
    function getDetailCmtPro($id)
    {
      $sql = "SELECT * FROM comment";
      $sql .= " INNER JOIN products ON products.id_pro=comment.id_prod";
      $sql .= " INNER JOIN user ON user.id_user=comment.id_user";
      $sql .= " WHERE id_prod= $id";
      $query = parent::pdo_query($sql);
      return $query;
    }

    function getDetailCmtStt($id)
    {
      $sql = "SELECT * FROM comment";
      $sql .= " INNER JOIN news ON news.id_new=comment.id_news";
      $sql .= " INNER JOIN user ON user.id_user=comment.id_user";
      $sql .= " WHERE id_news= $id";
      $query = parent::pdo_query($sql);
      return $query;
    }

    function getCommentProduct()
    {
      $sql = "SELECT DISTINCT products.name,products.id_pro FROM comment ";
      $sql .= " INNER JOIN products ON products.id_pro=comment.id_prod";
      $query = parent::pdo_query($sql);
      return $query;
    }

    function countCmtPros($id_pros)
    {
      $sql = "SELECT * FROM comment where id_prod=$id_pros ";
      $query = parent::pdo_query($sql);
      return $query;
    }

    function getCommentStt()
    {
      $sql = "SELECT DISTINCT news.title,news.id_new FROM comment ";
      $sql .= " INNER JOIN news ON news.id_new=comment.id_news";
      $sql .= " WHERE news.id_new";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function countCmtNews($id_news)
    {
      $sql = "SELECT * FROM comment where id_news=$id_news ";
      $query = parent::pdo_query($sql);
      return $query;
    }

  }
?>
