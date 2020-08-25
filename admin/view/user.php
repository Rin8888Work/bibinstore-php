<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ NGƯỜI DÙNG</h4>
      <form action="?act=user" method="post">
      <button type="submit" name="add" class="btn btn-secondary" style="font-weight:bold;">Thêm</button>
      </form>
    </div>
        <?php if(isset($_POST['add'])){?>
     
      <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input col-lg-12">
                            <label for="username">Tên Đăng Nhập(Email)</label>
                            <input type="text" id="username" placeholder="" class="user">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Mật Khẩu</label>
                            <input type="pass" id="username" placeholder="" class="pass">
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Họ Tên</label>
                            <input type="text" id="username" class="fullname">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Địa Chỉ</label>
                            <input type="text" id="username" class="address">
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Số Điện Thoại</label>
                            <input type="text" id="username" class="phone">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Quyền Hạn</label>
                            <select name="cars" class="custom-select mb-3 chucvu" style="height:50px">
                                <option value="1">ADMIN</option>
                                <option value="0">Khách Hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning adduser" style="margin:0px auto;">Thêm</button>
                    </div>
      </div>
    
     <?php } else if(isset($_GET['id_user'])){
     if($Userid['permission']==0){ 
      echo '<script>alert("Bạn Không Có Quyền Sửa Thông Tin Khách Hàng")</script>';
      } else { ?>
            <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input col-lg-12">
                            <label for="username">Tên Đăng Nhập(Email)</label>
                            <input type="text" id="username" placeholder="" class="user" value="<?php echo $Userid['email'] ?>" readonly>
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Mật Khẩu Hien Tai</label>
                            <input type="pass" id="username" placeholder="Nếu Không Đổi Mật Khẩu Không cần nhập" class="pass">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Mật Khẩu Mới</label>
                            <input type="pass" id="username" placeholder="Nếu Không Đổi Mật Khẩu Không cần nhập" class="newpass">
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Họ Tên</label>
                            <input type="text" id="username" class="fullname" value="<?php echo $Userid['fullname'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Địa Chỉ</label>
                            <input type="text" id="username" class="address" value="<?php echo $Userid['address'] ?>">
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Số Điện Thoại</label>
                            <input type="text" id="username" class="phone" value="<?php echo $Userid['phone'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Quyền Hạn</label>
                            <select name="cars" class="custom-select mb-3 chucvu" style="height:50px">
                                <option value="1">ADMIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning" style="margin:0px auto;" onclick="update_user(<?php echo $Userid['id_user'] ?>)">Sửa</button>
                    </div>
      </div>
     
     <?php } }  ?>
   
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Email</th>
          <th>Tên</th>
          <th>Số Điện Thoại</th>
          <th>Địa Chỉ</th>
          <th>Quyền Truy Cập</th>
          <th>Chức Năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($user as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['email']?></td>
            <td><?php echo $values['fullname']?> </td>
            <td><?php echo $values['phone']?></td>
            <td><?php echo $values['address']?></td>
            <?php
              if($values['permission'] == 0){
            ?>
            <td>Người Dùng</td>
          <?php }else {?>
            <td>Admin</td>
          <?php }?>
            <td><a href="?act=user&id_user=<?php echo $values['id_user']?>" class="btn btn-success">Sửa</a> 
                <?php if($_SESSION['admin']=="Nguyễn Văn Phước"){ ?>
                <a onclick="delete_user(<?php echo $values['id_user']?>)" class="btn btn-danger">Xóa</a></td>
                <?php } ?>
          </tr>
          <?php
          endforeach;
          ?>
        </tbody>
      </table>
    </div>

  </div>
</div>
</div>
