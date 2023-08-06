@extends('layouts.home')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
{{-- <div class="card">
<div class="card-header">
Purchase Completed
</div> --}}
<div class="card-body">
<div class="alert alert-success" role="alert">
Chúc mừng bạn đã thanh toán thành công!
<b>#{{ $viewData['order']->getId() }}</b>
</div>
</div>
{{-- </div> --}}