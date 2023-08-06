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

                <!-- <a href="/team.html" class="dropdown-item">Technicians</a>

                <a href="/404.html" class="dropdown-item">404 Page</a> -->
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
      
          {{-- <div
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
          </div> --}}
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{asset('img/Schneider1.jpg')}}" alt="" />
          <div
            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          ></div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{asset('img/Schneider2.jpg')}}" alt="" />
          <div
            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          ></div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <h1 style="text-align: center" data-wow-delay="0.5s">Sản phẩm nổi bật</h1>
    <div class="hr-with-icon mt-4" style="width: 1100px; height: 2px; margin: 10px auto;">
      <i
        class="bi bi-lightning-charge-fill fs-5"
        style="color: rgba(255 215 0)"
      ></i>
    </div>
    <div class="services_section layout_padding p-3" data-wow-delay="0.5s">
      <div class="container">
        <div class="services_section_2 "  >
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="image_main text-center">
                <div class="image_wrapper">
                  <img src="https://senskon.com/wp-content/uploads/2021/07/mccb-schnieder-768x768.jpg" class="image_8" style="width: 100%;">
                </div>
                <div class="text_main">
                  <a href="{{ route('product.tbdc') }}">
                    <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">THIẾT BỊ ĐÓNG CẮT VÀ PHÂN PHỐI</h3>
                  </a>
                  <a href="{{ route('product.tbdc') }}">
                    <div class="p-2" style="font-size: 18px">Cầu dao tự động MCCB - GOPACT</div>
                  </a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="image_main text-center">
                <div class="image_wrapper">
                  <img src="https://s3.us-west-2.amazonaws.com/my-002-schneider-electric-flagship-page/assets/images/highlights7.jpg" class="image_8">
                </div>
                <div class="text_main">
                  <a href="{{ route('product.tbdc') }}">
                  <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">THIẾT BỊ ĐÓNG CẮT VÀ PHÂN PHỐI</h3>
                  </a>
                  <a href="{{ route('product.tbdc') }}">
                  <div class="p-2" style="font-size: 18px">Bộ hẹn giờ & Cảm biến hồng ngoại</div>
                </a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-5" >
              <div class="image_main text-center">
                <div class="image_wrapper">
                  <img src="https://5.imimg.com/data5/SELLER/Default/2021/3/EK/WD/CD/4199659/atv310hu40n4e-5-5-hp-schneider-drive.jpg" class="image_8">
                </div>
                <div class="text_main">
                  <a href="{{ route('product.tbdc') }}">
                  <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">THIẾT BỊ ĐIỀU KHIỂN - TỰ ĐỘNG HÓA</h3>
                  </a>
                  <a href="{{ route('product.tbdc') }}">
                  <div class="p-2" style="font-size: 18px">Biến tần SCHNEIDER</div>
                  </a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="image_main text-center">
                <div class="image_wrapper">
                  <img src="https://superelectrical.ae/wp-content/uploads/2020/06/Pieno-White-300x300.jpg" class="image_8">
                </div>
                <div class="text_main">
                  <a href="{{ route('product.tbdc') }}">
                  <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">THIẾT BỊ DÂN DỤNG</h3>
                  </a>
                  <a href="{{ route('product.tbdc') }}">
                  <div class="p-2" style="font-size: 18px">Công tắc ổ cắm ZENCELO</div>
                  </a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
              
   
      
 
    <!-- Service End -->

    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">About Us</h6>
            <h1 class="mb-4">We Are Trusted Plumbing Company Since 1990</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Residential &
              commercial plumbing
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Quality services at
              affordable prices
            </p>
            <p class="fw-medium text-primary">
              <i class="fa fa-check text-success me-3"></i>Immediate 24/ 7
              emergency services
            </p>
            <div class="bg-primary d-flex align-items-center p-4 mt-5">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                style="width: 60px; height: 60px"
              >
                <i class="fa fa-phone-alt fa-2x text-primary"></i>
              </div>
              <div class="ms-3">
                <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                <h3 class="m-0 text-secondary">+012 345 6789</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pt-4" style="min-height: 500px">
            <div
              class="position-relative h-100 wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <img
                class="position-absolute img-fluid w-100 h-100"
                src="img/about-1.jpg"
                style="object-fit: cover; padding: 0 0 50px 100px"
                alt=""
              />
              <img
                class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                src="img/about-2.jpg"
                style="object-fit: cover"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- About End -->

    <!-- Fact Start -->
    <!-- <div class="container-fluid fact bg-dark my-5 py-5">
      <div class="container">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-check fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Years Experience</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Expert Technicians</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-users fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Satisfied Clients</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-wrench fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Compleate Projects</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Fact End -->

    <!-- Booking Start -->
    <div class="container-fluid px-0" >
      <div class="video wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 1200px ;width: 1270px; height:600px">
        <button
          type="button"
          class="btn-play"
          data-bs-toggle="modal"
          style=""
          data-src="https://www.youtube.com/embed/z6DJ_lK9GYM"
          data-bs-target="#videoModal"
        >
        <span></span>
        </button>

        <div
          class="modal fade"
          id="videoModal"
          tabindex="-1"
          style=""
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content rounded-0">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Youtube Video
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                  <iframe
                    class="embed-responsive-item"
                    src=""
                    id="video"
                    allowfullscreen
                    allowscriptaccess="always"
                    allow="autoplay"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h1 class="text-white mb-4 text-center">
          Hướng dẫn lắp ráp đấu dây 1 bộ công tắc đôi AvatarOn A
        </h1>
        <h3 class="text-white mb-0 text-center">Schneider Electric</h3>
      </div>
      <div
        class="container position-relative wow fadeInUp"
        data-wow-delay="0.1s"
        style="margin-top: -6rem"
      >
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center p-5" style="background-color: honeydew">
              <h1 class="mb-4">Yêu Cầu Báo Giá</h1>
              <form>
                <div class="row g-3">
                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Nhập họ tên của bạn"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="email"
                      class="form-control border-0"
                      placeholder="Nhập số điện thoại"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="email"
                      class="form-control border-0"
                      placeholder="Nhập email của bạn"
                      style="height: 55px; width: 760px"
                    />
                  </div>
                  <!-- <div class="col-12 col-sm-6">
                    <select class="form-select border-0" style="height: 55px">
                      <option selected>Select A Service</option>
                      <option value="1">Service 1</option>
                      <option value="2">Service 2</option>
                      <option value="3">Service 3</option>
                    </select>
                  </div> -->
                  <!-- <div class="col-12 col-sm-6">
                    <div class="date" id="date1" data-target-input="nearest">
                      <input
                        type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Service Date"
                        data-target="#date1"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
                  </div> -->
                  <div class="col-12">
                    <textarea
                      class="form-control border-0"
                      placeholder="Nội dung"
                      style="height: 100px"
                    ></textarea>
                  </div>

                  <div class="col-12">
                    <button
                      class="text-white fw-bold w-100 py-3"
                      style="background-color: #006600"
                      type="submit"
                    >
                      Gửi
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking End -->

    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">Our Technicians</h6>
          <h1 class="mb-5">Our Expert Technicians</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/team-1.jpg" alt="" />
              </div>
              <div class="team-text">
                <div class="bg-light">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
                <div class="bg-primary">
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/team-2.jpg" alt="" />
              </div>
              <div class="team-text">
                <div class="bg-light">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
                <div class="bg-primary">
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/team-3.jpg" alt="" />
              </div>
              <div class="team-text">
                <div class="bg-light">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
                <div class="bg-primary">
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="team-text">
                <div class="bg-light">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
                <div class="bg-primary">
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Team End -->

    <!-- Dịch vụ Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h1 class="text-secondary text-uppercase">Dịch vụ của Omega</h1>
          <h6 class="mb-5">
            Các dịch vụ của công ty chúng tôi đang hoạt động hiện nay trên thị
            trường
          </h6>
        </div>
        <div
          class="owl-carousel testimonial-carousel position-relative wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item">
            <div class="testimonial-text bg-light w-100 p-4 mb-4">
              <a href="{{ route('service.serviceGH') }}">
                <h5 class="mb-0 text-center" style="font-weight: bold">
                  Giao hàng tận nơi
                </h5>
              </a>
              <p class="mt-2">
                Khi nhận được đơn đặt hàng của bạn, chúng tôi sẽ nhanh chóng xử lý để giao hàng nhanh ...
              </p>
            </div>
            
            <div class="text-center"style="color: #004400">
              <i class="fa fa-truck fa-2x" id="rotate-icon"></i>
            </div>
           <div class="mb-2 text-center">
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
            </div>
            <!-- <h5 class="mb-1">Client Name</h5>
            <p class="m-0">Profession</p> -->
          </div>
          <div class="testimonial-item">
            <div class="testimonial-text bg-light w-100 p-4 mb-4">
              <a href="{{ route('service.serviceKM') }}">
              <h5 class="mb-0 text-center" style="font-weight: bold">
                Khuyến mãi thường xuyên
              </h5>
            </a>
              <p class="mt-2">
                Nhằm tri ân với khách hàng đã ủng hộ và hợp tác với OMEGA trong
                suốt thời gian qua. Chính ...
              </p>
            </div>
            <div class="text-center" style="color: #004400">
              <i class="fa fa-gift fa-2x"id="rotate-icon"></i>
            </div>

            <div class="mb-2 text-center">
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
            </div>
            <!-- <h5 class="mb-1">Client Name</h5>
            <p class="m-0">Profession</p> -->
          </div>
          <div class="testimonial-item">
            <div
              class="testimonial-text bg-light text-center p-4 mb-4"
              style="height: 145px"
            >
            <a href="{{ route('service.serviceSP') }}">
              <h5 class="mb-0 text-center" style="font-weight: bold">
                  Sản phẩm chất lượng
              </h5>
            </a>
              <p class="mt-2">
                Thiết bị điện Schneider chất lượng - giá tốt nhất
              </p>
            </div>
             <div class="text-center" style="color: #004400">
              <i class="bi bi-box-seam fa-2x"id="rotate-icon"></i>
            </div>
            <div class="mb-2 text-center">
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
            </div>
            <!-- <h5 class="mb-1">Client Name</h5>
            <p class="m-0">Profession</p> -->
          </div>
          <!-- <div class="testimonial-item text-center">
            <div class="testimonial-text bg-light text-center p-4 mb-4">
              <p class="mb-0">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
                amet diam et eos. Clita erat ipsum et lorem et sit.
              </p>
            </div>
            <img
              class="bg-light rounded-circle p-2 mx-auto mb-2"
              src="img/testimonial-4.jpg"
              style="width: 80px; height: 80px"
            />
            <div class="mb-2">
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
              <small class="fa fa-star text-secondary"></small>
            </div>
            <h5 class="mb-1">Client Name</h5>
            <p class="m-0">Profession</p>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
      <div class="row g-0">
        <div class="col-lg-3 d-none d-lg-flex">
          <div
            class="d-flex align-items-center justify-content-center w-100 h-100"
            style="background-color: #006600"
          >
            <h1
              class="display-3 text-white m-0"
              style="transform: rotate(-90deg); font-size: 50px"
            >
              SẢN PHẨM UY TÍN - NIỀM TIN CHIẾN THẮNG
            </h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="ms-lg-5 ps-lg-5">
            <div
              class="text-center text-lg-start wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <h6 class="text-secondary text-uppercase">Schneider Electric</h6>
              <h1 class="mb-5">TIN TỨC</h1>
            </div>
            <div
              class="owl-carousel service-carousel position-relative wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="p-4" style="height: 702px; background-color: #67bf7f">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="bi bi-lightbulb-fill fs-3" style="color: white"></i>
                </div>
                <h4 class="mb-3">
                  Zencelo A: Phong cách sống mới cho ngôi nhà của bạn
                </h4>
                <p style="color: #000000">
                  Công tắc ổ cắm Zencelo A: Dòng công tắc hoàn toàn phẳng thế hệ
                  mới
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Thiết
                  kế hiện đại
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Đa chức
                  năng, dễ sử dụng
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>An
                  toàn, độ bền cao
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Tiết
                  kiệm không gian, năng lượng
                </p>
                <a
                href="{{ route('news.Za') }}"
                  class="btn w-100"
                  style="
                    margin-top: 150px;
                    background-color: #ffffff;
                    color: black;
                  "
                  >Chi tiết<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="p-4" style="height: 702px; background-color: #67bf7f">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="bi bi-toggle-on fa-2x text-white"></i>
                </div>
                <h4 class="mb-3">Ưu điểm công tắc ổ cắm AvatarOn Schneider</h4>
                <p style="color: black">Ưu điểm công tắc dòng AvatarOn</p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Thiết
                  kế hiện đại và đa dạng
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Tính
                  năng thông minh
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Hệ
                  thống module linh hoạt
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Độ bền
                  và tin cậy cao
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Dễ dàng
                  lắp đặt và sử dụng
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Tiết
                  kiệm năng lượng
                </p>
                <a
                href="{{ route('news.Avataron') }}"
                  class="btn bg-white w-100"
                  style="margin-top: 170px; color: black"
                  >Chi tiết<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="p-4" style="background-color: #67bf7f">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-tags fa-2x text-white"></i>
                </div>
                <h4 class="mb-3">Chương trình khuyến mãi mùa hè sôi động</h4>
                <p style="color: black">Nội dung chương trình</p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Giảm
                  ngay 5% Chiết khấu trực tiếp từ Nhà Phân Phối
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Doanh
                  dố 10 triệu Áp dụng cho các dòng sản phẩm:
                </p>
                <p class="text-white fw-medium" style="margin-left: 25px">
                  <i class="fa fa-circle fa-xs me-2" style="color: #004400"></i
                  >Thiết bị đóng cắt Acti9/Easy9
                </p>
                <p class="text-white fw-medium" style="margin-left: 25px">
                  <i class="fa fa-circle fa-xs me-2" style="color: #004400"></i
                  >Công tắc ổ cắm Zencelo A/ AvatarOn A/ S-Flexi/ S-Classic
                </p>
                <p class="text-white fw-medium" style="margin-left: 25px">
                  <i class="fa fa-circle fa-xs me-2" style="color: #004400"></i
                  >Công tắc ổ cắm AvatarOn A/ Vivace/ Zencelo
                </p>
                <p class="text-white fw-medium" style="margin-left: 25px">
                  <i class="fa fa-circle fa-xs me-2" style="color: #004400"></i
                  >Tủ điện Mini Pragma/Acti9
                </p>
                <p class="text-white fw-medium" style="margin-left: 25px">
                  <i class="fa fa-circle fa-xs me-2" style="color: #004400"></i
                  >Ổ cắm âm sàn
                </p>
                <a  href="{{ route('news.Khuyenmai') }}" class="btn bg-white w-100 mt-2" style="color: black"
                  >Chi tiết<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
              <div class="p-4" style="height: 702px; background-color: #67bf7f">
                <div
                  class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                  style="width: 75px; height: 75px"
                >
                  <i class="fa fa-cogs fa-2x text-white"></i>
                </div>
                <h4 class="mb-3">Cách phân biệt MCB và MCCB chi tiết nhất</h4>
                <p style="color: black">
                  MCB hay còn được gọi là thiết bị chuyển mạch loại tép. Theo
                  đó, sản phẩm có dòng cắt định mức và dòng cắt ngắn mạch thấp.
                </p>
                <p style="color: black">
                  Còn MCCB là thiết bị chuyển mạch loại khối với dòng cắt ngắn
                  mạch lớn hơn, có thể lên tới 150kA.
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>MCP
                  thường được sử dụng trong các mạch điện dân dụng như là MCB
                  1P, MCB 2P.
                </p>
                <p class="text-white fw-medium">
                  <i class="fa fa-check me-2" style="color: #004400"></i>Còn
                  MCCB thì được ứng dụng nhiều trong các tủ điện tổng hoặc tủ
                  điện phân phối của các công trình lớn.
                </p>

                <a
                href="{{ route('news.Phanbiet') }}"
                  class="btn bg-white w-100"
                  style="margin-top: 55px; color: black"
                  >Chi tiết<i class="fa fa-arrow-right text-secondary ms-2"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->
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
  @yield('content')
</html>
