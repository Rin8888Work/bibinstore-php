<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ BÌNH LUẬN</h4>
    </div>

    <div class="card-body table-responsive" style="display:grid; grid-template-columns:auto auto;">
      <div style="margin:10px;">
      <a  class="card-header card-header-warning" style="margin-top: 20px;display: flex;justify-content: center;;">
        <h4 class="card-title" style="line-height:50px;">BÌNH LUẬN SẢN PHẨM</h4>
      </a>
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Tên Sản Phẩm</th>
          <th>Số Comment</th>
          <th>Chi Tiết</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;">
          <?php
          $i = 0;
            foreach ($comment_pro as $values):
              $i++;
            ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['name']?></td>
            <td>
              <?php
                  $id_pros= $values['id_pro'];
                  $counts= $comments->countCmtPros($id_pros);
                  $count=count($counts);
                  echo $count;
              ?>
            </td>
            <td><a href="?act=detail_comment&product=<?php echo $values['id_pro']?>" class="btn btn-success">Xem Chi Tiết</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      </div>
      <div style="margin:10px;">
      <a  class="card-header card-header-warning" style="margin-top: 20px;display: flex;justify-content: center;">
        <h4 class="card-title" style="line-height:50px;">BÌNH LUẬN BÀI VIẾT</h4>
      </a>
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Tên Bài Viết</th>
          <th>Số Comment</th>
          <th>Chi Tiết</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;">
          <?php
          $i = 0;
            foreach ($comment_stt as $values):
              $i++;
            ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $values['title']?></td>
            <td><?php
                $id_news= $values['id_new'];
                $counts= $comments->countCmtNews($id_news);
                $count=count($counts);
                echo $count;
                 ?></td>
            <td><a href="?act=detail_comment&stt=<?php echo $values['id_new']?>" class="btn btn-success">Xem Chi Tiết</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    </div>

  </div>
</div>
</div>
