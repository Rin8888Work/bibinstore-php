    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?"><i class="fa fa-home"></i> Home</a>
                        <a href="?act=shopping_cart">Giỏ Hàng</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="?act=check_out" method="post" class="checkout-form">
                <div class="row">
                  <?php if (!isset($_SESSION['login'])): ?>
                    <div class="checkout-content col-lg-12">
                        <a style="font-weight:bold; font-size:25px;" href="?act=login&checkout" class="content-btn">Nhấp vào đây để đăng nhập</a>
                    </div>
                  <?php endif; ?>
                    <div class="col-lg-6">
                        <h4>Điền Thông Tin Của Bạn</h4>
                        <div class="row">
                         <?php if(isset($_SESSION['login'])){ ?>
                            <div class="col-lg-12">
                                <label for="cun-name">Họ Tên<span>*</span></label>
                                <input type="text" id="cun-name" value="<?php echo $_SESSION['login']?>" name="name">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa Chỉ<span>*</span></label>
                                <input type="text" id="street" class="street-first" value="<?php echo $_SESSION['user']['address']?>" name="address">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa Chỉ Email<span>*</span></label>
                                <input type="text" id="email" value="<?php echo $_SESSION['user']['email']?>" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số Điện Thoại<span>*</span></label>
                                <input type="text" id="phone" value="<?php echo $_SESSION['user']['phone']?>" name="phone">
                            </div>
                          <?php } else { ?>
                            <div class="col-lg-12">
                                <label for="cun-name">Họ Tên<span>*</span></label>
                                <input type="text" id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa Chỉ<span>*</span></label>
                                <input type="text" id="street" class="street-first">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa Chỉ Email<span>*</span></label>
                                <input type="text" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số Điện Thoại<span>*</span></label>
                                <input type="text" id="phone">
                            </div>
                           <?php }?>
                            <div class="col-lg-12">
                                <div class="create-item">
                                  <h5 style="color:red;">* VUI LÒNG KIỂM TRA KỈ THÔNG TIN TRƯỚC KHI MUA HÀNG</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Đơn Hàng Của Bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản Phẩm <span>Tổng</span></li>
                                    <?php
                                      foreach ($data_co as $a):
                                    ?>
                                    <li class="fw-normal"><?php echo $a['name'].'    X    '.$a['qty'] ?><span>$<?php echo number_format($a['qty']*$a['cost'],2,',',',') ?></span></li>
                                  <?php endforeach;?>
                                    <li class="total-price">Total <span>$<?php echo $data_carts?></span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                  <?php if (isset($_SESSION['login'])){ ?>
                                    <button type="submit" class="site-btn place-btn" name="submitmuahang">Mua Hàng</button>
                                  <?php }else{?>
                                  <a href="?act=login&checkout"<button class="site-btn place-btn">Đăng nhập để mua hàng</button></a>
                                <?php } ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->


    <!-- Footer Section Begin -->
