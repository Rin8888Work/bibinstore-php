//ajax

function filter_data(page)
{

    var min = $('#minamount').val().trim();
    var max = $('#maxamount').val().trim();
    var cate = get_filter('cate');
    var showcount = document.getElementById("select").value;
    var sex = $("#sex2").val().trim();
    var search = $("#search").val().trim();

    $.ajax({
        url:"classes/Fetch_ajax.class.php",
        method:"POST",
        data:{cate:cate,sex:sex,min:min,max:max,showcount:showcount,search:search,page:page},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}
$(document).ready(function(){


$('.click').click(function(){
    filter_data(1);
});


});

// search news
$(document).ready(function(){



function tintuc()
{



    var search = $("#searchtintuc").val().trim();

    $.ajax({
        url:"classes/News-ajax.class.php",
        method:"POST",
        data:{search:search},
        success:function(data){
            $('.tintuc').html(data);
        }
    });
}



$('.clicksearch').click(function(){
    tintuc();
});



});


//ajax_cart
// search news




function delete_cart(id)
{
    $.ajax({
        url:"classes/Ajax_cart.class.php",
        method:"POST",
        data:{delete:id},
        success:function(data){
            $('.cart').html(data);
        }
    });
}

function update_increase_cart(id)
{
var quantity = $('#qty'+id).val();

    quantity++;

    $.ajax({
        url:"classes/Ajax_cart.class.php",
        method:"POST",
        data:{update:id,quantity:quantity},
        success:function(data){
            $('.cart').html(data);
        }
    });
}

function update_cart(id)
{
var quantity = $('#qty'+id).val();
    $.ajax({
        url:"classes/Ajax_cart.class.php",
        method:"POST",
        data:{update:id,quantity:quantity},
        success:function(data){
            $('.cart').html(data);
        }
    });
}

function update_low_cart(id)
{
var quantity = $('#qty'+id).val();

    quantity--;

    $.ajax({
        url:"classes/Ajax_cart.class.php",
        method:"POST",
        data:{update:id,quantity:quantity},
        success:function(data){
            $('.cart').html(data);
        }
    });
}

// comment_ajax
$(document).ready(function(){
function comment()
{



    var pro = $("#id_pro").val();
    var user = $("#id_user").val();
    var content = $("#content").val();
    if((user != "") && (content != "")) {

        $.ajax({
            url:"classes/Comment_ajax.class.php",
            method:"POST",
            data:{pro:pro,user:user,content:content},
            success:function(data){
                $('#content').val('');
                $('.show-cm').html(data);
            }
        });
      } else {
              alert('Cảnh Báo Chưa Đăng Nhập Hoặc Chưa Nhập Bình Luận');
      }
}


$(document).on('click','.site-btn',function(){
    comment();
});
$(document).on('click','.fakelogin',function(){
    window.location.assign('index.php?act=login');
});


});
//
//ajax_count_pro
$(document).ready(function(){



function filter_data()
{

var min = $('#minamount').val().trim();
var max = $('#maxamount').val().trim();
var sex = $('#sex2').val().trim();
var cate = get_filter('cate');
var showcount = document.getElementById("select").value;
var search = $("#search").val().trim();

$.ajax({
    url:"classes/Count_pro.class.php",
    method:"POST",
    data:{cate:cate,showcount:showcount,sex:sex,search:search,min:min,max:max},
    success:function(data){
        $('.count_pro').html(data);
    }
});
}

function get_filter(class_name)
{
var filter = [];
$('.'+class_name+':checked').each(function(){
    filter.push($(this).val());
});
return filter;
}

$('.click').click(function(){
filter_data();
});
$('.filter-btn').click(function(){
  filter_data();

});



});
//cart_ajax
// filter_price
$(document).ready(function(){


});
//phân trang
// $(document).ready(function(){
//        function load(){
//
//                phantrang(1);
//
//        }
//        function phantrang(page){
//                    $.ajax({
//
//                        type:"get",
//
//                        url:"classes/phantrang.class.php",
//
//                        data:{page:page},
//
//                        success:function(data){
//                            $(".filter_data").html(data);
//
//                            //alert(data);
//
//                        }
//
//                    });
//
//        }
//
//        load();
//        $("ul.pagination li").live("click",function(){
//
//           var page=$(this).attr('page');
//
//            phantrang(page);
//
//        //    alert(page);
//
//        });
//
// });
