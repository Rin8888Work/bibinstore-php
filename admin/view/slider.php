<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ SLIDER</h4>
      <form action="?act=slider" method="post">
      <button type="submit" name="add" class="btn btn-secondary" style="font-weight:bold;">Thêm</button>
      </form>
    </div>
    <?php if(isset($_POST['add'])){ ?>
      <form action="?act=addslider" method="post" enctype="multipart/form-data">
         <div class="card-body table-responsive col-lg-6" style="margin:0px auto">
                    <div class="group-input col-lg-12">
                            <label for="username">Sự Kiện</label>
                            <input type="text" class="tittle" name="event">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Nội Dung</label>
                            <textarea style="width:100%;" rows="5" class="content" name="content"></textarea>

                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Giảm</label>
                            <textarea style="width:100%;" rows="3" class="slogan" name="sale"></textarea>

                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <input type="submit" class="btn btn-warning addnew" style="margin:0px auto;" name="addnewslider">
                    </div>
      </div>
      </form>
    <?php } ?>
    <?php if(isset($_GET['id'])){
      $id = $_GET['id'];
      $data=$sliders->getOneSlider($id);
      ?>
      <form action="?act=update_slider&id=<?php echo $id?>" method="post" enctype="multipart/form-data">
         <div class="card-body table-responsive col-lg-6" style="margin:0px auto">
                    <div class="group-input col-lg-12">
                            <label for="username">Sự Kiện</label>
                            <input type="text" class="tittle" name="event" value="<?php echo $data['event']?>">
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Nội Dung</label>
                            <textarea style="width:100%;" rows="5" class="content" name="content" ><?php echo $data['content']?></textarea>

                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Giảm</label>
                            <textarea style="width:100%;" rows="3" class="slogan" name="sale" ><?php echo $data['sale']?></textarea>

                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="hidden" name="img" value="<?php echo $data['img']?>">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <input type="submit" class="btn btn-warning addnew" value="Cập Nhật"style="margin:0px auto;" name="update_slider">
                    </div>
      </div>
      </form>
    <?php } ?>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Hình Ảnh</th>
          <th>Hiển Thị</th>
          <th>Sự Kiện</th>
          <th>Nội Dung</th>
          <th>Giảm Giá</th>
          <th>Chức Năng</th>
        </thead>
        <tbody class="test">
          <?php
          $i = 0;
            foreach ($slider as $values):
              $i++;
            ?>
          <tr>
            <td><?php echo $i?></td>
            <td><img src="../layouts/img/<?php echo $values['img']?>" width="500"></td>
            <?php if($values['type']==0){?>
            <td >
              <input type="hidden" class="data1" value="1">
              <button class="btn btn-success" onclick="off(<?php echo $values['id']?>)" type="submit">Bật</button>
            </td>
          <?php }if($values['type']==1){?>
            <td >
              <input type="hidden" class="data2" value="0">
              <button class="btn btn-danger "  onclick="on(<?php echo $values['id']?>)"  type="submit">Tắt</button>
            </td>
            <?php }?>
            <td><?php echo $values['event']?></td>
            <td><?php echo $values['content']?></td>
            <td><?php echo $values['sale']?></td>
            <td><a href="?act=slider&id=<?php echo $values['id']?>" class="btn btn-success">Sửa</a> <a onclick="delete_slider(<?php echo $values['id']; ?>)" class="btn btn-danger">Xóa</a></td>
          </tr>
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script>
// Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
