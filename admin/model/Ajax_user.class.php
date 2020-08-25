<?php 
session_start();
 include_once('ThaoTac.class.php');
 include_once('User.class.php');
 
  
$results = new User;
if(isset($_POST['adduser'])){
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['newuser'];
$phone = $_POST['phone'];
$password = md5($_POST['pass']);
$permission = $_POST['chucvu'];
$add = $results ->getRegister($fullname, $address, $email, $phone, $password, $permission);
}
if(isset($_POST['update_user'])){

$id = $_POST['update_user'];
$checkuser = $results ->getUserID($id);
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['newuser'];
$phone = $_POST['phone'];
$password = md5($_POST['pass']);
$newpassword = md5($_POST['newpass']);
if($password==md5('') && $newpassword==md5('')){
$add = $results ->upDateUser1($id, $fullname, $address, $phone);
} else {
    if($password == $checkuser['password']){
        $add = $results ->upDateUser2($id, $fullname, $address, $phone, $newpassword);
    } else {
        echo '<h5>"Mật Khẩu Hiện Tại Không Đúng Mời Bạn Nhập Lại"</h5>';
    }
}
}
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $delete = $results ->delete_user($id);
}



$result = $results->getAllUser();
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
            <td>'.$values["email"].'</td>
            <td>'.$values["fullname"].'</td>
            <td>'.$values["phone"].'</td>
            <td>'.$values["address"].'</td>';
                
              if($values['permission'] == 0){
            
            $output.='<td>Người Dùng</td>';
           }else {
            $output.='<td>ADMIN</td>';
           }

            $output.='<td><a href="?act=user&id_user='.$values['id_user'].'" class="btn btn-success">Sửa</a> ';
                    if($_SESSION['admin']=="Nguyễn Văn Phước"){
                     $output.='<a onclick="delete_user('.$values['id_user'].')" class="btn btn-danger">Xóa</a>';
                    }
                     $output.='    </td>
          </tr>
   ';

  }
 }

 echo $output;
?>

