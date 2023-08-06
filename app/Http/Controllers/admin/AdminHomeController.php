<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        // $totalCustomers = Customers::count();
        // $totalEmployee= Employee::count();
        // $totalCategory = Category::count();
        // $totalProduct = Products::count();
        // $totalTable = Table::count();
        return view('admin.home.index');
    }
}
