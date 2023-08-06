<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Công ty TNHH Kỹ thuật Công nghệ Omega</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/img/favicon.ico')}}" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('/lib/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" />
   

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
 <!-- ===== Link Swiper's CSS ===== -->
 <link
 rel="stylesheet"
 href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>

<!-- ===== Fontawesome CDN Link ===== -->
<link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('/css/style_web.css')}}" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div
      class="container-fluid d-none d-lg-block"
      style="background-color: honeydew"
    >
      <div class="row align-items-center top-bar">
        <div class="col-lg-3 col-md-12 text-center text-lg-start">
          <a href="{{ route('layouts.home') }}" class="navbar-brand m-0 p-0">
            <!-- <h1 class="m-0" style="color: #006241">Omega</h1> -->
            <img
              src="	https://thietbidienomega.com/thumbs/90x90x2/upload/photo/new-project-4485.png"
              alt=""
              style="width: 62px"
            />
            <img
              src="	https://thietbidienomega.com/thumbs/171x48x2/upload/photo/banner-7013-3966.png"
              alt=""
            />
            <img
              src="	https://thietbidienomega.com/thumbs/161x48x2/upload/photo/logo1-9647.png"
              alt=""
              style="width: 102px; margin-left: 10px;"
            />
          </a>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <i class="fa fa-map-marker-alt me-2" style="color: #006241"></i>
            <p class="m-0" style="color: black">
              23/70 Đường Tân Thới 18, P.Tân Thới Nhất, Quận 12, TPHCM
            </p>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <i class="far fa-envelope-open me-2" style="color: #006241"></i>
            <p class="m-0" style="color: black">omegacom.vn@gmail.com</p>
          </div>
          {{-- <div class="h-100 d-inline-flex align-items-center">
            <a
              class="btn btn-sm-square bg-white text-primary me-1"
              href="https://www.facebook.com/pages/C%C3%B4ng-Ty-TNHH-K%E1%BB%B9-Thu%E1%BA%ADt-C%C3%B4ng-Ngh%E1%BB%87-OMEGA/795034684013526"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-sm-square bg-white text-primary me-1"
              href="https://zalo.me/0916565246"
              ><img src="img/Zalo.webp" alt="Zalo" style="width: 20px"
            /></a>

            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
            ><i class="bi bi-telephone-fill"></i></a>

            <a class="btn btn-sm-square bg-white me-1 fs-5" href=""
              ><i class="bi bi-box-arrow-in-left" style="color: black"></i></a>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid nav-bar" style="background-color: honeydew">
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4"
      >
        <a
          href=""
          class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none"
        >
          <!-- <h1 class="text-primary m-0">Plumberz</h1> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav me-auto">
            <a href="{{ route('layouts.home') }}" class="nav-item nav-link">Trang chủ</a>
            <a href="{{ route('introduce.Gioithieu') }}" class="nav-item nav-link">Giới thiệu</a>

            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Tin tức</a
              >
              <div class="dropdown-menu fade-up m-0">
                <a href="{{ route('news.Khuyenmai') }}" class="dropdown-item fw-bold"
                  >CHƯƠNG TRÌNH KHUYẾN MÃI MÙA HÈ SÔI ĐỘNG</a
                >
                <hr />
                <a  href="{{ route('news.Za') }}" class="dropdown-item fw-bold"
                  >Zencelo A: Phong cách sống mới cho ngôi nhà của bạn</a
                >
                <hr />
                <a href="{{ route('news.Avataron') }}" class="dropdown-item fw-bold"
                  >Báo giá công tắc ổ cắm AvatarOn Schneider</a
                >
                <hr />
                <a href="{{ route('news.Phanbiet') }}" class="dropdown-item fw-bold"
                  >Cách phân biệt MCB và MCCB chi tiết nhất</a
                >

                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
              </div>
            </div>
            <div class="nav-item dropdown">
              <a
                href="{{ route('product.tbdc') }}"
                class="nav-link dropdown-toggle active"
                data-bs-toggle="dropdown">Sản phẩm</a>
              <div
                class="dropdown-menu fade-up m-0"
                style="overflow-y: scroll; max-height: 300px"
              >
                <div class="grid-container">
                  <div>
                    <a href="{{ route('product.tbdc') }}" class="dropdown-item fw-bold"
                      >THIẾT BỊ ĐÓNG CẮT VÀ PHÂN PHỐI</a
                    >
                    <hr class="custom-hr" />
                    <a
                      href="{{ route('product.tbdc') }}"
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >CẦU DAO TỰ ĐỘNG MCCB - GOPACT</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                            "
                          ></i
                          >Phụ kiện MCCB GOPACT
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >MCCB GOPACT 200/250/400/800
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >MCCB GOPACT 125F
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >MCCB GOPACT 125E
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >MCCB GOPACT 125T
                        </li>
                      </a>
                    </ul>
                    <a
                      href="{{ route('product.tbdc') }}"
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >BỘ HẸN GIỜ & CẢM BIẾN HỒNG NGOẠI</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                            "
                          ></i
                          >Cảm biến hồng ngoại
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Bộ hẹn giờ 24H - Time switch
                        </li>
                      </a>
                    </ul>
                  </div>
                  <div>
                    <a href="{{ route('product.tbdc') }}" class="dropdown-item fw-bold"
                      >THIẾT BỊ ĐIỀU KHIỂN - TỰ ĐỘNG HÓA</a
                    >
                    <hr class="custom-hr" />
                    <a
                      href="{{ route('product.tbdc') }}"
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >BIẾN TẦN SCHNEIDER</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                            "
                          ></i
                          >Biến tần - ATV
                        </li>
                      </a>
                    </ul>
                  </div>
                  <div>
                    <a href="{{ route('product.tbdc') }}" class="dropdown-item fw-bold"
                      >THIẾT BỊ DÂN DỤNG</a
                    >
                    <hr class="custom-hr" />
                    <a
                      href="{{ route('product.tbdc') }}"
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >CÔNG TẮC Ổ CẮM ZENCELO</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Phụ kiện dòng ZENCELO
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Thiết bị dành cho khách sạn dòng ZENCELO
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >DIMMER dòng ZENCELO
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Ổ cắm TV, Mạng, Điện thoại dòng ZENCELO
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Ổ cắm dòng ZENCELO
                        </li>
                      </a>
                      <a href="{{ route('product.tbdc') }}">
                        <li style="list-style-type: none">
                          <i
                            class="fa fa-check me-2"
                            style="
                              color: black;
                              margin-left: 10px;
                              font-size: 10px;
                              margin-top: 20px;
                            "
                          ></i
                          >Công tắc dòng ZENCELO
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('contact.Contact') }}" class="nav-item nav-link">Liên hệ</a>
          </div>
          <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm...">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
          <div class="fs-4 text-primary" style="margin-right: 20px">
            <a class="nav-link active" href="{{ route('cart.index') }}">
          <i class="bi bi-bag-check-fill" style="color: #004400"></i>
          </a>
        </div>
        
        <div class="text-primary">
              <a href="{{route('login')}}">
                  <i class="bi bi-person-circle fs-4" style="color: #004400"></i>
              </a>
      </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Team Start -->

    <div class="container" style="margin-top: 60px">
      <div class="row g-4">
        <h1 class="text-center">
            Sản Phẩm Chất Lượng
        </h1>
      </div>
      <div class="hr-with-icon">
        <i
          class="bi bi-lightning-charge-fill fs-5"
          style="color: rgba(255 215 0)"
        ></i>
      </div>
    </div>
    <!-- Team End -->

    <!-- TT Start -->
    <div
      class="container-xxl py-4 mt-5"
      style="
        border: 1px solid rgba(0, 0, 0, 0.3);
        height: auto;
        width: 1256px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      "
    >
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="content-box" style="color: black">
           <p>Thương hiệu thiết bị điện Schneider là thương hiệu thiết bị điện nổi tiếng của tập đoàn thiết bị điện Schneider Electric tại Pháp. Dòng sản phẩm thiết bị điện Schneider được đánh giá là thương hiệu thiết bị điện được nhiều nhà máy, khu công nghiệp các công trình lớn sử dụng. Điểm nổi bật của thiết bị điện Schneider là loại thiết bị điện được lắp đặt ở nhiều môi trường khắc nghiệt sử dụng như môi trường nhiều độ ẩm, nhiều bụi và có nguy cơ ăn mòn cao…Ưu điểm nổi bật của thiết bị điện Schneider: độ bền cao, nguyên liệu cao cấp chất lượng, chống bụi và chống ăn mòn, phù hợp với nhiều không gian lắp đặt. 
            Thương hiệu thiết bị điện Schneider có chất liệu cao cấp, an toàn, tính thẩm mỹ rất cao đảm bảo được độ bền của thiết bị điện.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Các bài viết khác --}}
    <div
      class="container-xxl py-4 mt-4"
      style="
        height: auto;
        width: 1256px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        background-color: rgba(128,128,128,0.15);
        border-radius:10px 
      "
    >
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="content-box" >
              <h5><strong>Bài viết khác:</strong></h5>
              <a href="{{ route('service.serviceGH') }}" class="hover-link">
                <p>
                  <i class="bi bi-info-circle-fill" style="margin-left: 10px; width: 10px"></i>
                  Giao Hàng Tận Nơi  
                </p>
              </a>
              <a href="{{ route('service.serviceKM') }}" class="hover-link">
                <p>
                  <i class="bi bi-info-circle-fill" style="margin-left: 10px; width: 10px;"></i>
                  Khuyến Mãi Thường Xuyên
                </p>
              </a>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TT END -->

     <!-- Footer Start -->
     <div
     class="container-fluid text-light footer pt-5 mt-5 wow fadeIn"
     data-wow-delay="0.1s"
     style="background-color: #004400"
   >
     <div class="container py-5">
       <div class="row g-5">
         <div class="col-lg-3 col-md-6">
           <h4 class="text-light mb-4">Địa chỉ</h4>
           <p class="mb-2">
             <i class="fa fa-map-marker-alt me-3"></i> 23/70 Đường Tân Thới 18,
             P.Tân Thới Nhất, Quận 12, TPHCM
           </p>

           <p class="mb-2">
             <i class="fa fa-phone-alt me-3"></i> 0916 565 246 - 0907 995 267 -
             0911 477 246
           </p>
           <p class="mb-2">
             <i class="fa fa-envelope me-3"></i>omegacom.vn@gamil.com
           </p>
           <p class="mb-2"><i class="fa fa-home me-3"></i>thietbiomega.com</p>

           <div class="d-flex pt-2">
            
             <a
               class="btn btn-outline-light btn-social"
               href="https://www.facebook.com/pages/C%C3%B4ng-Ty-TNHH-K%E1%BB%B9-Thu%E1%BA%ADt-C%C3%B4ng-Ngh%E1%BB%87-OMEGA/795034684013526"
               ><i class="fab fa-facebook-f"></i
             ></a>
             <a
               class="btn btn-outline-light btn-social"
               href="https://zalo.me/0916565246"
               ><img src="img/Zalo.webp" alt="Zalo" style="width: 20px"
             /></a>

             <a class="btn btn-outline-light btn-social" href=""
               ><img src="img/excel.png" alt="Excel" style="width: 20px"
             /></a>
           </div>
         </div>
         <div class="col-lg-3 col-md-6">
           <h4 class="text-light mb-4">Thời gian mở cửa</h4>
           <h6 class="text-light">Thứ hai - Thứ bảy:</h6>
           <p class="mb-4">09.00 AM - 09.00 PM</p>
         </div>
         <div class="col-lg-3 col-md-6">
           <h4 class="text-light mb-4">Chính sách hỗ trợ</h4>
           <a class="btn btn-link" href="{{ route('support.Baomat') }}">Chính sách bảo mật thông tin</a>

           <a class="btn btn-link" href="{{ route('support.Thanhtoan') }}">Chính sách thanh toán</a>
           <a class="btn btn-link" href="{{ route('support.Doitra') }}"
             >Chính sách đổi trả</a
           >
           <a class="btn btn-link" href="{{ route('support.Baohanh') }}"
             >Chính sách bảo hành</a
           >
           <a class="btn btn-link" href="{{ route('support.Vanchuyen') }}"
             >Chính sách vận chuyển</a
           >
           <a class="btn btn-link" href="{{ route('support.Muahang') }}"
             >Chính sách mua hàng</a
           >
         </div>
         <div class="col-lg-3 col-md-6">
           <h4 class="text-light mb-4">Đăng ký ngay</h4>

           <div class="position-relative mx-auto" style="max-width: 400px">
             <input
               class="form-control border-0 w-100 py-3 ps-4 pe-5"
               type="text"
               placeholder="Nhập email của bạn"
             />
             <button
               type="button"
               class="py-2 position-absolute top-0 end-0 mt-2 me-2 fw-bold" style="background-color: #006241; border: none; color: white; "
             >
               Đăng ký
             </button>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="copyright">
         <div class="row">
           <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
             &copy;
             <a class="border-bottom" href="index.html"
               >Công ty TNHH Kỹ Thuật Công nghệ Omega</a
             >
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Footer End -->

   <!-- Back to Top -->
   <a
     href="#"
     class="btn btn-lg btn-lg-square rounded-0 back-to-top"
     style="background-color: #006600"
     ><i class="bi bi-arrow-up text-white"></i
   ></a>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/lib/tempusdominus/js/moment.min.js') }}"></script>
  <script src="{{ asset('/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
  <script src="{{ asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  

   <!-- Template Javascript -->
   <script src="{{ asset('/js/main.js') }}"></script>
 </body>
</html>
