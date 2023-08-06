<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
class AdminTinTucController extends Controller{
    public function index() {
        return view('admin.tintuc.index');
    }
}
