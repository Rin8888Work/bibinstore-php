<div class="main-panel">
<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
      <h4 class="card-title" style="line-height:50px;">QUẢN LÝ BÀI VIẾT</h4>
      <form action="?act=news" method="post">
      <button type="submit" name="add" class="btn btn-secondary" style="font-weight:bold;">Thêm</button>
      </form>
    </div>
<?php if(isset($_POST['add'])){?>
      <form action="?act=addnews" method="post" enctype="multipart/form-data">
         <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input col-lg-12">
                            <label for="username">Tiêu Đề</label>
                            <input type="text" class="tittle" name="title">
                            <input type="hidden" class="iduser" value="<?php echo $_SESSION['id'] ?>" >
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Nội Dung</label>
                            <textarea style="width:100%;" rows="5" class="content" name="content"></textarea>
                        
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Slogan</label>
                            <textarea style="width:100%;" rows="3" class="slogan" name="slogan"></textarea>
                        
                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <input type="submit" class="btn btn-warning addnew" style="margin:0px auto;" name="addnew">
                    </div>
      </div>
      </form>
    <?php } else if(isset($_GET['id_news'])){ ?>
   <form action="?act=updatenews&id_news=<?php echo $_GET['id_news']?>" method="post" enctype="multipart/form-data">
         <div class="card-body table-responsive col-lg-6" style="margin:0px auto">  
                    <div class="group-input col-lg-12">
                            <label for="username">Tiêu Đề</label>
                            <input type="text" class="tittle" name="title" value="<?php echo $newid['title'] ?>">
                            <input type="hidden" name="img" value="<?php echo $newid['img'] ?>" >
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Nội Dung</label>
                            <textarea style="width:100%;" rows="5" class="content" name="content" ><?php echo $newid['content'] ?></textarea>
                        
                    </div>
                    <div class="group-input col-lg-12">
                            <label for="username">Slogan</label>
                            <textarea style="width:100%;" rows="3" class="slogan" name="slogan" ><?php echo $newid['nhan_xet'] ?></textarea>
                        
                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <input type="submit" class="btn btn-warning updatenew" style="margin:0px auto;" name="updatenew" value="sửa">
                    </div>
      </div>
      </form>      
     <?php } ?>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning" style="text-align: center;">
          <th>ID</th>
          <th>Tiêu Đề</th>
          <th>Nội Dung</th>
          <th>Hình Ảnh</th>
          <th>Người Đăng</th>
          <th>Ngày Đăng</th>
          <th>Slogan</th>
          <th>Chức Năng</th>
        </thead>
        <tbody  style="text-align: center;font-size: 17px;" class="test">
          <?php
          $i = 0;
            foreach ($new as $values):
              $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $values['title']?></td>
            <td><?php echo substr($values['content'],0,50)."..."?></td>
            <td><img src="../layouts/img/<?php echo $values['img']?>" width="100"></td>
            <td><?php echo $values['fullname']?></td>
            <td><?php echo $values['create_date']?></td>
            <td><?php echo substr($values['nhan_xet'],0,50)."..."?></td>
            <td><a href="?act=news&id_news=<?php echo $values['id_new']?>" class="btn btn-success">Sửa</a> <a href="?act=deletenew&id_news=<?php echo $values['id_new']?>" class="btn btn-danger">Xóa</a></td>
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
