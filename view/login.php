
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?"><i class="fa fa-home"></i> Home</a>
                        <span>Đăng nhập</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đăng Nhập</h2>
                        <?php if(isset($_GET['checkout'])){?>
                        <form action="index.php?act=login&checkout" method="post">
                            <div class="group-input">
                                <label for="username">Tên Đăng Nhập *</label>
                                <input name="email" type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu *</label>
                                <input name="pass" type="password" id="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Lưu Mật Khẩu
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Quên Mật Khẩu</a>
                                </div>
                            </div>
                            <button name="login" type="submit" class="site-btn login-btn">Đăng Nhập</button>
                        </form>
                      <?php }else{?>
                        <form action="index.php?act=login" method="post">
                            <div class="group-input">
                                <label for="username">Tên Đăng Nhập *</label>
                                <input name="email" type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu *</label>
                                <input name="pass" type="password" id="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Lưu Mật Khẩu
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Quên Mật Khẩu</a>
                                </div>
                            </div>
                            <button name="login" type="submit" class="site-btn login-btn">Đăng Nhập</button>
                        </form>
                      <?php } ?>
                        <div class="switch-login">
                            <a href="?act=register" class="or-login">Đăng Kí Một Tài Khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
