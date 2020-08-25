<?php 
 include_once('ThaoTac.class.php');
 class AjaxCategories extends ThaoTac
  {
    function getAllCategories()
    {
      $sql = "SELECT * FROM categories ";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function insert_cate($name_cate){
        $sql = "INSERT INTO categories(name_cate) VALUE(?)";
        $stmt = parent::pdo_execute($sql,$name_cate);
    }
    function delete_cate($id_cate){
        $sql = "DELETE FROM categories where id=".$id_cate;
        $stmt = parent::pdo_execute($sql);
    }
    function update_cate($id_cate,$name){
        $sql = "UPDATE categories set name_cate = '".$name."' where id = ".$id_cate;
        $stmt = parent::pdo_execute($sql);
    }
  }
  
$results = new AjaxCategories;
if(isset($_POST['catenew'])){
$name_cate = $_POST['catenew'];
$add = $results -> insert_cate($name_cate);
}
else if(isset($_POST['delete'])){
$id_cate = $_POST['delete'];
$delete = $results ->delete_cate($id_cate);
}
else if(isset($_POST['update'])){
$id_cate = $_POST['update'];
$name = $_POST['newupdate'];
$add = $results ->update_cate($id_cate,$name);
}
$result = $results->getAllCategories();
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
            <td>'.$values["name_cate"].'</td>
            <td><a href="?act=categories&id_cate='.$values['id'].'" class="btn btn-success">Sửa</a> <a onclick="delete_cate('.$values['id'].')" class="btn btn-danger">Xóa</a></td>
          </tr>
   ';

  }
 }

 echo $output;
?>