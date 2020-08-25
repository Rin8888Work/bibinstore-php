  function on(id)
  {
    var type= $('.data2').val().trim();
      $.ajax({
          url:"model/ChangeTypeSlider.class.php",
          method:"POST",
          data:{type:type,id:id},
          success:function(data){
            location.reload();
            var_dump(id);
          }
      });
  }

  function off(id)
  {
    var type= $('.data1').val().trim();
      $.ajax({
          url:"model/ChangeTypeSlider.class.php",
          method:"POST",
          data:{type:type,id:id},
          success:function(data){
            location.reload();
            var_dump(id);
            var_dump(type);
          }
      });
  }
  function delete_commenttintuc(id)
{
    var idtt = $('.stt').val().trim();
        $.ajax({
            url:"model/Ajax_comment.class.php",
            method:"POST",
            data:{deletetintuc:id,idtt:idtt},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}
  function delete_commentpro(id)
{
    var idpro = $('.idpro').val().trim();
        $.ajax({
            url:"model/Ajax_comment.class.php",
            method:"POST",
            data:{deletepro:id,idpro:idpro},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}
function update_user(id)
{
    var newuser = $(".user").val();
    var pass = $(".pass").val();
    var fullname = $(".fullname").val();
    var address = $(".address").val();
    var newpass = $(".newpass").val();
    var phone = $(".phone").val();
        $.ajax({
            url:"model/Ajax_user.class.php",
            method:"POST",
            data:{update_user:id,newuser:newuser,pass:pass,fullname:fullname,address:address,phone:phone,newpass:newpass},
            success:function(data){
                alert("Sửa Thông Tin Thành Công");
                $('.test').html(data);
            }
        });

}
function update_cart(id)
{
    var fullname = $(".name").val();
    var address = $(".address").val();
    var phone = $(".phone").val().trim();
        $.ajax({
            url:"model/Ajax_cart.class.php",
            method:"POST",
            data:{update_cart:id,fullname:fullname,address:address,phone:phone},
            success:function(data){
                alert("Sửa Thông Tin Thành Công");
                $('.test').html(data);
            }
        });

}
function delete_user(id)
{
        $.ajax({
            url:"model/Ajax_user.class.php",
            method:"POST",
            data:{delete:id},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}
function delete_slider(id)
{
        $.ajax({
            url:"model/Ajax_slider.class.php",
            method:"POST",
            data:{delete:id},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}


function delete_cart(id)
{
        $.ajax({
            url:"model/Ajax_cart.class.php",
            method:"POST",
            data:{delete:id},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}

function delete_pro(id)
{
        $.ajax({
            url:"model/Ajax_product.class.php",
            method:"POST",
            data:{delete:id},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}

function delete_cate(id)
{
        $.ajax({
            url:"model/Ajax_categories.class.php",
            method:"POST",
            data:{delete:id},
            success:function(data){
                alert('Xóa Thành Công');
                $('.test').html(data);
            }
        });

}
function update_cate(id)
{
        var newupdate = $('.updatecate').val().trim();
        $.ajax({
            url:"model/Ajax_categories.class.php",
            method:"POST",
            data:{update:id,newupdate:newupdate},
            success:function(data){
                alert('Update Thành Công');
                $('.test').html(data);
            }
        });

}
$(document).ready(function(){
function addcate()
{
    var catenew = $(".newcate").val();
        $.ajax({
            url:"model/Ajax_categories.class.php",
            method:"POST",
            data:{catenew:catenew},
            success:function(data){
                alert('Thêm Thành Công');
                $('.test').html(data);
            }
        });

}


$(document).on('click','.addcate',function(){
    addcate();
});


function adduser()
{
    var adduser = 'action';
    var newuser = $(".user").val();
    var pass = $(".pass").val();
    var fullname = $(".fullname").val();
    var address = $(".address").val();
    var phone = $(".phone").val();
    var chucvu = $(".chucvu").val();
        $.ajax({
            url:"model/Ajax_user.class.php",
            method:"POST",
            data:{adduser:adduser,newuser:newuser,pass:pass,fullname:fullname,address:address,phone:phone,chucvu:chucvu},
            success:function(data){
                alert('Thêm Thành Công');
                $('.test').html(data);
            }
        });

}


$(document).on('click','.adduser',function(){
    adduser();
});


});
