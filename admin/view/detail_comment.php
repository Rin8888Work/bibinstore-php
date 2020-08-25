
      <?php
        if(isset($_GET['product'])){
      ?>
<input type="hidden" class="idpro" value ="<?php echo $_GET['product']?>">
  <div class="main-panel">
  <div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">CHI TIẾT BÌNH LUẬN SẢN PHẨM</h4>
    <a href="?act=comment" class="btn btn-secondary" style="font-weight:bold;">Quay Lại</a>
    </div>

    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>Mã Bình Luận</th>
          <th>Tên Sản Phẩm</th>
          <th>Hình</th>
          <th>Người Bình Luận</th>
          <th>Nội Dung Bình Luận</th>
          <th>Chức Năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($detail_cmt_pro as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['name']?></td>
            <td><img src="../layouts/img/products/<?php echo $values['img']?>" width="100"></td>
            <td><?php echo $values['fullname']?></td>
            <td><?php echo $values['content']?></td>
            <td><a onclick="delete_commentpro(<?php echo $values['id_comment']; ?>)" class="btn btn-danger">Xóa</a></td>
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
    <?php }
      if(isset($_GET['stt'])){
    ?>
<input type="hidden" class="stt" value ="<?php echo $_GET['stt']?>">
    <div class="main-panel">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
          <h4 class="card-title" style="line-height:50px;">CHI TIẾT BÌNH LUẬN BÀI VIẾT</h4>
        <a href="?act=comment" class="btn btn-secondary" style="font-weight:bold;">Quay Lại</a>
        </div>

        <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>Mã Bình Luận</th>
          <th>Tên Bài Viết</th>
          <th>Người Bình Luận</th>
          <th>Nội Dung Bình Luận</th>
          <th>Chức năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($detail_cmt_stt as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['title']?></td>
            <td><?php echo $values['fullname']?></td>
            <td><?php echo $values['nhan_xet']?></td>
            <td><a onclick="delete_commenttintuc(<?php echo $values['id_comment']; ?>)" class="btn btn-danger">Xóa</a></td>
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
    <?php  }?>
