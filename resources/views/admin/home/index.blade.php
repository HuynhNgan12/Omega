@extends('layouts.admin')
@section('content')
    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item">
                <a href="#"><b>Bảng điều khiển</b></a>
              </li>
            </ul>
            <div id="clock"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <!--Left-->
        <div class="col-md-12 col-lg-12">
          <div class="row">
            <!-- col-6 -->
            {{-- <div class="col-md-6">
              <div class="widget-small primary coloured-icon">
                <i class="icon bx bxs-user-account"></i>
                 <div class="info">
                  <h4>Tổng khách hàng</h4>
                  <p><b>   khách hàng</b></p>
                  <p class="info-tong">Tổng số khách hàng được quản lý.</p>
                </div> 
              </div>
            </div>             --}}
            <!-- col-6 -->
            <div class="col-md-6">
              <div class="widget-small info coloured-icon">
                <i class="icon bx bxs-data fa-3x"></i>
                <div class="info">
                  <h4>Tổng sản phẩm</h4>
                  <p><b>20 Sản phẩm </b></p>
                  <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
                </div>
              </div>
            </div>
            <!-- col-6 -->
             <div class="col-md-6">
              <div class="widget-small warning coloured-icon">
                <i class="icon bx bxs-shopping-bags fa-3x"></i>
                <div class="info">
                  <h4>Tổng đơn hàng</h4>
                  <p><b>247 đơn hàng</b></p>
                  <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget-small primary
               coloured-icon">
                <i class="icon bx bxs-user fa-3x"></i>
                <div class="info">
                  <h4>Tổng Tin tức</h4>
                  <p><b>4 Tin tức</b></p>
                  <p class="info-tong">Tổng số tin tức được quản lý.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget-small danger coloured-icon">
                <i class="icon bx bxs-flask fa-3x"></i>
                <div class="info">
                  <h4>Tổng Chính sách</h4>
                  <p><b>6 Chính sách </b></p>
                  <p class="info-tong">Tổng số chính sách được quản lý.</p>
                </div>
              </div>
            </div>

            {{-- <div class="col-md-6">
              <div class="widget-small info coloured-icon">
                <i class="icon bx bx-table fa-3x"></i>
                <div class="info">
                  <h4>Tổng Bàn</h4>
                  <p><b>{{$totalTable}} Bàn</b></p>
                  <p class="info-tong">Tổng số bàn được quản lý.</p>
                </div>
              </div>
            </div>  --}}
    </main>
    @endsection 
