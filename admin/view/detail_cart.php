<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">CHI TIẾT ĐƠN HÀNG</h4>
    <a href="?act=warehouse" class="btn btn-secondary" style="font-weight:bold;">Quay Lại</a>
    </div>

    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>Mã đơn hàng</th>
          <th>Tên Sản Phẩm</th>
          <th>Hình</th>
          <th>Số Lượng</th>
          <th>Giá</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;">
          <?php
          $i = 0;
            foreach ($detai_cart as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $values['id_cart']?></td>
            <td><?php echo $values['name']?></td>
            <td><img src="../layouts/img/products/<?php echo $values['img']?>" width="100"></td>
            <td><?php echo $values['quantity']?></td>
            <td>$<?php echo $values['price']*$values['quantity']?></td>
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
