    <!-- Hero Section Begin -->
        <section class="hero-section">
            <div class="hero-items owl-carousel">
            <?php foreach ($data_slider as $data): ?>
                <div class="single-hero-items set-bg" data-setbg="layouts/img/<?php echo $data['img']  ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <h1><?php echo $data['event']  ?></h1>
                                <p><?php echo $data['content']  ?></p>
                                <a href="?act=shop" class="primary-btn">Mua Ngay</a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span><?php echo $data['sale'] ?>%</span></h2>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
              <?php foreach ($data_sex as $sex): ?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="layouts/img/<?php echo $sex['image'];?>" alt="">
                        <div class="inner-text">
                            <h4><a href="?act=shop&id_sex=<?php echo $sex["id_sex"];?>" style="color:black;"><?php echo $sex['name_sex'];?></a></h4>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="layouts/img/products/women-large.jpg">
                        <h2>Nữ</h2>
                        <a href="?act=shop&id_sex=2">Xem Thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Nổi Bật</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                      <?php foreach ($data_women as $women): ?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="layouts/img/products/<?php echo $women['img'];?>" alt="">
                                <?php if($women['promotion']>0){?>
                                <div class="sale">Sale <?php echo $women['promotion']?>%</div>
                                <?php }?>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="?act=shopping_cart&id=<?php echo $women['id_pro']?>"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="?act=product&id_sex=<?php echo $women['id_sex'];?>&id=<?php echo $women['id_pro']?>">+ Xem chi tiết</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?php echo $women['name_cate']?></div>
                                <a href="#">
                                    <h5><?php echo $women['name']?></h5>
                                </a>
                                <div class="product-price">
                                  <?php if($women['promotion']>0){?>
                                    <?php echo $women['price']-(($women['price']*$women['promotion'])/100)?>
                                    <span><?php echo $women['price']?></span>
                                  <?php }else { ?>
                                    <?php echo $women['price']?>
                                  <?php }?>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?></foreach>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="layouts/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Hàng Sale Của Tháng</h2>
                    <p>Túi chính hãng nhập khẩu từ Mỹ, kiểu dáng sành điệu sang trọng. </p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>80</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="?act=shop" class="primary-btn">Mua Ngay</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Nổi Bật</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php foreach ($data_men as $men): ?>
                          <div class="product-item">
                              <div class="pi-pic">
                                  <img src="layouts/img/products/<?php echo $men['img'];?>" alt="">
                                  <?php if($men['promotion']>0){?>
                                  <div class="sale">Sale <?php echo $men['promotion']?>%</div>
                                  <?php }?>
                                  <div class="icon">
                                      <i class="icon_heart_alt"></i>
                                  </div>
                                  <ul>
                                      <li class="w-icon active"><a href="?act=shopping_cart&id=<?php echo $men['id_pro']?>"><i class="icon_bag_alt"></i></a></li>
                                      <li class="quick-view"><a href="?act=product&id_sex=<?php echo $men['id_sex'];?>&id=<?php echo $men['id_pro']?>">+ Xem chi tiết</a></li>
                                      <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                  </ul>
                              </div>
                              <div class="pi-text">
                                  <div class="catagory-name"><?php echo $men['name_cate']?></div>
                                  <a href="#">
                                      <h5><?php echo $men['name']?></h5>
                                  </a>
                                  <div class="product-price">
                                    <?php if($men['promotion']>0){?>
                                      <?php echo $men['price']-(($men['price']*$men['promotion'])/100)?>
                                      <span><?php echo $men['price']?></span>
                                    <?php }else { ?>
                                      <?php echo $men['price']?>
                                    <?php }?>
                                  </div>
                              </div>
                          </div>
                        <?php endforeach; ?></foreach>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="layouts/img/products/man-large.jpg">
                        <h2>Nam</h2>
                        <a href="?act=shop&id_sex=1">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
      <?php
      foreach ($data_collection as $collection):
      ?>
        <div class="insta-item set-bg" data-setbg="layouts/img/blog/<?php echo $collection['thumbnail'] ?>">
            <div class="inside-text">
                <a href="index.php?act=collection&id=<?php echo $collection['id']?>"><i class="ti-instagram"></i></a>
                <h5><a href="index.php?act=collection&id=<?php echo $collection['id']?>"><?php echo $collection['name'] ?></a></h5>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tin Tức Mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                foreach ($data_news as $new):
              ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                      <a href="?act=blog_details&id=<?php echo $new['id_new']?>">
                        <img src="layouts/img/<?php echo $new['img']?>" alt="">
                      </a>
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?php echo $new['create_date']?>
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="?act=blog_details&id=<?php echo $new['id_new']?>">
                                <h4><?php echo $new['title']?></h4>
                            </a>
                            <p><?php echo substr($new['content'],0,80)."..."?></p>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="layouts/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Miễn Phí Ship</h6>
                                <p>Đơn Hàng Hơn 200$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="layouts/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao Hàng Đúng Hạn</h6>
                                <p>Giao Nhanh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="layouts/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh Toán</h6>
                                <p>100% An Toàn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
