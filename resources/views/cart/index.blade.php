@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

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

                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
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
          <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm...">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
          <div class="fs-4 text-primary" style="margin-right: 20px">
            <a class="nav-link active" href="{{ route('cart.index') }}">
          <i class="bi bi-bag-check-fill"style="color: #004400"></i>
          </a>
        </div>
        
        <div class="text-primary">
          <div class="dropdown">
              <a href="" class="dropdown-toggle" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle fs-4"style="color: #004400"></i>
              </a>
      
              <ul class="dropdown-menu" style=" left: 60%; transform: translateX(-50%);" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item fw-bold" href="{{route('login')}}">Logout</a></li>
              </ul>
          </div>
      </div>
    </div>
</nav>
</div>
    <!-- Navbar End -->
    <div class="card">
        <div class="mt-4 fw-bold" style="margin-left:15px; font-size: 20px; color:black;  ">
            GIỎ HÀNG
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center" style="border: 1px solid black">
                <thead>
                    <tr class="table-header">
                        <th scope="col" style="width: 50px">STT</th>
                        <th scope="col" style="width: 550px">Sản phẩm</th>
                        <th scope="col" style="width: 250px">Đơn giá</th>
                        <th scope="col" style="width: 80px">Số lượng</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr class="table-header">
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getNameSP() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Tổng sản phẩm:</b> ${{ $viewData['total'] }}</a>
                    @if (count($viewData["products"]) > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2" s>Thanh toán</a>
                    <a href="{{ route('cart.delete') }}">
                        <button class="btn btn-danger mb-2">
                            Xóa tất cả khỏi giỏ hàng
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
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

