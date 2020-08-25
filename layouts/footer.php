<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="layouts/img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="layouts/img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="layouts/img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="layouts/img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="layouts/img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="layouts/img/logo2.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Địa Chỉ: 350 Điện Biên Phủ, Q.Bình Thạnh, TP. Hồ Chí Minh</li>
                        <li>Số Điện Thoại: +84 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Giới Thiệu</h5>
                    <ul>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Chính Sách</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>Hỗ Trợ</h5>
                    <ul>
                        <li><a href="#">Tuyển Dụng</a></li>
                        <li><a href="#">Đối Tác</a></li>
                        <li><a href="#">Kiểm Tra Đơn Hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Nhận Tin Tức Về Chúng Tôi</h5>
                    <p>Nhận email cập nhật mới nhất về cửa hàng chúng tôi</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Nhập Mail">
                        <button type="button">Đăng Ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> DUKKA STORE | Trang Được Tạo Bởi <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="?" target="_blank">PS08919 PS08899</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="layouts/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="layouts/js/jquery-3.3.1.min.js"></script>
<script src="layouts/js/bootstrap.min.js"></script>
<script src="layouts/js/jquery-ui.min.js"></script>
<script src="layouts/js/jquery.countdown.min.js"></script>
<script src="layouts/js/jquery.nice-select.min.js"></script>
<script src="layouts/js/jquery.zoom.min.js"></script>
<script src="layouts/js/jquery.dd.min.js"></script>
<script src="layouts/js/jquery.slicknav.js"></script>
<script src="layouts/js/owl.carousel.min.js"></script>
<script src="layouts/js/main.js"></script>

<script src="layouts/js/jquery/jquery.min.js"></script>
<script src="layouts/js/ajax.js"></script>
<script src="layouts/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="layouts/js/jquery-easing/jquery.easing.min.js"></script>
<script src="layouts/js/counter/jquery.waypoints.min.js"></script>
<script src="layouts/js/counter/jquery.counterup.min.js"></script>
<script src="layouts/js/custom.js"></script>
<script>

    $(document).ready(function(){

    $(".filter-b").click(function(){
        var value = $(this).attr('data-filter');
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });

    if ($(".filter-b").removeClass("active")) {
      $(this).removeClass("active");
    }
    $(this).addClass("active");
    });


</script>
</body>

</html>
