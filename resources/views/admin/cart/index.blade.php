@extends('layouts.admin')
@section('content')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active">
                <a href="#"><b>Danh sách giỏ hàng</b></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        {{-- <div class="col-sm-2">
                            <a data-toggle="modal" data-target="#addModal"
                              class="btn btn-add"
                              title="Thêm"
                              ><i class="fas fa-plus"></i>Tạo mới giỏ hàng</a
                            >
                        </div> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="{{ route('admin.product.index') }}" method="GET" class="d-flex">
                                        <input type="text" class="form-control" name="search" placeholder="Tìm kiếm đơn đặt hàng"
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
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Giá Khuyen Mai</th>
                                <th>Mô Tả Sản Phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viewData['items'] as $items)
                            <tr>
                                <td>{{ $items->getId() }}</td>
                                <td>{{ $items->getQuantity() }}</td>
                                <td>{{ $items->getPrice()}}</td>
                                <td>{{ $items->getOrderId()}}</td>
                                <td>{{ $items->getProductId()}}</td>
                                <td class="d-flex">
                                    <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal" data-product-id="{{ $items->getId() }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                      </button>
                                    <form action="{{ route('admin.cart.delete', $items->getId()) }}" method="POST">
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
                              <div class="modal fade" id="editModal{{ $items->getId() }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h2 class="modal-title text-black-50" id="exampleModalLabel">Sửa Sản Phẩm</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-black-50">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.cart.update', ['id' => $items->getId()]) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="" class="label-text mt-3">Mã Sản Phẩm</label>
                                        <input type="text" class="form-control" value="{{ $items->getQuantity() }}" name="IdSP">

                                        <label for="" class="label-text mt-3">Tên sản phẩm</label>
                                        <input type="text" class="form-control" value="{{ $items->getPrice() }}" name="NameSP">

                                        <label for="" class="label-text mt-3">Giá</label>
                                        <input type="text" class="form-control" value="{{ $items->getOrderId() }}" name="Price">
                            
                                        <label for="" class="label-text mt-3">Giá Khuyến mãi</label>
                                        <input type="text" class="form-control" value="{{ $items->getProductId() }}" name="OldPrice">                                                                
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
                                <a class="page-link" href="{{ $viewData['items']->appends(['search' => $viewData['search']])->url(1) }}" aria-label="{{ __('pagination.first') }}">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">{{ __('pagination.first') }}</span>
                                </a>
                            </li>
                            {!! $viewData['items']->appends(['search' => $viewData['search']])->links('pagination::bootstrap-4')->toHtml() !!}
                            <li class="page-item" style="margin-top:20px">
                                <a class="page-link" href="{{ $viewData['items']->appends(['search' => $viewData['search']])->url($viewData['items']->lastPage()) }}" aria-label="{{ __('pagination.last') }}">
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
                <form method="POST" action="{{ route('admin.cart.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="IdSP" class="label-text mt-3">IdSP</label>
                        <input type="text" class="form-control" name="IdSP" value="{{old('quantity')}}">
                    </div>
                    <div class="form-group">
                        <label for="NameSP" class="label-text mt-3">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="NameSP" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                      <label for="Price" class="label-text mt-3">Giá Sản Phẩm</label>
                      <input type="text" class="form-control" name="Price" value="{{old('order_id')}}">
                    </div>
                    <div class="form-group">
                      <label for="Describe" class="label-text mt-3">Mô Tả Sản Phẩm</label>
                      <input type="text" class="form-control" name="Describe" value="{{old('product_id')}}">
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
