
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="?act=shop">Sản Phẩm</a>
                        <span>Chi Tiết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="layouts/img/products/<?php echo $product['img']?>" alt="">
                            </div>

                        </div>
                        <div class="col-lg-6">
                          <form action="index.php?act=add_cart&id=<?php echo $product['id_pro'] ?>" method="post">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>Tên Sản Phẩm</span>
                                    <h3><?php echo $product['name']?></h3>
                                    <a class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc" name="price">
                                    <?php if($product['promotion'] >0){?>
                                    <h4><?php echo $product['price']-(($product['price']*$product['promotion'])/100)?> <span><?php echo $product['price']?></span></h4>
                                  <?php }else { ?>
                                    <h4><?php echo $product['price']?></h4>
                                  <?php } ?>
                                </div>
                                <div class="pd-color">
                                    <h6>Màu</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black" data-imgbigurl="layouts/img/product-single/product-1.jpg"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input name="quantity" type="text" value="1">
                                    </div>
                                    <input name="add_cart" type="submit" value="Thêm Vào Giỏ Hàng" class="primary-btn pd-cart"/>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>Loại Hàng</span>: <?php echo $product['name_cate']?></li>
                                </ul>
                                <div class="pd-share">
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">Giới Thiệu Sản Phẩm</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">Thông Số Áo</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Bình Luận</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                <h5>Features</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Giá</td>
                                                <td>
                                                    <div class="p-price">$495.00</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Số Lượng Còn</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">Xxl</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sku</td>
                                                <td>
                                                    <div class="p-code">00012</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="show-cm">
                                        <?php foreach($comments as $cm ){?>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="layouts/img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <h5><?php echo $cm['fullname']; ?> <span><?php echo $cm['created'] ?></span></h5>
                                                    <div class="at-reply"><?php echo $cm['content'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                        <?php
                                          if(isset($_SESSION['login'])){
                                        ?>
                                        <div class="leave-comment">
                                            <h4>Bình Luận Về Sản Phẩm</h4>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                          <input type="hidden" id="id_pro" value="<?=$_GET['id']?>">
                                                          <input type="hidden" id="id_user" value="<?=$_SESSION['id']?>">
                                                          <input type="hidden" id="name" value="<?=$_SESSION['login']?>">
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages" id="content"></textarea>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                        </div>
                                      <?php }else { ?>
                                        <div class="leave-comment">
                                            <h4>Mời Bạn Đăng Nhập Để Bình Luận</h4>
                                            <button type="submit" class="fakelogin">Đăng Nhập</button>
                                      <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Hàng Cùng Loại</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                foreach ($product_cate as $pro_cate):
              ?>
              <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                      <div class="pi-pic">
                          <img src="layouts/img/products/<?php echo $pro_cate['img']?>" alt="">
                          <div class="sale pp-sale">Sale<?php echo " ".$pro_cate['promotion']."%"?></div>
                          <div class="icon">
                              <i class="icon_heart_alt"></i>
                          </div>
                          <ul>
                              <li class="w-icon active"><a href="index.php?act=shopping_cart&id=<?php echo $pro_cate['id_pro']?>"><i class="icon_bag_alt"></i></a></li>
                              <li class="quick-view"><a href="index.php?act=product&id=<?php echo $pro_cate['id_pro']?>">+ Xem chi tiết</a></li>
                              <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                          </ul>
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name"><?php echo $pro_cate['name_cate']?></div>
                          <a href="#">
                              <h5><?php echo $pro_cate['name']?></h5>
                          </a>
                          <div class="product-price">
                              <?php echo "$".($pro_cate['price']-($pro_cate['price']*($pro_cate['promotion']/100)))?>
                              <span><?php echo "$".$pro_cate['price']?></span>
                          </div>
                      </div>
                  </div>
              </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
