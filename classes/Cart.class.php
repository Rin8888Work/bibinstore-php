<?php
  class Cart extends ThaoTac{

public function add_item($id,$quantity)
{
    $pros = new Products();
    $pro = $pros->getDetailProduct($id);
    //Nếu sản phẩm đã có trong giỏ hàng, cập nhật số lượng
    if(isset($_SESSION['cartview'][$id]))
    {
        $quantity += $_SESSION['cartview'][$id]['qty'];
        $updates = new Cart;
        $update =$updates->update_item($id,$quantity);
        return $update;
    }
    // Tạo đối tượng mảng lưu trữ thông tin sản phẩm cần thêm vào giỏ hàng
    $id_pro = $pro['id_pro'];
    $cost = $pro['price'];
    $img = $pro['img'];
    $total = $cost * $quantity;
    $item = array(
        'key' => $id_pro,
        'name' => $pro['name'],
        'cost' => $cost,
        'img' => $img,
        'qty' => $quantity,
        'total' => $total
     );

    // Thêm sản phẩm vào giỏ hàng thông qua mảng biến Session $_SESSION['cartview']
      $_SESSION['cartview'][$id]= $item;
}
      // Cập nhật sản phẩm cùng giỏ hàng
      public function update_item($id,$quantity)
      {
          $quantity = (int) $quantity;
          if($quantity <= 0)
          {
              //Thực hiện hủy phần tử trong giỏ hàng nếu người dùng nhập giá trị số lượng <=0
              unset($_SESSION['cartview'][$id]);
          }
          else
          {
              // Thực hiện cập nhật số lượng và thành tiền của sản phẩm trong giỏ hàng
              // với mảng biến $_SESSION['cartview'] tại vị trí $key của mảng
              $_SESSION['cartview'][$id]['qty'] = $quantity;
              $total = $_SESSION['cartview'][$id]['cost'] * $_SESSION['cartview'][$id]['qty'];
              $_SESSION['cartview'][$id]['total'] = $total;
          }
      }

      // Lấy tổng doanh thu của giỏ hàng

      function get_subtotal()
      {
          $subtotal = 0;
          if(isset($_SESSION['cartview'])){
          foreach($_SESSION['cartview'] as $item)
        {
                $subtotal += $item['total'];
        }
      }
      $subtotal = $subtotal;
      return $subtotal;
     }
      // Tính tống số lượng sản phẩm đã order
     function get_subtotalitem()
      {
          $subtotalitem = 0;
          foreach($_SESSION['cartview'] as $item)
        {
                $subtotalitem += $item['qty'];
        }

      $subtotal = $subtotalitem ;
      return $subtotalitem;
     }

      function insert_cart($id_user,$total_price,$name,$address,$email,$phone)
           {
             $sql = "INSERT INTO cart(id_user,total_price,fullname,address,email,phone) VALUES(?,?,?,?,?,?)";
             $stmt = parent::pdo_execute($sql,$id_user,$total_price,$name,$address,$email,$phone);
           }

           function insert_detail_cart($id_cart,$id_pro,$quantity,$price)
           {
             $sql = "INSERT INTO hoadon(id_cart,id_pro,quantity,price) VALUES(?,?,?,?)";
             $stmt = parent::pdo_execute($sql,$id_cart,$id_pro,$quantity,$price);
           }
           function mahoadon(){
             $sql= "SELECT MAX(id_cart) as id_cart from cart";
             $stmt = parent::pdo_query_one($sql);
             return $stmt;
           }


    }
?>
