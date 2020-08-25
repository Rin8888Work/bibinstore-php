<script>
var proQty = $('.pro-qty');
proQty.on('click', '.qtybtn', function () {
var $button = $(this);
var oldValue = $button.parent().find('input').val();
if ($button.hasClass('inc')) {
  var newVal = parseFloat(oldValue) + 1;
} else {
  // Don't allow decrementing below zero
  if (oldValue > 0) {
    var newVal = parseFloat(oldValue) - 1;
  } else {
    newVal = 0;
  }
}
$button.parent().find('input').val(newVal);
});
</script>
<?php
session_start();
include_once 'ThaoTac.class.php';
include_once 'Cart.class.php';
$output ='';
if(isset($_POST['delete'])){
      $id = $_POST['delete'];
      unset($_SESSION['cartview'][$id]);
}
if(isset($_POST['update'])){
  $id = $_POST['update'];
  $quantity = $_POST['quantity'];
  $update = new Cart;
  $newquatity = $update->update_item($id,$quantity);
}
    if(isset($_SESSION['cartview']) && $_SESSION['cartview'] != null){
      $data_cart = $_SESSION['cartview'];
      $output.='<div class="row ">
          <div class="col-lg-12">
              <div class="cart-table">
                  <table>
                      <thead>
                          <tr>
                              <th>Hình</th>
                              <th class="p-name">Tên Sản Phẩm</th>
                              <th>Giá</th>
                              <th>Số Lượng</th>
                              <th>Tổng Tiền</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody >';
    foreach ($data_cart as $cart):

      $output.='<tr>
          <td class="cart-pic first-row"><img width="100" src="layouts/img/products/'.$cart['img'].'" alt=""></td>
          <td class="cart-title first-row">
              <h5>'.$cart['name'].'</h5>
          </td>
          <td class="p-price first-row">$'.number_format($cart['cost'], 2, ',', ',').'</td>
          <td class="qua-col first-row">
              <div class="quantity">
                  <div class="pro-qty">
                      <span class="dec qtybtn" onclick="update_low_cart('.$cart['key'].')">-</span>
                      <input type="text" value="'.$cart['qty'].'" id="qty'.$cart['key'].'" onchange="update_cart('.$cart["key"].')">
                      <span class="inc qtybtn"   onclick="update_increase_cart('.$cart['key'].')">+</span>
                  </div>
              </div>
          </td>
          <td class="total-price first-row">$'.number_format($cart['total'], 2, ',', ',').'</td>
          <td class="close-td first-row"><a ><i class=" delete_cart ti-close" onclick="delete_cart('.$cart['key'].')"></i></a></td>
      </tr>';
    endforeach;
    $output.='
          </tbody>
      </table>
      </div>
      <div class="row">
      <div class="col-lg-6">
          <div class="cart-buttons">
              <a href="?act=shop" class="primary-btn continue-shop">Quay Lại Mua Hàng</a>
          </div>
          <div class="discount-coupon">
              <h6>Discount Codes</h6>
              <form action="#" class="coupon-form">
                  <input type="text" placeholder="Enter your codes">
                  <button type="submit" class="site-btn coupon-btn">Apply</button>
              </form>
          </div>
      </div>
      <div class="col-lg-4 offset-lg-2">
          <div class="proceed-checkout">
              <ul>';
              $cart = new Cart;
              $data_carts= $cart->get_subtotal();
              $output.='
                  <li class="subtotal"> <span>$'.$data_carts.'</span></li>
                  <li class="cart-total">Tổng Tiền <span>$'.$data_carts.'</span></li>
              </ul>
              <a href="?act=check_out" class="proceed-btn">Tiến Hành Thanh Toán</a>
          </div>
      </div>
      </div>
      </div>
      </div>
    ';
  }else {
     $output .="Bạn chưa có món hàng nào trong giỏ";
  }
    echo $output;
?>
