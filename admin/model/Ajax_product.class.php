<?php
include_once 'ThaoTac.class.php';
  class dltpro extends ThaoTac
  {
    function getAllPro()
    {
      $sql = "SELECT * FROM products ";
      $sql .= "INNER JOIN categories ON categories.id=products.id_cate ";
      $sql .= "INNER JOIN sex ON sex.id_sex=products.id_sex ";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function delete_product($id){
        $sql = "DELETE FROM products where id_pro=".$id;
        $stmt = parent::pdo_execute($sql);
    }
  }

  $results = new dltpro;
  if(isset($_POST['delete'])){
  $id = $_POST['delete'];
  $delete = $results -> delete_product($id);
  }
  $result = $results->getAllPro();
  $output = '';

    $i = 0;
      foreach ($result as $values):
        $i++;

  $output.='<tr>
    <td>'.$i.'</td>
    <td>'.$values['name'].'</td>
    <td>$'.$values['price'].' </td>
    <td><img src="../layouts/img/products/'.$values['img'].'" width="100"></td>
    <td>'.$values['detail'].'</td>
    <td>'.$values['name_cate'].'</td>
    <td>'.$values['promotion'].' %</td>
    <td>'.$values['name_sex'].'</td>
    <td><a href="?act=products&id_pro='.$values['id_pro'].'" class="btn btn-success">Sửa</a> <a onclick="xoa('.$values['id_pro'].')"class="btn btn-danger">Xóa</a></td>
  </tr>';
   endforeach;
   echo $output;
?>
