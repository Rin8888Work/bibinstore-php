
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Trang Chủ</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container cart">
          <?php if(isset($_SESSION['cartview']) && $_SESSION['cartview'] != null){?>
            <div class="row ">
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
                            <tbody>
                              <?php

                              foreach ($data_cart as $cart):
                              ?>
                                <tr>
                                    <td class="cart-pic first-row"><img width="100" src="layouts/img/products/<?php echo $cart['img']?>" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $cart['name']?></h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo number_format($cart['cost'], 2, ',', ',')?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" onclick="update_low_cart(<?php echo $cart['key']?>)">-</span>
                                                <input type="text" value="<?php echo $cart['qty']?>" id="qty<?php echo $cart['key']?>" onchange="update_cart(<?php echo $cart['key']?>)">
                                                <span class="inc qtybtn" onclick="update_increase_cart(<?php echo $cart['key']?>)">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$<?php echo number_format($cart['total'], 2, ',', ',')?></td>
                                    <td class="close-td first-row"><a ><i class="ti-close" onclick="delete_cart(<?php echo $cart['key']?>)"></i></a></td>
                                </tr>
                              <?php endforeach;?>
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
                                <ul>
                                    <li class="subtotal"> <span>$<?php echo $data_carts ?></span></li>
                                    <li class="cart-total">Tổng Tiền <span>$<?php echo $data_carts ?></span></li>
                                </ul>
                                <a href="?act=check_out" class="proceed-btn">Tiến Hành Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php }else {
            echo "Bạn chưa có món hàng nào trong giỏ";
          }?>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
