<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ ĐƠN HÀNG</h4>
    </div>
<?php if(isset($_GET['id_cart'])){ ?>
     <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input col-lg-12">
                            <label for="username">Tên Khách Hàng</label>
                            <input type="text" id="username" class="name" value="<?php echo $cartid['fullname'] ?>">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Địa Chỉ</label>
                            <input type="pass" id="username" value="<?php echo $cartid['address'] ?>" class="address">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Số Điện Thọai</label>
                            <input type="pass" id="username" value="<?php echo $cartid['phone'] ?>" class="phone">
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning" style="margin:0px auto;" onclick="update_cart(<?php echo $cartid['id_cart'] ?>)">Sửa</button>
                    </div>
     </div>
<?php } ?>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Tên Khách Hàng</th>
          <th>Địa Chỉ</th>
          <th>Số Điện Thoại</th>
          <th>Email</th>
          <th>Tổng Tiền</th>
          <th>Ngày</th>
          <th>Chi Tiết</th>
          <th>Chức Năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($warehouse as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['fullname']?></td>
            <td><?php echo $values['address']?></td>
            <td><?php echo $values['phone']?></td>
            <td><?php echo $values['email']?></td>
            <td>$<?php echo $values['total_price']?></td>
            <td><?php echo $values['created']?></td>
            <td><a href="?act=detail_cart&id=<?php echo $values['id_cart']?>" class="btn btn-rose">Xem Chi Tiết</a></td>
            <td><a href="?act=warehouse&id_cart=<?php echo $values['id_cart']?>" class="btn btn-success">Sửa</a> <a onclick="delete_cart(<?php echo $values['id_cart']?>)"class="btn btn-danger">Xóa</a></td>
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
