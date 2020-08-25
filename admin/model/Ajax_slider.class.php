<?php
include_once 'ThaoTac.class.php';
  class dltslider extends ThaoTac
  {
    function getAllSlider()
    {
      $sql = "SELECT * FROM slider ";
      $query = parent::pdo_query($sql);
      return $query;
    }
    function delete_slider($id_slider){
        $sql = "DELETE FROM slider where id=".$id_slider;
        $stmt = parent::pdo_execute($sql);
    }
  }

  $results = new dltslider;
  if(isset($_POST['delete'])){
  $id_slider = $_POST['delete'];
  $delete = $results -> delete_slider($id_slider);
  }
  $result = $results->getAllSlider();
  $output = '';

    $i = 0;
      foreach ($result as $values):
        $i++;

  $output.='  <tr>
      <td>'.$i.'</td>
      <td><img src="../layouts/img/'.$values['img'].'" width="500"></td>';
      if($values['type']==0){
      $output .= '<td >
        <input type="hidden" class="data1" value="1">
        <button class="btn btn-success" onclick="off('.$values['id'].')" type="submit">Bật</button>
      </td>';
    }
    if($values['type']==1){
    $output.='  <td >
        <input type="hidden" class="data2" value="0">
        <button class="btn btn-danger "  onclick="on('.$values['id'].')"  type="submit">Tắt</button>
      </td>';
    }

      $output.=' <td>'.$values['event'].'</td>
      <td>'.$values['content'].'</td>
      <td>'.$values['sale'].'</td>
      <td><a href="?act=slider&id='.$values['id'].'" class="btn btn-success">Sửa</a> <a onclick="delete_slider('.$values['id'].')" class="btn btn-danger">Xóa</a></td>
    </tr>';
   endforeach;
   echo $output;
?>
