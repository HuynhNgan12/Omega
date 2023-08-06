@extends('layouts.admin')
@section('content')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active">
                <a href="#"><b>Danh sách sản phẩm </b></a>
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
                              ><i class="fas fa-plus"></i>Tạo mới sản phẩm</a
                            >
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="{{ route('admin.product.index') }}" method="GET" class="d-flex">
                                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm nhân viên"
                                            value="{{ $viewData['search'] }}">
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
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Giá Khuyen Mai</th>
                                <th>Mô Tả Sản Phẩm</th>
                                <th>Hình Ảnh</th>
                                <th scope="300">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['products'] as $product)
                            <tr>
                                <td>{{ $product->getId() }}</td>
                                <td>{{ $product->getIdSP() }}</td>
                                <td>{{ $product->getNameSP()}}</td>
                                <td>{{ $product->getPrice()}}</td>
                                <td>{{ $product->getOldPrice()}}</td>
                                <td>{{ $product->getDescribe()}}</td>
                                <td><img src="{{ asset('/storage/' . $product->getImageSP()) }}" style="width: 100px"></td>
                                <td>
                                    <video controls width="150">
                                        <source src="{{ asset('/storage/' . $product->getVideo()) }}" type="video/mp4">
                                    </video>
                                </td>   
                                <td class="d-flex">
                                    <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal" data-product-id="{{ $product->getId() }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                      </button>
                                    <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                          <button
                                            class="btn btn-danger "
                                            style="margin-left: 10px"
                                          >
                                            <i class="fas fa-trash-alt"></i>
                                          </button> 
                                      </form>
                                </td>
                            </tr>
                              <!-- Modal edit-->
                              <div class="modal fade" id="editModal{{ $product->getId() }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h2 class="modal-title text-black-50" id="exampleModalLabel">Sửa Sản Phẩm</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-black-50">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.product.update', ['id' => $product->getId()]) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="" class="label-text mt-3">Mã Sản Phẩm</label>
                                        <input type="text" class="form-control" value="{{ $product->getIdSP() }}" name="IdSP">

                                        <label for="" class="label-text mt-3">Tên sản phẩm</label>
                                        <input type="text" class="form-control" value="{{ $product->getNameSP() }}" name="NameSP">

                                        <label for="" class="label-text mt-3">Giá</label>
                                        <input type="text" class="form-control" value="{{ $product->getPrice() }}" name="Price">
                            
                                        <label for="" class="label-text mt-3">Giá Khuyến mãi</label>
                                        <input type="text" class="form-control" value="{{ $product->getOldPrice() }}" name="OldPrice">
                                        <label for="" class="label-text mt-3">Mô tả sản phẩm</label>
                                        <input type="text" class="form-control" value="{{ $product->getDescribe() }}" name="Describe">
                                        <label class="label-text mt-3">HÌnh Ảnh:</label>
                                        <input type="file" name="ImageSP">
                                        <label class="label-text mt-3">Video:</label>
                                        <input type="file" name="Video">
                            
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger mt-1" data-dismiss="modal">Thoát</button>
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            {{-- ---- --}}
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Phân Trang --}}
                    <div class="d-flex justify-content-center">
                        <ul class="pagination d-flex">
                            <li class="page-item" style="margin-top:20px">
                                <a class="page-link" href="{{ $viewData['products']->appends(['search' => $viewData['search']])->url(1) }}" aria-label="{{ __('pagination.first') }}">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">{{ __('pagination.first') }}</span>
                                </a>
                            </li>
                            {!! $viewData['products']->appends(['search' => $viewData['search']])->links('pagination::bootstrap-4')->toHtml() !!}
                            <li class="page-item" style="margin-top:20px">
                                <a class="page-link" href="{{ $viewData['products']->appends(['search' => $viewData['search']])->url($viewData['products']->lastPage()) }}" aria-label="{{ __('pagination.last') }}">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">{{ __('pagination.last') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- ------ --}}
                </div>
            </div>
        </div>
    </div>
</main>

{{-- --------- --}}
<!-- Modal add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-black-50" id="exampleModalLabel">Thêm Sản Phẩm</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-black-50">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="IdSP" class="label-text mt-3">IdSP</label>
                        <input type="text" class="form-control" name="IdSP" value="{{old('IdSP')}}">
                    </div>
                    <div class="form-group">
                        <label for="NameSP" class="label-text mt-3">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="NameSP" value="{{old('NameSP')}}">
                    </div>
                    <div class="form-group">
                      <label for="Price" class="label-text mt-3">Giá Sản Phẩm</label>
                      <input type="text" class="form-control" name="Price" value="{{old('Price')}}">
                    </div>
                    <div class="form-group">
                      <label for="Describe" class="label-text mt-3">Mô Tả Sản Phẩm</label>
                      <input type="text" class="form-control" name="Describe" value="{{old('Describe')}}">
                    </div>
                    <!-- Input field for image -->
                    <div class="form-group">
                      <label for="ImageSP" class="label-text mt-3">Hình Ảnh</label>
                      <input type="file" name="ImageSP">
                    </div>
  
                    <!-- Input field for video -->
                    <div class="form-group">
                        <label for="Video" class="label-text mt-3">Video</label>
                        <input type="file" name="Video">
                    </div>
                    <div class="form-group">
                        <label for="OldPrice" class="label-text mt-3">OldPrice</label>
                        <input type="text" class="form-control" name="OldPrice" value="{{old('OldPrice')}}">
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
<script>
$(document).ready(function() {
    $('.edit-btn').click(function() {
      var productId = $(this).data('product-id');
      var modalId = 'editModal' + productId;
      $('#' + modalId).modal('show');
    });
  });
</script>
@endsection
