<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="?"><i class="fa fa-home"></i>Trang Chủ</a>
                    <span>Bộ Sưu Tập</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2><?php echo $collection['name']?></h2>
                        <p>travel <span>- May 19, 2019</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="layouts/img/blog/<?php echo $collection['thumbnail']?>" alt="">
                    </div>
                    <div class="blog-detail-desc">

                    </div>
                    <div class="blog-quote">
                        <p>“ <?php echo $collection['tieu_de']?>” <span>- <?php echo $collection['tac_gia']?></span></p>
                    </div>
                    <div class="blog-more">
                        <div class="row">
                          <?php foreach ($img as $image):
                          ?>
                            <div class="col-sm-4">
                                <img src="layouts/img/products/<?php echo $image['image']?>" alt="">
                            </div>
                          <?php endforeach;?>
                        </div>
                    </div>
                    <p><?php echo $collection['content']?></p>
                    <div class="tag-share">
                        <div class="details-tag">
                            <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>Travel</li>
                                <li>Beauty</li>
                                <li>Fashion</li>
                            </ul>
                        </div>
                        <div class="blog-share">
                            <span>Share:</span>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
