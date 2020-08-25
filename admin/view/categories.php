<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ DANH MỤC</h4>
      <form action="?act=categories" method="post">
      <button type="submit" name="add" class="btn btn-secondary" style="font-weight:bold;">Thêm</button>
      </form>
    </div>
     <?php if(isset($_POST['add'])){?>
     
      <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input">
                            <label for="username">Tên Loại</label>
                            <input type="text" id="username" placeholder="Nhập Tên Loại...." class="newcate">
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning addcate" style="margin:0px auto;">Thêm</button>
                    </div>
      </div>
    
     <?php } else if(isset($_GET['id_cate'])){?>
      <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input">
                            <label for="username">Tên Loại</label>
                            <input type="text" id="username" value="<?=$categoryid['name_cate']?>" class="updatecate">
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button style="margin:0px auto;" class="btn btn-warning" onclick="update_cate(<?=$categoryid['id']?>)">Sửa</button>
                    </div>
      </div>
     <?php } ?>
      
    <div class="card-body table-responsive col-lg-6" style="margin:0px auto">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Tên Loại</th>
          <th>Chức Năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($category as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['name_cate']?></td>
            <td><a href="?act=categories&id_cate=<?php echo $values['id']?>" class="btn btn-success">Sửa</a> <a onclick="delete_cate(<?php echo $values['id']; ?>)" class="btn btn-danger">Xóa</a></td>
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
