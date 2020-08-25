<?php

//fetch_data.php
include_once 'ThaoTac.class.php';
class Comment_ajax extends ThaoTac{

   function getComment($id)
    {
      $sql = "SELECT * FROM comment ";
      $sql .= " INNER JOIN products ON comment.id_prod=products.id_pro";
      $sql .= " INNER JOIN user ON comment.id_user=user.id_user";
      $sql .= " WHERE comment.id_prod=? ORDER BY id_comment desc";
      $stmt = parent::pdo_query($sql,$id);
      return $stmt;
    }
     function insert(){
        $iduser = $_POST['user'];
        $content = $_POST['content'];
        $id_pro = $_POST['pro'];
       $sql = "insert into comment(id_user,content,id_prod) values('$iduser','$content','$id_pro')";
       $stmt = parent::pdo_execute($sql);
    }
}


$results = new Comment_ajax;
$add = $results -> insert();
$result = $results->getComment($_POST['pro']);
$output = '';
 // ví dụ ở đây echo <styte>text-right: dis-play:block< </style>
 if($result != NULL)
 {
   // <styte>text-right1: dis-play:block< </style>
  foreach($result as $cm)
  {


   $output .= '
                          <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="layouts/img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <h5>'.$cm["fullname"].' <span>'.$cm["created"].'</span></h5>
                                                    <div class="at-reply">'.$cm['content'].'</div>
                                                </div>
                                            </div>
                                        </div>
   ';

  }
 }
 else
 {
  $output = '<h2 style="color:#e7ab3c">LÀM GÌ CÓ TIN ĐÓ ĐÂU ! LÊU LÊU</h2>';
 }

 echo $output;

?>
