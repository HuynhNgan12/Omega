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
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
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
            <a href="{{ route('layouts.home') }}" class="nav-item nav-link active">Trang chủ</a>
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
              </div>
            </div>
            <div class="nav-item dropdown">
              <a
                href="{{ route('product.tbdc') }}"
                class="nav-link dropdown-toggle"
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
                      href=""
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >CẦU DAO TỰ ĐỘNG MCCB - GOPACT</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      href=""
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >BỘ HẸN GIỜ & CẢM BIẾN HỒNG NGOẠI</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="">
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
                      <a href="">
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
                    <a href="/Product/tbdc.html" class="dropdown-item fw-bold"
                      >THIẾT BỊ ĐIỀU KHIỂN - TỰ ĐỘNG HÓA</a
                    >
                    <hr class="custom-hr" />
                    <a
                      href=""
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >BIẾN TẦN SCHNEIDER</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="">
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
                    <a href="/Product/tbdc.html" class="dropdown-item fw-bold"
                      >THIẾT BỊ DÂN DỤNG</a
                    >
                    <hr class="custom-hr" />
                    <a
                      href=""
                      class="dropdown-item"
                      style="margin-left: 15px; font-weight: 510"
                      >CÔNG TẮC Ổ CẮM ZENCELO</a
                    >
                    <hr class="custom-hr" />
                    <ul>
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
                      <a href="">
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
          <div class="row search-bar">
                    <form action="{{ route('product.tbdc') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm..."
                            value="{{ $viewData['search'] }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>                                 
        </div>
          {{-- <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm...">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div> --}}
          <div class="fs-4 text-primary" style="margin-right: 20px">
          <i class="bi bi-bag-check-fill"></i>
        </div>
        <div class="fs-4 text-primary" style="">
        <i class="bi bi-person-circle"></i>
      </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->
    <!-- Service Start -->

    <div class="container" style="margin-top: 60px">
      <div class="row g-4">
        <h1 class="text-center">THIẾT BỊ ĐÓNG CẮT PHÂN PHỐI</h1>
      </div>
      <div class="hr-with-icon">
        <i
          class="bi bi-lightning-charge-fill fs-5"
          style="color: rgba(255 215 0)"
        ></i>
      </div>
    </div>
    <!-- Service End -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4 flex-wrap">
          @foreach ($viewData['products'] as $product)
            <div
              class="col-lg-3 col-md-6 service-item-top wow fadeInUp border border-light rounded p-3"
              data-wow-delay="0.3s"
            >
              <div class="overflow-hidden image-container">
                <a href="/Mota/motasanpham.html">
                  <img
                    class="img-fluid"
                    src="{{ asset('/storage/' . $product->getImageSP()) }}"
                    alt=""
                  />
                  <div class="discount-badge btn-success fw-bold">-50%</div>
                </a>
              </div>
              <div class="d-flex justify-content-center mt-3">
                <a href="/Mota/motasanpham.html">
                  <h5 class="text-truncate me-3 mb-3 text-center line-break" style="white-space: normal;">
                    {{$product->getNameSP()}}
                  </h5>
                </a>
              </div>
              
              
              <div class="d-flex justify-content-between">
                <div>
                  <p
                    class="text-danger"
                    style="margin-left: 25px; font-weight: bold; font-size: 18px"
                  >
                  {{ number_format($product->getPrice(), 0, ".", ".") }}
                  </p>
                </div>
                <div>
                  <p
                    class="text-decoration-line-through"
                    style="margin-right: 25px; font-weight: bold; font-size: 18px"
                  >
                  {{ number_format($product->getOldPrice(), 0, ".", ".") }}
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between">
                <div>
                  <a href="{{ route('Mota.MotaSP') }}">
                    <button
                      id="buyButton"
                      class="custom-button btn-success fw-bold"
                      style="border-radius: 20px; padding: 10px 20px; border: none; margin-left: 15px;"
                    >
                      Mua ngay
                    </button>
                  </a>
                </div>
                <div>
                  <a href="/Mota/motasanpham.html">
                    <button
                      id="detailsButton"
                      class="custom-button btn-success fw-bold"
                      style="
                        border-radius: 20px;
                        padding: 10px 20px;
                        border: none; margin-right: 15px;
                      "
                    >
                      Xem chi tiết
                    </button>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <ul class="pagination d-flex">
          <li class="page-item" style="margin-top:20px">
              <a class="page-link" href="{{ $viewData['products']->appends(['search' => $viewData['search']])->url(1) }}" aria-label="{{ __('pagination.first') }}">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">{{ __('pagination.first') }}</span>
              </a>
          </li>
          {{-- {!! $viewData['products']->appends(['search' => $viewData['search']])->links('pagination::bootstrap-4')->toHtml() !!} --}}
          <li class="page-item" style="margin-top:20px">
              <a class="page-link" href="{{ $viewData['products']->appends(['search' => $viewData['search']])->url($viewData['products']->lastPage()) }}" aria-label="{{ __('pagination.last') }}">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">{{ __('pagination.last') }}</span>
              </a>
          </li>
      </ul>
  </div>
    {{-- <div class="d-flex justify-content-center mt-4">
      {{ $products->links('pagination::bootstrap-4') }}
  </div> --}}
  
    {{-- <div class="product-list" data-wow-delay="0.4s">
      <ul class="number-list">
        <li><a href="/Product/tbdc.html" class="fw-bold"><<</a></li>
        <li>
          <a href="/Product/tbdc2.html" class="fw-bold"><</a>
        </li>
        <li><a href="/Product/tbdc.html">1</a></li>
        <li><a href="/Product/tbdc2.html">2</a></li>
        <li><a href="/Product/tbdc2.html">...</a></li>
        <li><a href="/Product/tbdc2.html">6</a></li>

        <li>
          <a href="/Product/tbdc2.html" class="fw-bold">></a>
        </li>
        <li><a href="/Product/tbdc2.html" class="fw-bold">>></a></li>
      </ul>
    </div> --}}

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
                ><img src="/img/Zalo.webp" alt="Zalo" style="width: 20px"
              /></a>

              <a class="btn btn-outline-light btn-social" href=""
                ><img src="/img/excel.png" alt="Excel" style="width: 20px"
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
            <a class="btn btn-link" href="/Support/Baomat.html"
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
