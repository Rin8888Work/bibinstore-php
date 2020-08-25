

<?php

//fetch_data.php
include 'ThaoTac.class.php';
class NewsSEARCH extends ThaoTac{
  function getNewSearch()
  {
    $sql = "SELECT * FROM news  INNER JOIN user ON news.id_user=user.id_user";

     if(isset($_POST["search"]) and $_POST["search"]!='')
      {
       $se = $_POST["search"];
       $sql .= " WHERE title like '%".$se."%'
       ";
      } else {
          $sql .="";
      }
    $stmt = parent::pdo_query($sql);
    return $stmt;
  }
}
$results = new NewsSEARCH;
 $result = $results->getNewSearch();
 $output = '';
 // ví dụ ở đây echo <styte>text-right: dis-play:block< </style>
 if($result != NULL)
 {
   // <styte>text-right1: dis-play:block< </style>
  foreach($result as $newest)
  {


   $output .= '
   <div class="col-lg-6 col-sm-6">
       <div class="blog-item">
           <div class="bi-pic">
               <img src="layouts/img/blog/'.$newest['img'].'" alt="">
           </div>
           <div class="bi-text">
               <a href="?act=blog_details&id='.$newest['id_new'].'">
                   <h4>'.$newest['title'].'</h4>
               </a>
               <p>travel <span>- '.$newest['fullname'].'</span></p>
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
