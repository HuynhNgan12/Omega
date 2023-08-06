@extends('layouts.admin')
@section('content')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active">
                <a href="#"><b>Danh sách Tin tức</b></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a data-toggle="modal" data-target="#addModal"
                              class="btn btn-add"
                              title="Thêm"
                              ><i class="fas fa-plus"></i>Tạo mới tin tức</a
                            >
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form method="GET" class="d-flex">
                                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm tin tức"
                                            value="">
                                        <button type="submit" class="btn btn-primary" style="margin-left: 10px">Tìm kiếm</button>
                                    </form>
                                </div>
                            </div>                                                
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ID</th>
                                <th>Tên Tin Tức</th>
                                <th>Nội Dung</th>
                                <th>Hình Ảnh</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TT1</td>
                                <td>Báo giá công tắc dòng AvatarOn</td>
                                <td><p> Công tắc dòng AvatarOn được chia thành khá nhiều dạng nên sẽ
                                    mang tới cho người dùng sự tiện dụng và thuận tiện trong khâu
                                    lựa chọn.<span id="dots-1">..</span><span id="more-1"> <br> Tiêu biểu cần phải kể đến các dòng công tắc AvatarOn phổ biến
                                        như: Công tắc đơn/đôi/ba/bốn 1 chiều 16AX có đèn led, công tắc
                                        đơn/đôi/ba/bốn 2 chiều 16AX có đèn led, công tắc trung gian
                                        16AX, công tắc đơn 2 cực 20A, công tắc đôi 2 cực 20A, nút nhấn
                                        chuông đơn 10A và bộ điều chỉnh ánh sáng đèn 250VA (điều chỉnh
                                        đèn led từ 3W-100W). <br> Tùy theo tùy chọn màu mà giá thành của công tắc ổ cắm AvatarOn
                                        sẽ có sự chênh lệch nhất định. Trong đó, giá của công tắc
                                        AvatarOn màu trắng là rẻ nhất sau đó đến màu vàng và cao nhất là
                                        màu gỗ. <br> <strong> Báo giá ổ cắm dòng AvatarOn</strong> <br> Ổ cắm AvatarOn có thiết kế hết sức thông minh và tiện dụng. Các
                                        dòng sản phẩm tiêu biểu cần phải kể đến như: Ổ cắm đôi 3 chấu
                                        16A, ổ cắm đôi 1 chấu 10A, bộ ổ sạc USB đôi 2.1A, bộ ổ cắm đa
                                        năng và sạc USB đôi, bộ ổ cắm đơn đa năng 16A và bộ ổ cắm đơn đa
                                        năng 16A, có công tắc. Với ổ cắm dòng AvatarOn, bạn có thể cắm
                                        được nhiều loại phích cắm và cung cấp nguồn điện ổn định cho
                                        nhiều thiết bị tiêu thụ điện khác nhau trong gia đình. <br> <strong> Báo giá ổ cắm TV, mạng, điện thoại dòng AvatarOn </strong><br>
                                        Nằm trong top ổ cắm điện thông minh, ổ cắm AvatarOn mang tới cho
                                        bạn sự tiện dụng hơn hẳn. Theo đó, bạn có thể sử dụng ổ cắm
                                        AvatarOn để cắm mạng, cắm tivi hoặc cắm điện thoại hay cắm USB… <br>  Tùy theo nhu cầu sử dụng, bạn có thể chọn ổ cắm tivi đơn, ổ cắm
                                        tivi đôi, ổ cắm điện thoại đơn hoặc ổ cắm điện thoại đôi, ổ cắm
                                        mạng cat5e, cat6 hay ổ cắm tivi kết hợp mạng…Tương tự như dòng
                                        công tắc ổ cắm, bạn sẽ có 3 tùy chọn về màu sắc. <br> Báo giá thiết bị dành cho khách sạn dòng AvatarOn <br>   Điểm đặc biệt ở dòng sản phẩm công tắc ổ cắm AvatarOn là còn có
                                        những thiết kế riêng biệt dành riêng cho khách sạn như: Bổ ổ cắm
                                        dao cạo râu, bộ công tắc chìa khóa thẻ, bộ công tắc chuông
                                        “không làm phiền”, “xin dọn phòng”, “vui lòng chờ”, bộ công tắc
                                        “không làm phiền”, “xin dọn phòng”, “vui lòng chờ”. <br> <strong> Báo giá phụ kiện dòng AvatarOn</strong> <br>  Phụ kiện dòng AvatarOn gồm có mặt che trơn và đế âm cho mặt đơn
                                        chuẩn Anh. Bên cạnh đó còn có một số thiết bị khác dòng AvatarOn
                                        như đèn chân tường và cảm biến chất lượng không khí. Đế âm thiết
                                        kế chuyên dụng mang tới sự tương thích cao cho ổ cắm công tắc
                                        AvatarOn.
                                    </span></p>

                                    <button onclick="myFunction(1)" id="myBtn-1"
                                    style="border: 1px solid black; background-color: white"
                                    ><strong>Xem thêm</strong></button></td>
                                
                                <td></td>  
                                <td class="d-flex">
                                    <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit text-gray-300"></i>
                                      </button>
                                          <button
                                            class="btn btn-danger "
                                            style="margin-left: 10px"
                                          >
                                            <i class="fas fa-trash-alt"></i>
                                          </button> 
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TT1</td>
                                <td>Báo giá công tắc dòng AvatarOn</td>
                                <td><p> Công tắc dòng AvatarOn được chia thành khá nhiều dạng nên sẽ
                                    mang tới cho người dùng sự tiện dụng và thuận tiện trong khâu
                                    lựa chọn.<span id="dots-2">..</span><span id="more-2"> <br> Tiêu biểu cần phải kể đến các dòng công tắc AvatarOn phổ biến
                                        như: Công tắc đơn/đôi/ba/bốn 1 chiều 16AX có đèn led, công tắc
                                        đơn/đôi/ba/bốn 2 chiều 16AX có đèn led, công tắc trung gian
                                        16AX, công tắc đơn 2 cực 20A, công tắc đôi 2 cực 20A, nút nhấn
                                        chuông đơn 10A và bộ điều chỉnh ánh sáng đèn 250VA (điều chỉnh
                                        đèn led từ 3W-100W). <br> Tùy theo tùy chọn màu mà giá thành của công tắc ổ cắm AvatarOn
                                        sẽ có sự chênh lệch nhất định. Trong đó, giá của công tắc
                                        AvatarOn màu trắng là rẻ nhất sau đó đến màu vàng và cao nhất là
                                        màu gỗ. <br> <strong> Báo giá ổ cắm dòng AvatarOn</strong> <br> Ổ cắm AvatarOn có thiết kế hết sức thông minh và tiện dụng. Các
                                        dòng sản phẩm tiêu biểu cần phải kể đến như: Ổ cắm đôi 3 chấu
                                        16A, ổ cắm đôi 1 chấu 10A, bộ ổ sạc USB đôi 2.1A, bộ ổ cắm đa
                                        năng và sạc USB đôi, bộ ổ cắm đơn đa năng 16A và bộ ổ cắm đơn đa
                                        năng 16A, có công tắc. Với ổ cắm dòng AvatarOn, bạn có thể cắm
                                        được nhiều loại phích cắm và cung cấp nguồn điện ổn định cho
                                        nhiều thiết bị tiêu thụ điện khác nhau trong gia đình. <br> <strong> Báo giá ổ cắm TV, mạng, điện thoại dòng AvatarOn </strong><br>
                                        Nằm trong top ổ cắm điện thông minh, ổ cắm AvatarOn mang tới cho
                                        bạn sự tiện dụng hơn hẳn. Theo đó, bạn có thể sử dụng ổ cắm
                                        AvatarOn để cắm mạng, cắm tivi hoặc cắm điện thoại hay cắm USB… <br>  Tùy theo nhu cầu sử dụng, bạn có thể chọn ổ cắm tivi đơn, ổ cắm
                                        tivi đôi, ổ cắm điện thoại đơn hoặc ổ cắm điện thoại đôi, ổ cắm
                                        mạng cat5e, cat6 hay ổ cắm tivi kết hợp mạng…Tương tự như dòng
                                        công tắc ổ cắm, bạn sẽ có 3 tùy chọn về màu sắc. <br> Báo giá thiết bị dành cho khách sạn dòng AvatarOn <br>   Điểm đặc biệt ở dòng sản phẩm công tắc ổ cắm AvatarOn là còn có
                                        những thiết kế riêng biệt dành riêng cho khách sạn như: Bổ ổ cắm
                                        dao cạo râu, bộ công tắc chìa khóa thẻ, bộ công tắc chuông
                                        “không làm phiền”, “xin dọn phòng”, “vui lòng chờ”, bộ công tắc
                                        “không làm phiền”, “xin dọn phòng”, “vui lòng chờ”. <br> <strong> Báo giá phụ kiện dòng AvatarOn</strong> <br>  Phụ kiện dòng AvatarOn gồm có mặt che trơn và đế âm cho mặt đơn
                                        chuẩn Anh. Bên cạnh đó còn có một số thiết bị khác dòng AvatarOn
                                        như đèn chân tường và cảm biến chất lượng không khí. Đế âm thiết
                                        kế chuyên dụng mang tới sự tương thích cao cho ổ cắm công tắc
                                        AvatarOn.
                                    </span></p>

                                    <button onclick="myFunction(2)" id="myBtn-2"
                                    style="border: 1px solid black; background-color: white"
                                    ><strong>Xem thêm</strong></button></td>
                                
                                <td></td>  
                                <td class="d-flex">
                                    <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit text-gray-300"></i>
                                      </button>
                                          <button
                                            class="btn btn-danger "
                                            style="margin-left: 10px"
                                          >
                                            <i class="fas fa-trash-alt"></i>
                                          </button> 
                                </td>
                            </tr>
                              <!-- Modal edit-->
                              <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h2 class="modal-title text-black-50 fw-bold" id="exampleModalLabel">Sửa Tin Tức</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-black-50">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="" class="label-text mt-3">ID Tin Tức</label>
                                        <input type="text" class="form-control">

                                        <label for="" class="label-text mt-3">Tên Tin Tức</label>
                                        <input type="text" class="form-control">

                                        <label for="" class="label-text mt-3">Nội dung</label>
                                        <input type="text" class="form-control">
                                        <label class="label-text mt-3">HÌnh Ảnh:</label>
                                        <input type="file" name="ImageSP">
                                       
                            
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger mt-1" data-dismiss="modal">Thoát</button>
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-black-50 fw-bold" id="exampleModalLabel">Thêm Tin Tức</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-black-50">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="IdSP" class="label-text mt-3">ID Tin Tức</label>
                        <input type="text" class="form-control" name="IdSP">
                    </div>
                    <div class="form-group">
                        <label for="NameSP" class="label-text mt-3">Tên Tin Tức</label>
                        <input type="text" class="form-control" name="NameSP">
                    </div>
                    <div class="form-group">
                      <label for="Price" class="label-text mt-3">Nội dung</label>
                      <input type="text" class="form-control" name="Price">
                    </div>
                    <!-- Input field for image -->
                    <div class="form-group">
                      <label for="ImageSP" class="label-text mt-3">Hình Ảnh</label>
                      <input type="file" name="ImageSP">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger mt-1" data-dismiss="modal">Thoát</button>
                      <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  {{-- --------- --}}
@endsection
<script>
     function myFunction(rowId) {
      var dots = document.getElementById("dots-" + rowId);
      var moreText = document.getElementById("more-" + rowId);
      var btnText = document.getElementById("myBtn-" + rowId);

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Xem thêm";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Thu gọn";  
        moreText.style.display = "inline";
      }
    }
</script>