<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Giao Hàng Tận Nơi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon" />

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
    <link href="/lib/animate/animate.min.css" rel="stylesheet" />
    <link
      href="/lib/owlcarousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet" />
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
          <a href="" class="navbar-brand m-0 p-0">
            <h1 class="m-0" style="color: #006241">Omega</h1>
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
          <div class="h-100 d-inline-flex align-items-center">
            <a
              class="btn btn-sm-square bg-white text-primary me-1"
              href="https://www.facebook.com/pages/C%C3%B4ng-Ty-TNHH-K%E1%BB%B9-Thu%E1%BA%ADt-C%C3%B4ng-Ngh%E1%BB%87-OMEGA/795034684013526"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-sm-square bg-white text-primary me-1"
              href="https://zalo.me/0916565246"
              ><img src="/img/Zalo.webp" alt="Zalo" style="width: 20px"
            /></a>

            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><img src="/img/excel.png" alt="Excel" style="width: 20px"
            /></a>
          </div>
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
            <a href="/index.html" class="nav-item nav-link">Trang chủ</a>
            <a href="/Gioithieu.html" class="nav-item nav-link">Giới thiệu</a>

            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle active"
                data-bs-toggle="dropdown"
                >Tin tức</a
              >
              <div class="dropdown-menu fade-up m-0">
                <a href="/Tintuc/khuyenmai.html" class="dropdown-item fw-bold"
                  >CHƯƠNG TRÌNH KHUYẾN MÃI MÙA HÈ SÔI ĐỘNG</a
                >
                <hr />
                <a href="/Tintuc/za.html" class="dropdown-item fw-bold"
                  >Zencelo A: Phong cách sống mới cho ngôi nhà của bạn</a
                >
                <hr />
                <a href="/Tintuc/avataron.html" class="dropdown-item fw-bold"
                  >Báo giá công tắc ổ cắm AvatarOn Schneider</a
                >
                <hr />
                <a href="/Tintuc/phanbiet.html" class="dropdown-item fw-bold"
                  >Cách phân biệt MCB và MCCB chi tiết nhất</a
                >

                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
              </div>
            </div>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Sản phẩm</a
              >
              <div class="dropdown-menu fade-up m-0">
                <a href="/booking.html" class="dropdown-item">Booking</a>
                <a href="/team.html" class="dropdown-item">Technicians</a>
                <a href="/testimonial.html" class="dropdown-item"
                  >Testimonial</a
                >
                <a href="/404.html" class="dropdown-item">404 Page</a>
              </div>
            </div>
            <a href="/contact.html" class="nav-item nav-link">Liên hệ</a>
          </div>
          <div
            class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 d-flex align-items-center"
            style="background-color: #006600"
          >
            <div
              class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
              style="width: 45px; height: 45px"
            >
              <i class="fa fa-phone-alt" style="color: #006241"></i>
            </div>
            <div class="ms-3">
              <p
                class="mb-1"
                style="color: black; font-weight: bold; font-size: 20px"
              >
                Hotline 24/7
              </p>
              <h5 class="m-0 text-white">0916 565 246 - 0907 995 267 -</h5>
              <h5 class="m-0 text-white">0911 477 246</h5>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header mb-5 py-5">
      <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">
          Technicians
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              Technicians
            </li>
          </ol>
        </nav>
      </div>
    </div> -->
    <!-- Page Header End -->

    <!-- Team Start -->

    <div class="container" style="margin-top: 60px">
      <div class="row g-4">
        <h1 class="text-center">
            Giao Hàng Tận Nơi
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
           <p><strong>1. <em><u>Vận chuyển xe máy, ôtô áp dụng 
            với Khách hàng ở tại TP Hồ Chí Minh</u></em></strong></p>  
              <p> -   Miễn phí vận chuyển cho tất cả các đơn hàng
        của bạn trong khu vực nội thành Hồ Chí Minh. Các khu vực khác, chúng tôi sẽ phục vụ với chi phí giao hàng hợp lý nhất. 
        Chi phí giao hàng sẽ được tính và thông báo lại cho Quý khách ở xa trước khi chúng tôi thực hiện giao hàng.
              </p>
              <p>        
    -   Với những sản phẩm có thể giao ngay trong ngày, nếu bạn chọn phương thức thanh toán ngay khi nhận hàng, chúng tôi sẽ giao hàng trong vòng 12 giờ kể từ khi bạn đặt hàng.
              </p>
              <p>
                -   Nếu bạn chọn phương thức thanh toán khác thì thời gian sẽ được tính từ lúc chúng tôi xác nhận Quý khách đã thanh toán. 
                Tuy nhiên tùy vào từng đơn hàng cụ thể, chúng tôi sẽ giao hàng sớm hơn hoặc có thể giao ngay cho bạn. 
            <strong><em>Trừ các ngày Lễ, Tết, chúng tôi sẽ phục vụ Quý khách từ 8:00 – 17:00 hàng ngày</em></strong></p>
            <p>
                -   Quý khách cũng có thể lựa chọn thời gian giao hàng thuận lợi nhất cho mình, chúng tôi sẽ nỗ lực hết sức để thực hiện giao hàng theo đúng yêu cầu của bạn. 
                Bạn vui lòng ghi rõ thời gian này trong phần thông tin của đơn đặt hàng. </p>
                <p><strong>2. <em><u>Với khách hàng ở các tỉnh khác</u></em></strong></p>
                <p>
                    -   Đối với Khách hàng ở các tỉnh lân cận TP. Hồ Chí Minh như: Đồng Nai, Long An, Vũng Tàu, Tiền Giang, Tây Ninh… 
                    Chúng tôi sẽ xem xét giao hàng bằng ô Tô bán tải của công ty trong phạm vi có thể.</p>
                    <p>
                        -   Đối với những Khách Hàng ở các tỉnh thành khác thì chúng tôi sẽ gửi hàng ở các chành xe vận chuyển hàng hóa uy tín theo địa chỉ mà bạn đã đăng kí. 
                        Chúng tôi sẽ gọi điện cho bạn để thõa thuận về phương thức cũng như phí vận chuyển trước khi chúng tôi gửi hàng cho bạn.</p>
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
              <a href="{{ route('service.serviceKM') }}" class="hover-link">
                <p>
                  <i class="bi bi-info-circle-fill" style="margin-left: 10px; width: 10px"></i>
                  Khuyến Mãi Thường Xuyên 
                </p>
              </a>
              <a href="{{ route('service.serviceSP') }}" class="hover-link">
                <p>
                  <i class="bi bi-info-circle-fill" style="margin-left: 10px; width: 10px;"></i>
                  Sản Phẩm Chất Lượng
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
            <a class="btn btn-link" href="Support/Baomat.html"
              >Chính sách bảo mật thông tin</a
            >
            <a class="btn btn-link" href="/Support/Thanhtoan.html"
              >Chính sách thanh toán</a
            >
            <a class="btn btn-link" href="/Support/Doitra.html"
              >Chính sách đổi trả</a
            >
            <a class="btn btn-link" href="/Support/Baohanh.html"
              >Chính sách bảo hành</a
            >
            <a class="btn btn-link" href="/Support/Vanchuyen.html"
              >Chính sách vận chuyển</a
            >
            <a class="btn btn-link" href="/Support/Muahang.html"
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
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
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
            <!-- <div class="col-md-6 text-center text-md-end"> -->
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

            <!-- <a class="border-bottom" href="https://htmlcodex.com"
            >HTML Codex</a
          > -->
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
  </body>
</html>
