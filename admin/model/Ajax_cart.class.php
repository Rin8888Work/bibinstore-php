<?php 
 include_once('ThaoTac.class.php');
 include_once('Warehouses.class.php');
  
$results = new Warehouses;
if(isset($_POST['delete'])){
$id = $_POST['delete'];
$delete = $results ->delete_detail($id);
$delete2 = $results ->delete_cart($id);
}
else if(isset($_POST['update_cart'])){
$id = $_POST['update_cart'];
$name = $_POST['fullname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$update = $results ->update_cart($id, $name, $address, $phone);
}
$result = $results->getAllWarehouses();
$output = '';
if($result != NULL)
 {
   // <styte>text-right1: dis-play:block< </style>
  $i=0;
  foreach($result as $values)
  {
  $i++;

   $output .= '
          <tr>
            <td>'.$i.'</td>
            <td>'.$values["fullname"].'</td>
            <td>'.$values["address"].'</td>
            <td>'.$values["phone"].'</td>
            <td>'.$values["email"].'</td>
            <td>'.$values["total_price"].'</td>
            <td>'.$values["created"].'</td>
            <td><a href="?act=detail_cart&id='.$values["id_cart"].'" class="btn btn-rose">Xem Chi Tiết</a></td>
            <td><a href="?act=warehouse&id_cart='.$values['id_cart'].'" class="btn btn-success">Sửa</a> <a onclick="delete_cart('.$values['id_cart'].')" class="btn btn-danger">Xóa</a></td>
          </tr>
   ';

  }
 }

 echo $output;
?>