<div class="main-panel">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning" style="display: flex;justify-content: space-between;">
                <h4 class="card-title" style="line-height:50px;">QUẢN LÝ SẢN PHẨM</h4>
                <a href="?act=product" class="btn btn-secondary" style="font-weight:bold;">Thêm</a>
            </div>
            <div class="card-body table-responsive col-lg-6" style="margin:0px auto">


                <form action="#" class="form-dep">
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Sản Phẩm</label>
                            <input type="text" id="username">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giá Sản Phẩm</label>
                            <input type="text" id="username">
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Mô Tả Sản Phẩm</label>
                            <input type="text" id="username">
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giảm Giá</label>
                            <input type="text" id="username">
                        </div>
                    </div>
                    <div class="group-input col-lg-12">
                        <label for="username">Hình Ảnh</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="group-input col-lg-12">
                        <div class="custom-file mb-3">
                            <textarea style="width:100%;" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="group-input" style="display: flex;">
                        <div class="col-lg-6">
                            <label for="username">Tên Loại</label>
                            <select name="cars" class="custom-select mb-3">
                                <option selected>Custom Select Menu</option>
                                <option value="volvo">Volvo</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="username">Giới Tính</label>
                            <select name="cars" class="custom-select mb-3">
                                <option selected>Custom Select Menu</option>
                                <option value="volvo">Volvo</option>
<option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="display:flex">
                        <button type="submit" class="btn btn-warning" style="margin:0px auto;">Thêm</button>
                    </div>
                </form>
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
