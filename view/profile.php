<div class="container">
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="?"><i class="fa fa-home"></i>Trang Chủ</a>
                      <span>Thông Tin Khách Hàng</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
<div class="container-fluid p-0">

<!--====================================================
                    ABOUT
======================================================-->


<!--====================================================
                    Thông Tin
======================================================-->
<form action="?act=profile" method="post">
  <section class="resume-section p-3 p-lg-5 " id="experience" style="text-align: center">
      <div class="row my-auto" style="text-align: left;">
          <div class="col-12">
            <h4 class="text-center">Thông Tin</h4>
            <div class="mb-5 heading-border"></div>
          </div>
          <div class="resume-item col-md-6 col-sm-12 " >
            <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class=" resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> Tên</h4>
                  <input name="fullname" class="inputinfo" type="text" value="<?php echo $users['fullname']?>">
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Số Điện Thoại</h4>
                  <input name="phone" class="inputinfo" type="text" value="<?php echo $users['phone']?>" >
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #28a745; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> Địa Chỉ</h4>
                  <input name="address" class="inputinfo" type="text" value="<?php echo $users['address']?>">
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #2196f3; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-area-chart mr-3 text-primary"></i> Email</h4>
                  <input name="email" class="inputinfo" type="text" value="<?php echo $users['email']?>">
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Mật Khẩu Hiện Tại</h4>
                  <input name="pass" class="inputinfo" type="text" >
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Nhập Mật Khẩu Mới</h4>
                  <input name="new_pass" class="inputinfo" type="text" >
              </div>
            </div>
          </div>
          <div class="resume-item col-md-6 col-sm-12">
            <div class="card mx-0 p-4 mb-5" style="border-color: #ffc107; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
              <div class="resume-content mr-auto">
                  <h4 class="mb-3"><i class="fa fa-laptop mr-3 text-warning"></i> Nhập Lại Mật Khẩu Mới</h4>
                  <input name="new_pass_again" class="inputinfo" type="text" >
              </div>
            </div>
          </div>


      </div>
      <button name="update_profile" type="submit" style="padding:10px; outline:none; border:2px solid black;border-radius:10px; background: white;cursor: pointer;">Thay Đổi</button>
  </section>
</form>

<!--====================================================
                    Danh Sách Yêu Thích
======================================================-->
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
      <div class="row my-auto">
          <div class="col-12">
            <h4 class="  text-center">Danh Sách Yêu Thích</h4>
            <div class="mb-5 heading-border"></div>
          </div>
      </div>
      <div class="row my-auto">
          <div class="col-sm-4 portfolio-item filter finance">
              <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
              <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
              <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
              <a class="portfolio-link" href="#portfolioModal7" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter consulting">
              <a class="portfolio-link" href="#portfolioModal8" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter finance">
              <a class="portfolio-link" href="#portfolioModal9" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
              <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter marketing">
              <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
          <div class="col-sm-4 portfolio-item filter finance">
              <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
                  <div class="caption-port">
                      <div class="caption-port-content">
                          <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                  </div>
                  <img class="img-fluid" src="layouts/img/products/man-1.jpg" alt="">
              </a>
          </div>
      </div>
  </section>



<!--====================================================
                       Lịch Sử Mua Hàng
======================================================-->
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
      <div class="row my-auto">
          <div class="col-12">
            <h4 class="  text-center">Lịch Sử Mua Hàng</h4>
            <div class="mb-5 heading-border"></div>
          </div>
          <div class="main-award" id="award-box" style="width:100%;">
              <div class="award">
                  <div class="award-icon"></div>
                  <div class="award-content">
                      <span class="date">Apr 2017 - Mar 2018</span>
                      <h5 class="title">Google Analytics Certified Developer</h5>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                      </p>
                  </div>
              </div>
              <div class="award">
                  <div class="award-icon"></div>
                  <div class="award-content">
                      <span class="date">Apr 2018 - Mar 2019</span>
                      <h5 class="title">Mobile Web Specialist - Google Certification</h5>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                      </p>
                      <a href="#portfolioModal1" data-toggle="modal">Xem</a>
                  </div>
              </div>

          </div>
      </div>
  </section>
</div>

<!--====================================================
                Thông Tin Sản Phẩm Yêu Thích
======================================================-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" >
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl"></div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                      <div class="modal-body">
                          <div class="title-bar">
                            <div class="col-md-12">
                              <h2 class="text-center">Sản Phẩm Của Chúng Tôi</h2>
                              <div class="heading-border"></div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <img class="img-fluid img-centered" src="img/portfolio/p-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                              <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                              <ul class="list-inline item-details">
                                  <li>Loại Sản Phẩm
                                      <strong>
                                        <a href="#">April 2018</a>
                                      </strong>
                                  </li>
                                  <li>Giá
                                      <strong>
                                        <a href="#">Web Development</a>
                                      </strong>
                                  </li>
                              </ul>
                              <a href="../index.php?">
                              <button class="btn btn-general btn-white" type="button" >
                                  <i class="fa fa-times"></i> Mua
                              </button>
                              </a>
                              <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                  <i class="fa fa-times"></i> Đóng
                              </button>
                          </div>
                        </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
