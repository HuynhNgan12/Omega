<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', function(){
        return view('layouts.admin');
    });
});

Route::get('/admin/product','App\Http\Controllers\admin\AdminProductController@index')->name("admin.product.index");
Route::post("/admin/product/store","App\Http\Controllers\admin\AdminProductController@store")->name("admin.product.store");
Route::delete('/admin/product/{id}/delete','App\Http\Controllers\admin\AdminProductController@delete')->name("admin.product.delete");
Route::get('/admin/product/{id}/edit','App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
Route::put('/admin/product/{id}/update','App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");

Route::get('/','App\Http\Controllers\layouts\HomeController@Home')->name("layouts.home");
Route::get('/Baomat','App\Http\Controllers\support\BaomatController@Baomat')->name("support.Baomat");
Route::get('/Baohanh','App\Http\Controllers\support\BaohanhController@Baohanh')->name("support.Baohanh");
Route::get('/Thanhtoan','App\Http\Controllers\support\ThanhtoanController@Thanhtoan')->name("support.Thanhtoan");
Route::get('/Doitra','App\Http\Controllers\support\DoitraController@Doitra')->name("support.Doitra");
Route::get('/Muahang','App\Http\Controllers\support\MuahangController@Muahang')->name("support.Muahang");
Route::get('/Vanchuyen','App\Http\Controllers\support\VanchuyenController@Vanchuyen')->name("support.Vanchuyen");

Route::get('/ZenceloA','App\Http\Controllers\news\ZaController@Za')->name("news.Za");
Route::get('/AvatarOn','App\Http\Controllers\news\AvataronController@Avataron')->name("news.Avataron");
Route::get('/Khuyenmai','App\Http\Controllers\news\KhuyenmaiController@Khuyenmai')->name("news.Khuyenmai");
Route::get('/Phanbiet','App\Http\Controllers\news\PhanbietController@Phanbiet')->name("news.Phanbiet");

Route::get('/Lienhe','App\Http\Controllers\contact\ContactController@Contact')->name("contact.Contact");

Route::get('/Gioithieu','App\Http\Controllers\GioithieuController@Gioithieu')->name("introduce.Gioithieu");

Route::get('/Sanpham','App\Http\Controllers\product\tbdcController@tbdc')->name("product.tbdc");
Route::get('/Sanpham/{id}', 'App\Http\Controllers\product\tbdcController@MotaSP')->name("product.MotaSP");
Route::get('/DichvuKM','App\Http\Controllers\service\serviceKMController@serviceKM')->name("service.serviceKM");
Route::get('/DichvuGH','App\Http\Controllers\service\serviceGHController@serviceGH')->name("service.serviceGH");
Route::get('/DichvuSP','App\Http\Controllers\service\serviceSPController@serviceSP')->name("service.serviceSP");



Route::get('/cart','App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete','App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}','App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function(){
    Route::get('/cart/purchase','App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders','App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

Route::get('/Admin', 'App\Http\Controllers\admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/AdminTintuc', 'App\Http\Controllers\admin\AdminTintucController@index')->name("admin.tintuc.index");
Route::get('/AdminCart', 'App\Http\Controllers\admin\AdminCartController@index')->name("admin.cart.index");


Route::get('/admin/cart','App\Http\Controllers\admin\AdminCartController@index')->name("admin.cart.index");
Route::post("/admin/cart/store","App\Http\Controllers\admin\AdminCartController@store")->name("admin.cart.store");
Route::delete('/admin/cart/{id}/delete','App\Http\Controllers\admin\AdminCartController@delete')->name("admin.cart.delete");
Route::get('/admin/cart/{id}/edit','App\Http\Controllers\admin\AdminCartController@edit')->name("admin.cart.edit");
Route::put('/admin/cart/{id}/update','App\Http\Controllers\admin\AdminCartController@update')->name("admin.cart.update");
