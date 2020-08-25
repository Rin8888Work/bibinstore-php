<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ SẢN PHẨM</h4>
      <form action="?act=products" method="post">
      <button type="submit" name="add" class="btn btn-secondary" style="font-weight:bold;">Thêm</button>
      </form>
    </div>
    <?php if(isset($_POST['add'])){ ?>
        <div class="card-body table-responsive col-lg-6" style="margin:0px auto">
            <form action="?act=addproducts" method="post" enctype="multipart/form-data">
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Sản Phẩm</label>
                            <input type="text" name="name">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giá Sản Phẩm</label>
                            <input type="text" name="price">
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Mô Tả Sản Phẩm</label>
                            <input type="text" name="detail">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giảm Giá</label>
                            <input type="text" name="sale">
                        </div>
                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Loại</label>
                            <select name="cate" class="custom-select mb-3">
                                  <?php foreach($cate as $cate){ ?>
                                  <option value="<?php echo $cate['id']?>"><?php echo $cate['name_cate']?></option>
                                  <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giới Tính</label>
                            <select name="sex" class="custom-select mb-3">
                                <?php foreach($sex as $sex){ ?>
<option value="<?php echo $sex['id_sex']?>"><?php echo $sex['name_sex']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning" style="margin:0px auto;" name="addnewproducts">Thêm</button>
                    </div>
                </form>
        </div>
    <?php } else if(isset($_GET['id_pro'])){ ?>
             <div class="card-body table-responsive col-lg-6" style="margin:0px auto">
            <form action="?act=updateproducts&id_pro=<?php echo $_GET['id_pro']?>" method="post" enctype="multipart/form-data">
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Sản Phẩm</label>
                            <input type="text" name="name" value="<?php echo $proid['name']?>">
                            <input type="hidden" name="img" value="<?php echo $proid['img']?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giá Sản Phẩm</label>
                            <input type="text" name="price" value="<?php echo $proid['price']?>">
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Mô Tả Sản Phẩm</label>
                            <input type="text" name="detail" value="<?php echo $proid['detail']?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giảm Giá</label>
                            <input type="text" name="sale" value="<?php echo $proid['promotion']?>">
                        </div>
                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Loại</label>
                            <select name="cate" class="custom-select mb-3">
                                  <?php foreach($cate as $cate){
                                      if($cate['id'] == $proid['id_cate']){
                                    $s1="selected";
                                    }else{
$s1="";
                                    } ?>
                                  <option value="<?php echo $cate['id']?>" <?=$s1?>><?php echo $cate['name_cate']?></option>
                                  <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giới Tính</label>
                            <select name="sex" class="custom-select mb-3">
                                <?php foreach($sex as $sex){
                                      if($sex['id_sex'] == $proid['id_sex']){
                                    $s1="selected";
                                    }else{
                                    $s1="";
                                    } ?>
                                <option value="<?php echo $sex['id_sex']?>" <?=$s1?>><?php echo $sex['name_sex']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning" style="margin:0px auto;" name="updatenewproducts">Sửa</button>
                    </div>
                </form>
        </div>
    <?php } ?>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>STT</th>
          <th>Tên Sản Phẩm</th>
          <th>Giá</th>
          <th>Hình Ảnh</th>
          <th>Mô Tả</th>
          <th>Tên Loại</th>
          <th>Giảm Giá</th>
          <th>Giới Tính</th>
          <th>Chức Năng</th>
        </thead>
        <tbody class="test" style="text-align: center;font-size: 17px;">
          <?php
          $i = 0;
            foreach ($product as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['name']?></td>
            <td>$<?php echo $values['price']?> </td>
            <td><img src="../layouts/img/products/<?php echo $values['img']?>" width="100"></td>
            <td><?php echo $values['detail']?></td>
            <td><?php echo $values['name_cate']?></td>
            <td><?php echo $values['promotion']?> %</td>
            <td><?php echo $values['name_sex']?></td>
            <td><a href="?act=products&id_pro=<?php echo $values['id_pro']?>" class="btn btn-success">Sửa</a> <a onclick="delete_pro(<?php echo $values['id_pro']?>)"class="btn btn-danger">Xóa</a></td>
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
<script>
// Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
