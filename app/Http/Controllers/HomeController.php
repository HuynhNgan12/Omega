<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class HomeController extends Controller{
    public function Home() {
        return view('layouts.home');
    }
}
