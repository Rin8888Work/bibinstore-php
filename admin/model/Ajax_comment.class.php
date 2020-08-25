<?php
 include_once('ThaoTac.class.php');
 include_once('Comment.class.php');

$results = new Comment;
if(isset($_POST['deletepro']))
            {
            $id_cmt = $_POST['deletepro'];
            }
            if(isset($_POST['deletetintuc']))
            {
              $id_cmt = $_POST['deletetintuc'];
            }

$delete = $results ->delete_comment($id_cmt);
$output = '';
if(isset($_POST['deletepro']))
            {
              $id = $_POST['idpro'];
              $detail_cmt_pro =$results->getDetailCmtPro($id);
              $detail_cmt_stt="";
            }
            if(isset($_POST['deletetintuc']))
            {
              $id = $_POST['idtt'];
              $detail_cmt_stt =$results->getDetailCmtStt($id);
              $detail_cmt_pro="";
            }


if($detail_cmt_stt != NULL OR $detail_cmt_pro != NULL)
 {
   // <styte>text-right1: dis-play:block< </style>
  $i=0;
  if(isset($_POST['deletetintuc'])){
  foreach($detail_cmt_stt as $values)
  {
  $i++;

   $output .= '
          <tr>
            <td>'.$i.'</td>
            <td>'.$values["title"].'</td>
            <td>'.$values["fullname"].'</td>
            <td>'.$values["nhan_xet"].'</td>
            <td><a onclick="delete_commenttintuc('.$values['id_comment'].')" class="btn btn-danger">Xóa</a></td>
          </tr>
   ';

  }
  } else {
      foreach($detail_cmt_pro as $values)
  {
  $i++;

   $output .= '
          <tr>
            <td>'.$i.'</td>
            <td>'.$values["name"].'</td>
            <td><img src="../layouts/img/products/'.$values['img'].'" width="100"></td>
            <td>'.$values["fullname"].'</td>
            <td>'.$values["content"].'</td>
            <td><a onclick="delete_commentpro('.$values['id_comment'].')" class="btn btn-danger">Xóa</a></td>
          </tr>
   ';

  }
  }
 } else {
     $output.="đã xóa hết bình luận";
 }

 echo $output;
?>
