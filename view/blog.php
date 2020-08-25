
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Trang Chủ</a>
                        <span>Tin Tức</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Tìm Kiếm</h4>

                                 <input type="text" placeholder="Search . . .  " name="tintuc" id="searchtintuc">
                                <button type="submit" class="clicksearch"><i class="fa fa-search"></i></button>
                        
                        </div>
                        <div class="blog-catagory">
                            <h4>Loại Tin</h4>
                            <ul>
                                <li><a href="#">Thời Trang</a></li>
                                <li><a href="#">Xu Hướng</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>TIN NỔI BẬT</h4>
                            <div class="recent-blog">
                              <?php foreach ($data_blog as $blog):
                              ?>
                                <a href="?act=blog_details&id=<?php echo $blog['id_new']?>" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="layouts/img/blog/<?php echo $blog['img']?>" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $blog['title']?></h6>
                                        <p>Fashion <span>- <?php echo $blog['create_date']?></span></p>
                                    </div>
                                </a>
                              <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row tintuc">
                      <?php foreach ($data_newest as $newest):
                      ?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="layouts/img/blog/<?php echo $newest['img']?>" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="?act=blog_details&id=<?php echo $newest['id_new']?>">
                                        <h4><?php echo $newest['title']?></h4>
                                    </a>
                                    <p>travel <span>- <?php echo $newest['create_date']?></span></p>
                                </div>
                            </div>
                        </div>
                      <?php endforeach;?>
                        <div class="col-lg-12">
                            <div class="loading-more">
                              <ul class="pagination">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
    <!-- Blog Section End -->
