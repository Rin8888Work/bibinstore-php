
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Sản Phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                  <div class="filter-widget">
                        <h4 class="fw-title">Giới Tính</h4>
                        <ul class="filter-catagories">
                          <?php
                            foreach ($data_sex as $sex):
                          ?>
                          <input type="hidden" value="<?php if(isset($_GET['id_sex'])){echo $_GET['id_sex'];} else {echo '0';}?>" id="sex2">
                            <li><a href="index.php?act=shop&id_sex=<?php echo $sex['id_sex']?>" <?php if(isset($_GET['id_sex'])&& $_GET['id_sex']==$sex['id_sex']){echo 'class="active"';}?>><?php echo $sex['name_sex']?></a></li>
                            <?php
                          endforeach;
                            ?>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Loại Sản Phẩm</h4>
                        <?php foreach ($data_cate as $cate): ?>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="<?php echo $cate['name_cate'] ?>">
                                    <?php echo $cate['name_cate'] ?>
                                    <input type="checkbox" id="<?php echo $cate['name_cate'] ?>" class="click cate" value="<?php echo $cate['id'] ?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>

                    <div class="filter-widget">
                        <h4 class="fw-title">Giá</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input class="min" type="text" id="minamount" >
                                    <input class="max" type="text" id="maxamount" >
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="0" data-max="200">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <input type="submit" class="filter-btn click" value="Filter">
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Màu Sắc</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Đen</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Tím</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Xanh</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Vàng</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Đỏ</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Xanh</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row ">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">

                                    <select  class="click" id="select">
                                      <option  value="">Hiển Thị: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp Tất Cả</option>
                                      <option  value="6">Hiển Thị: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp 6</option>
                                      <option  value="9">Hiển Thị: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp 9</option>
                                      <option  value="12">Hiển Thị: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                              <?php if(isset($_GET['id_sex'])){?>
                                <p class="count_pro">Tìm Thấy <?php echo $count_pro_sex ?> Sản Phẩm</p>
                              <?php }else { ?>
                                <p class="count_pro">Tìm Thấy <?php echo $count_pro ?> Sản Phẩm</p>
                              <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row filter_data">

                          <?php   if($data_serch != NULL){ foreach ($data_serch as $serch): ?>
                          <div class="col-lg-4 col-sm-6">
                              <div class="product-item">
                                  <div class="pi-pic">
                                      <input type="hidden" name="productkey" value="<?php echo $serch['id_pro'];?>"/>
                                      <img src="layouts/img/products/<?php echo $serch['img']?>"alt="">
                                      <div class="sale pp-sale"> Sale <?php echo $serch['promotion']?>%</div>
                                      <div class="icon">
                                          <i class="icon_heart_alt"></i>
                                      </div>
                                      <ul>
                                          <li class="w-icon active"><a href="index.php?act=shopping_cart&id=<?php echo $serch['id_pro']?>"><i class="icon_bag_alt"></i></a></li>
                                          <li class="quick-view"><a href="index.php?act=product&id=<?php echo $serch['id_pro']?>">+ Xem chi tiết</a></li>
                                          <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                      </ul>
                                  </div>
                                  <div class="pi-text">
                                      <div class="catagory-name"><?php echo $serch['name_cate']?></div>
                                      <a href="#">
                                          <h5><?php echo $serch['name']?></h5>
                                      </a>
                                      <div class="product-price">
                                           <?php echo $serch['price']-($serch['price']*($serch['promotion']/100))?>
                                          <span><?php echo $serch['price']?></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <?php endforeach;} else {
                          echo '<h2 style="color:#e7ab3c">LÀM GÌ CÓ SẢN PHẨM MÀ TÌM ! LÊU LÊU</h2>';
                        }?>

                        <div class="loading-more col-lg-12 col-sm-12">
                          <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                              <?=$pagination;?>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                          </ul>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
