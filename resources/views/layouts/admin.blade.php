<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('/css/main.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Font-icon css-->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"
    />
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
      <!-- Sidebar toggle button--><a
        class="app-sidebar__toggle"
        href="#"
        data-toggle="sidebar"
        aria-label="Hide Sidebar"
      ></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li>
          <a class="app-nav__item" href="/index.html"
            ><i class="bx bx-log-out bx-rotate-180"></i>
          </a>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img
          class="app-sidebar__user-avatar"
          src="{{asset('/img/img_admin.jpg')}}"
          width="50px"
          alt="User Image"
        />
        <div>
          <p class="app-sidebar__user-name"><b>Huỳnh Ngân</b></p>
          <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
      </div>
      <hr />
      {{-- <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="{{route('admin.home.index')}}"
            ><i class="app-menu__icon bx bx-tachometer"></i
            ><span class="app-menu__label">Bảng điều khiển</span></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.employee.index')}}">
            <i class="app-menu__icon bx bx-group"></i>
            <span class="app-menu__label">Quản lý nhân viên</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.customer.index')}}">
            <i class="app-menu__icon bx bx-user-circle"></i>
            <span class="app-menu__label">Quản lý khách hàng</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.product.index')}}">
            <i class="app-menu__icon bx bx-package"></i>
            <span class="app-menu__label">Quản lý sản phẩm</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.table.index')}}">
            <i class="app-menu__icon bx bx-grid-alt"></i>
            <span class="app-menu__label">Quản lý bàn</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.invoice.index')}}">
            <i class="app-menu__icon bx bx-shopping-bag"></i>
            <span class="app-menu__label">Quản lý đơn hàng</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.category.index')}}">
            <i class="app-menu__icon bx bx-archive"></i>
            <span class="app-menu__label">Quản lý nguyên liệu</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.thongke.index')}}"
            ><i class="app-menu__icon bx bx-pie-chart-alt-2"></i
            ><span class="app-menu__label">Báo cáo doanh thu</span></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.thongke.cthd')}}"
            ><i class="app-menu__icon bx bx-pie-chart-alt-2"></i
            ><span class="app-menu__label">Báo cáo doanh thu</span></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="{{route('admin.sp.cthd')}}"
            ><i class="app-menu__icon bx bx-pie-chart-alt-2"></i
            ><span class="app-menu__label">Báo cáo doanh thu</span></a
          >
        </li>
      </ul> --}}
    </aside>
    @yield('content') 
  </body>
</html>
